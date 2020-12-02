<?php 
session_start();
require_once('functions.php'); 
  edit();
  ?>

  <?php include(HEADER_TEMPLATE); ?>

<?php 
$sql= "Select produtos.id as 'Id', produtos.nome as 'Produto', produtos.descricao as 'Descrição', produtos.valor as 'Valor', produtos.quantidade as 'Quantidade' , marcas.nome as 'Marca' , categorias.nome as 'Categoria' , produtos.created as 'Criado_em', produtos.modified as 'Modificado_em' , categorias.id as 'IdC', marcas.id as 'IdM'
from produtos, marcas , categorias where
produtos.marca = marcas.id and
produtos.categoria = categorias.id"; 
 ?>
 <?php
if (!$query= $mysqli->query($sql)) {
     echo  "<tr>";
  echo "<td colspan='6'>Nenhum registro encontrado.</td>";
  echo"</tr>";
  } 
  else{
    while ($dados=$query->fetch_object()) {
    $IdC = $dados->IdC;
    $IdM = $dados->IdM;
    $Nmarca = $dados->Marca;

?>




  <h2>Editar Produto</h2>
  <form action="edit.php?id=<?php echo $dados->Id; ?>" method="post">

  	 <hr />

  	 <div class="row">	
  	 	 <div class="form-group col-md-5">
  	 	 	<label for="campo1">Nome do Produto</label>
  	 	 	<input type="text" class="form-control" name="produto['nome']" value="<?php echo $dados->Produto; ?>">
  	 	 	</div>

  	 	    <div class="form-group col-md-5"> 		
  	 	    	<label for="campo2">Descrição</label>
  	 	    	<input type="text" class="form-control" name="produto['descricao']" value="<?php echo $dados->Descrição; ?>">
  	 	    </div>
 </div>


<div class="row"> 
       <div class="form-group col-md-5">
        <label>Categoria</label>
    <select name="produto['categoria']" class="form-control">
      <option value=<?php echo "$dados->IdC";?> ><?php echo "$dados->Categoria"; ?></option>
      <?php
       $sql = "select id , nome from categorias where id <> $IdC ";

    if (!$query= $mysqli->query($sql)) {
 echo $mysqli->error;
  } 
  else{
    while ($dados=$query->fetch_object()) {
    echo "<option value = ".$dados->id.">".$dados->nome."</option>";
}
}

        ?>
         </select>
 </div>



       <div class="form-group col-md-5">
        <label>Marcas</label>
    <select name="produto['marca']" class="form-control">
      <option value=<?php echo "$IdM";?> >  <?php echo "$Nmarca"; ?> </option>
      <?php
       $sql = "select id , nome from marcas where id <> $IdM ";

    if (!$query= $mysqli->query($sql)) {
 echo $mysqli->error;
  } 
  else{
    while ($dados=$query->fetch_object()) {
    echo "<option value = ".$dados->id.">".$dados->nome."</option>";
}
}

        ?>
      </select>   
 </div>



</div>

                  <div class="row">
                  	<div class="form-group col-md-5">
  	 	      	 <label for="campo1">Valor</label>
  	 	      	  <input type="number" class="form-control" name="produto['valor']" value="<?php echo $produto['valor']; ?>" min="0">
  	 	      	</div>

  	 	      	<div class="form-group col-md-5">
  	 	      	 <label for="campo2">Quantidade</label>
  	 	      	  <input type="number" class="form-control" name="produto['quantidade']" value="<?php echo $produto['quantidade']; ?>" min="0">
  	 	      	</div>
  	 	      </div>

  	 	       <div id="actions" class="row">
  	 	       	  <div class="col-md-12">
  	 	       	  	    <button type="submit" class="btn btn-primary">Salvar</button>
  	 	       	  	    <a href="index.php" class="btn btn-default">Cancelar</a>
  	 	       	  	     </div>	 
  	 	       	  	      </div>	
  	 	       	  	  </form>
  	 	       	  	  

<?php
                  }
}
?>
  	 	       	  	  <?php include(FOOTER_TEMPLATE); ?>
