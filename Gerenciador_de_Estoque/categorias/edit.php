<?php 
require_once('functions.php'); 
  edit();
  ?>

  <?php include(HEADER_TEMPLATE); ?>
  <h2>Editar Categoria</h2>
  <form action="edit.php?id=<?php echo $categoria['id']; ?>" method="post">

  	 <hr />

  	 <div class="row">	
  	 	 <div class="form-group col-md-5">
  	 	 	<label for="campo1">Nome da Categoria</label>
  	 	 	<input type="text" class="form-control" name="categoria['nome']" value="<?php echo $categoria['nome']; ?>">
  	 	 	</div>

  	 	    <div class="form-group col-md-5"> 		
  	 	    	<label for="campo2">Descrição</label>
  	 	    	<input type="text" class="form-control" name="categoria['descricao']" value="<?php echo $categoria['descricao']; ?>">
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