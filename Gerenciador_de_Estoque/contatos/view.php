<?php 		
session_start();
require_once('functions.php'); 		
view($_GET['id']);	
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Mensagem N° <?php echo $contato['id']; ?></h2>
<hr>



	<dl class="dl-horizontal">

		<dt>Nome do Cliente:</dt>		
		<dd><?php echo $contato['cliente']; ?></dd>

        <dt>Email do Cliente:</dt>		
		<dd><?php echo $contato['email']; ?></dd>

        <dt>Telefone do Cliente:</dt>		
		<dd><?php echo $contato['telefone']; ?></dd>

	    <dt>Assunto:</dt>		
		<dd><?php echo $contato['assunto']; ?></dd>

		<dt>Data de Envio:</dt>		
		<dd><?php echo $contato['created']; ?></dd>

        <dt>Mensagem:</dt>		
		<dd><?php echo $contato['mensagem']; ?></dd>
		
<br>
			<div id="actions" class="row">
					<div class="col-md-12">
					
						  <a href="mensagem.php" class="btn btn-default">Voltar</a>

						  </div>
						  	</div>	
<?php include(FOOTER_TEMPLATE); ?>