<?php 
session_start();
require_once('functions.php'); 












  add();
  ?>

  <?php include(HEADER_TEMPLATE); ?>
  <h2>Novo Produto</h2>
  <form  method="post"  >

  	 <hr />

  	 <div class="row">	
  	 	 <div class="form-group col-md-5">
  	 	 	<label for="campo1">Nome do Produto</label>
  	 	 	<input type="text" class="form-control" name="produto['nome']" placeholder="Insira o Nome do Produto">
  	 	 	</div>

  	 	    <div class="form-group col-md-5"> 		
  	 	    	<label for="campo2">Descrição</label>
  	 	    	<input type="text" class="form-control" name="produto['descricao']" placeholder="Insira a Descrição">
  	 	    </div>
 </div>


          <div class="row"> 
       <div class="form-group col-md-5">
        <label>Categoria</label>
    <select name="produto['categoria']" class="form-control">
      <?php
       $sql = "select id , nome from categorias";

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
      <?php
       $sql = "select id , nome from marcas";

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
  	 	      	  <input type="number" class="form-control" name="produto['valor']" placeholder="Insira o Valor" min="0">
  	 	      	</div>

  	 	      	<div class="form-group col-md-5">
  	 	      	 <label for="campo2">Quantidade</label>
  	 	      	  <input type="number" class="form-control" name="produto['quantidade']" placeholder="Insira a Quantidade" min="0">
  	 	      	</div>
  	 	      </div>




  
            </div>




  	 	       <div id="actions" class="row">
  	 	       	  <div class="col-md-12">
  	 	       	  	    <button type="submit" class="btn btn-primary">Salvar</button>
  	 	       	  	    <a href="index.php" class="btn btn-default">Cancelar</a>
  	 	       	  	     </div>	 
  	 	       	  	      </div>	
  	 	       	  	  </form>
  	 	       	  	  
  	 	       	  	  <?php include(FOOTER_TEMPLATE); ?>