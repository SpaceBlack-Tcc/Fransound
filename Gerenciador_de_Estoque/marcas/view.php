<?php 		
session_start();
require_once('functions.php'); 		
view($_GET['id']);	
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>marca <?php echo $marca['id']; ?></h2>
<hr>



	<dl class="dl-horizontal">

		<dt>Nome do marca</dt>		
		<dd><?php echo $marca['nome']; ?></dd>

	<dt>Descrição</dt>		
		<dd><?php echo $marca['descricao']; ?></dd>

		

			<dt>Data de Cadastro:</dt>		
			<dd><?php echo $marca['created']; ?></dd>

			<dt>Data de Modificação:</dt>		
			<dd><?php echo $marca['modified']; ?></dd>
<br>
			<div id="actions" class="row">
					<div class="col-md-12">
						<a href="edit.php?id=<?php echo $marca['id']; ?>" class="btn btn-primary">Editar</a>
						  <a href="index.php" class="btn btn-default">Voltar</a>

						  </div>
						  	</div>	
<?php include(FOOTER_TEMPLATE); ?>