<?php 		
require_once('functions.php'); 		
view($_GET['id']);	
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>categoria <?php echo $categoria['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
	<?php endif; ?>

	<dl class="dl-horizontal">

		<dt>Nome da categoria</dt>		
		<dd><?php echo $categoria['nome']; ?></dd>

	<dt>Descrição</dt>		
		<dd><?php echo $categoria['descricao']; ?></dd>

		

			<dt>Data de Cadastro:</dt>		
			<dd><?php echo $categoria['created']; ?></dd>

			<dt>Data de Modificação:</dt>		
			<dd><?php echo $categoria['modified']; ?></dd>
<br>
			<div id="actions" class="row">
					<div class="col-md-12">
						<a href="edit.php?id=<?php echo $categoria['id']; ?>" class="btn btn-primary">Editar</a>
						  <a href="index.php" class="btn btn-default">Voltar</a>

						  </div>
						  	</div>	
<?php include(FOOTER_TEMPLATE); ?>