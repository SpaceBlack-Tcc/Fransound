<?php 
session_start();
require_once('functions.php'); 
  add();
  ?>

  <?php include(HEADER_TEMPLATE); ?>
  <h2>Nova Categoria</h2>
  <form action="add.php" method="post">

  	 <hr />

  	 <div class="row">	
  	 	 <div class="form-group col-md-5">
  	 	 	<label for="campo1">Nome da Categoria</label>
  	 	 	<input type="text" class="form-control" name="categoria['nome']" placeholder="Insira o Nome da Categoria">
  	 	 	</div>

  	 	    <div class="form-group col-md-5"> 		
  	 	    	<label for="campo2">Descrição</label>
  	 	    	<input type="text" class="form-control" name="categoria['descricao']" placeholder="Insira a Descrição">
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