<?php
session_start();
   require_once('functions.php');
       index();
       ?>
<?php include(HEADER_TEMPLATE); ?>
<header>
<div class="row">
<div class="col-sm-6">
<h2>Produtos</h2>
</div>
<div class="col-sm-6 text-right h2">
<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
</div>
</div>
</header>

<hr>
<table class="table table-hover">
<thead>
<tr>
<th>ID</th>
<th>Nome do Produto</th>  
<th>Marca</th>   
<th>Categoria</th> 
<th>Valor</th>
<th>Quantidade</th>
<th>Atualizado em</th>
<th style="text-align: right;">Opções</th>
</tr>
</thead>
<tbody>

  





<?php 
$sql= "Select produtos.id as 'Id', produtos.nome as 'Produto', produtos.descricao as 'Descrição', produtos.valor as 'Valor', produtos.quantidade as 'Quantidade' , marcas.nome as 'Marca' , categorias.nome as 'Categoria' , produtos.created as 'Criado_em', produtos.modified as 'Modificado_em' 
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
echo "<tr><td>".$dados->Id."</td><td>".$dados->Produto."</td><td>".$dados->Marca."</td><td>".$dados->Categoria."</td><td>".$dados->Valor."</td><td>".$dados->Quantidade."</td><td>".$dados->Modificado_em."</td>";

echo "<td class='actions text-right'>";


    ?>





	    	<a href="view.php?id=<?php echo $dados->Id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar Detalhes</a>
	    	<a href="edit.php?id=<?php echo $dados->Id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
	    	<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-produto="<?php echo $dados->Id; ?>">
	    		<i class="fa fa-trash"></i> Excluir
	    			</a>
	    				</td>
	    		
	    				</tr>
	    				<?php  
	    		 }


}
 ?>
	    	
	    				
	    				
	    						</tbody>
	    						</table>
	    						<?php include('modal.php'); ?>
	    						<?php include(FOOTER_TEMPLATE); ?>