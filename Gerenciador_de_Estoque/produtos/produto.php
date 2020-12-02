<?php
session_start();
?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/loja.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
	
#imagem{
  width: 320px;
  position: absolute;
  left: 200px;
  top: 200px;
}


</style>
    <title>Produtos</title>
  </head>
  <body>

         <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">
          <img src="../img/logo.png" width="75px" alt="">
        </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>  

     <?php
        if (isset($_SESSION['usuario'])) {  
      echo"<li class='nav-item active'>";
echo "<a class='nav-link' href='contatos/index.php'>Contato<span class='sr-only'>(current)</span></a>";
      echo "</li>";
        }
?>
      </li>


  <li class="nav-item active">
        <a class="nav-link" href="loja.php">Produtos<span class="sr-only">(current)</span></a>
      </li>
    <?php
    if (isset($_SESSION['usuario'])) {
   
 echo   "<li class='nav-item dropdown'>";
 echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true'aria-expanded='false'>";
     echo    "Conta";
        echo"</a>";
        echo"<div class='dropdown-menu'aria-labelledby='navbarDropdown'>";
          echo"<a class='dropdown-item' href='../conta/index.php'>Minha Conta</a>";
          echo"<a class='dropdown-item' href='../sair.php/'>Sair</a>";
        
       echo "</div>";
      echo "</li>";










    }else{
   echo   "<li class='nav-item dropdown'>";
 echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true'aria-expanded='false'>";
     echo    "Conta";
        echo"</a>";
        echo"<div class='dropdown-menu'aria-labelledby='navbarDropdown'>";
          echo"<a class='dropdown-item' href='../login/index.php'>Entrar</a>";
          echo"<a class='dropdown-item' href='../cadastro/'>Cadastrar</a>";
        
       echo "</div>";
      echo "</li>";
    }
     ?>
    </ul>





    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procure algum produto" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>




<?php

require_once('functions.php');
view($_GET['id']);
$id = $produto['id']  ;
?>
<?php
$sql= "Select categorias.nome as 'Categoria' , marcas.nome as 'Marca' , marcas.descricao as 'DMarca', categorias.descricao as 'DCategoria'
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







<center>
<div style="width: 200px; text-align: left;">



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


<br>
			<div id="actions" class="row">
					<div class="col-md-12">

						  <a href="loja.php" class="btn btn-default">Voltar</a>
 
						  </div>
						  	</div>
</div>
</center> 
<div id="imagem">
<img src="img/placeholder.png" style="width: 300px;">
 </div>
<footer class="container">
		<p>&copy;2020 - Space Black</p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
