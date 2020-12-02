<?php
session_start();
?>
<html>


  <head>
    <style type="text/css">
      
        #foto{
    width: 125px;
  }
#centro{  
  float: left;
    margin: auto;
    display: inline;
  width: 33%;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/loja.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pagina Principal</title>
  </head>
  <body>

         <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">
          <img src="login/logo.png" width="75px" alt="">
        </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>  
      
      
      
      <?php
        if (isset($_SESSION['usuario'])) {  
      echo"<li class='nav-item active'>";
echo "<a class='nav-link' href='contatos/index.php'>Contato<span class='sr-only'>(current)</span></a>";
      echo "</li>";
        }
?>

  <li class="nav-item active">
        <a class="nav-link" href="produtos/loja.php">Produtos<span class="sr-only">(current)</span></a>
      </li>
    <?php
    if (isset($_SESSION['usuario'])) {
   
 echo   "<li class='nav-item dropdown'>";
 echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true'aria-expanded='false'>";
     echo    "Conta";
        echo"</a>";
        echo"<div class='dropdown-menu'aria-labelledby='navbarDropdown'>";
          echo"<a class='dropdown-item' href='contatos/conta.php'>Minha Conta</a>";
          echo"<a class='dropdown-item' href='sair.php/'>Sair</a>";
        
       echo "</div>";
      echo "</li>";










    }else{
   echo   "<li class='nav-item dropdown'>";
 echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true'aria-expanded='false'>";
     echo    "Conta";
        echo"</a>";
        echo"<div class='dropdown-menu'aria-labelledby='navbarDropdown'>";
          echo"<a class='dropdown-item' href='login/index.php'>Entrar</a>";
          echo"<a class='dropdown-item' href='cadastro/'>Cadastrar</a>";
        
       echo "</div>";
      echo "</li>";
    }
     ?> 
     <?php
 if (isset($_SESSION['acesso'])) {
        if ($_SESSION['acesso']==0) {  
      echo"<li class='nav-item active'>";
echo "<a class='nav-link' href='home.php'>Gerenciador<span class='sr-only'>(current)</span></a>";
      echo "</li>";
        }
 }
?>
    </ul>





    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procure algum produto" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/exemplo1.jpg"
        alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/exemplo1.jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/exemplo1.jpg"
        alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Proximo</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
<br><br>

 <?php 
 $servidor = 'localhost';
$usuario = 'id15512619_root';
$senha = '6Es*VsQa$iiF~fyx';
$banco = 'id15512619_wda';








$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if (mysqli_connect_errno()) trigger_error (mysqli_connect_error());
else{
  
}
$mysqli->set_charset("utf8");

$sql= "Select produtos.nome as 'Produto' , produtos.id as 'idproduto', produtos.valor as 'Preco', categorias.nome as 'Categoria' , marcas.nome as 'Marca' , marcas.descricao as 'DMarca', categorias.descricao as 'DCategoria'
from produtos, marcas , categorias where
produtos.marca = marcas.id and
produtos.categoria = categorias.id"; 
if (!$query= $mysqli->query($sql)) {
     
  } 
  else{
$counter = 0;
$max = 3;
    while(($dados=$query->fetch_object()) and ($counter < $max)) {
$counter++;
$Marca = $dados->Marca;
$DMarca = $dados->DMarca;
$Categoria = $dados->Categoria;
$DCategoria = $dados->DCategoria;
$Produto = $dados->Produto;
$Preco = $dados->Preco;
$Id_produto = $dados->idproduto;





echo "<center>";
echo "<div id='centro'>";


echo "<h5>".$Produto."</h5>";
echo "<h6>".$Categoria."</h6>";
echo "<p>Marca: ".$Marca."</p>";
echo "<div>";
echo "<label for= ' ".$Id_produto." '  ><img src='produtos/img/placeholder.png' id ='foto' ><br>";
echo "</div>";

echo "<label>";
echo "<h3>R$: ".$Preco.",00  ‎ ‎ ‎<h3>";

echo "<a href='produtos/produto.php? id=$dados->idproduto' ><button class='btn btn-outline-success ' type='submit' id=' ".$Id_produto." '>Ver Detalhes</button></a>";


echo "</div>";

echo "</div>";

echo "</center>";
}
}
    

?>














    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>