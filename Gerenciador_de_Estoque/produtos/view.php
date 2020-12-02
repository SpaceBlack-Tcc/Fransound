<?php 		
require_once('functions.php'); 		
view($_GET['id']);	
$id = $produto['id']  ;
?>
<?php 
$sql= "Select  categorias.nome as 'Categoria' , marcas.nome as 'Marca' , marcas.descricao as 'DMarca', categorias.descricao as 'DCategoria'
from produtos, marcas , categorias where
produtos.marca = marcas.id and
produtos.categoria = categorias.id 
and produtos.id = $id"; 
 ?>
 <?php
if (!$query= $mysqli->query($sql)) {
     
  } 
  else{
    while ($dados=$query->fetch_object()) {
$Marca = $dados->Marca;
$DMarca = $dados->DMarca;
$Categoria = $dados->Categoria;
$DCategoria = $dados->DCategoria;

}
}
    ?>


<?php include(HEADER_TEMPLATE); ?>
<h2>Produto <?php echo $produto['id']; ?></h2>
<hr>

	<dl class="dl-horizontal">

		<dt>Nome do Produto</dt>		
		<dd><?php echo $produto['nome']; ?></dd>

	<dt>Descrição</dt>		
		<dd><?php echo $produto['descricao']; ?></dd>

		<dt>Marca</dt>		
		<dd><?php echo $Marca." : ".$DMarca; ?> </dd>

		<dt>Categoria</dt>		
		<dd><?php echo $Categoria." : ".$DCategoria; ?></dd>

		<dt>Valor</dt>		
		<dd><?php echo "R$: ".$produto['valor']; ?></dd>

		<dt>Quantidade</dt>		
		<dd><?php echo "R$: ".$produto['quantidade']; ?></dd>

			<dt>Data de Cadastro:</dt>		
			<dd><?php echo $produto['created']; ?></dd>

			<dt>Data de Modificação:</dt>		
			<dd><?php echo $produto['modified']; ?></dd>
<br>
			<div id="actions" class="row">
					<div class="col-md-12">
						<a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn btn-primary">Editar</a>
						  <a href="index.php" class="btn btn-default">Voltar</a>

						  </div>
						  	</div>	
<?php include(FOOTER_TEMPLATE); ?>