<?php
session_start();
   require_once('functions.php');
       index();
       ?>
<?php include(HEADER_TEMPLATE); ?>
<header>
<div class="row">
<div class="col-sm-6">
<h2>Mensagens</h2>
</div>
<div class="col-sm-6 text-right h2">

<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
</div>
</div>
</header>


<hr>
<table class="table table-hover">
<thead>
<tr>
<th>ID</th>
<th>Nome do Cliente</th>  
<th>Assunto</th>   
<th>Enviado Em:</th>
<th style="text-align: right;">Opções</th>
</tr>
</thead>
<tbody>
<?php if ($contatos) : ?>   
<?php foreach ($contatos as $contato) : ?>   
	<tr>
		<td><?php echo $contato['id']; ?></td>
	    <td><?php echo $contato['cliente']; ?></td>
	    <td><?php echo $contato['assunto']; ?></td>
	    <td><?php echo $contato['created']; ?></td>
	  
	    <td class="actions text-right">
	    	<a href="view.php?id=<?php echo $contato['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar Detalhes</a>
	    
	    	<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-produto="<?php echo $contato['id']; ?>">
	    		<i class="fa fa-trash"></i> Excluir
	    			</a>
	    				</td>
	    				</tr>
	    				<?php endforeach; ?>
	    				<?php else : ?>
	    					<tr>
	    						<td colspan="6">Nenhum registro encontrado.</td>
	    						</tr>
	    						<?php endif; ?>
	    						</tbody>
	    						</table>
	    						<?php include('modal.php'); ?>
	    						<?php include(FOOTER_TEMPLATE); ?>