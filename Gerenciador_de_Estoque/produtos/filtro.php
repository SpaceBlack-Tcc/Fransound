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
	#foto{
		width: 300px;
	}
fieldset{
	display: inline;
	height: 350px;
	width: 400px;
	margin-left:20px;
  
}
h3{
	display: inline-block !important;
}


#espaco{
	height: 100%;
	width: 25px;
	float: left;
}

#pesquisa{
	height: 100%;
	width: 230px;
	background-color: lightgray;
	float: right;
}
#erro{
  border-color: red;

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
          echo"<a class='dropdown-item' href='../contatos/conta.php'>Minha Conta</a>";
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

$cat = $_POST['Categorias'] ;
$mar = $_POST['Marcas'];
$pre = $_POST['Preco'];
$min = $_POST['min'];
$max = $_POST['max'];
if ($pre == 1) {
  $pre = "desc";
}
if ($pre == 0) {
  $pre = "asc";
}



if ($cat != 0 && $mar == 0) {

 
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
produtos.categoria = categorias.id and 
categorias.id=".$cat." and 
produtos.valor >= " .$min." and
produtos.valor <= " .$max." 
order by Preco ".$pre; 

if (!$query= $mysqli->query($sql)) {
     
  } 
  if($query->num_rows==0){
    echo "<center>";
    echo "<div class='col-6'>";
        echo "<div class='col-md-offset-3'>";
    echo "<h1>Nenhum produto foi achado usando suas especificações</h1>";
    echo "<img  style='height:250px;' src='img/erro.png' >";
    echo "<br>";
    echo "<a href='loja.php'><button class='btn btn-danger'>Voltar</button></a>";
    echo "</div>";
    echo "</div>";
    echo "</center>";
  }
  else{
    while ($dados=$query->fetch_object()) {
$Marca = $dados->Marca;
$DMarca = $dados->DMarca;
$Categoria = $dados->Categoria;
$DCategoria = $dados->DCategoria;
$Produto = $dados->Produto;
$Preco = $dados->Preco;
$Id_produto = $dados->idproduto;







echo "<fieldset>";

echo "<h4>".$Produto."</h4>";
echo "<h5>".$Categoria."</h5>";
echo "<p>Marca: ".$Marca."</p>";
echo "<div>";
echo "<label for= ' ".$Id_produto." '  ><img src='img/placeholder.png' id ='foto' ><br>";
echo "</div>";

echo "<label>";
echo "<h3>R$: ".$Preco.",00  ‎ ‎ ‎<h3>";

echo "<a href='produto.php? id=$dados->idproduto' ><button class='btn btn-outline-success ' type='submit' id=' ".$Id_produto." '>Ver Detalhes</button></a>";


echo "</div>";
echo  "</fieldset>";


}
}
    












}//Fim primeiro if CI-M0




if ($cat == 0 && $mar != 0) {

 
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
produtos.categoria = categorias.id and 
marcas.id=".$mar." and 
produtos.valor >= " .$min." and
produtos.valor <= " .$max." 
order by Preco ".$pre; 

if (!$query= $mysqli->query($sql)) {
     
  } 

if($query->num_rows==0){
    echo "<center>";
    echo "<div class='col-6'>";
        echo "<div class='col-md-offset-3'>";
    echo "<h1>Nenhum produto foi achado usando suas especificações</h1>";
    echo "<img  style='height:250px;' src='img/erro.png' >";
    echo "<br>";
    echo "<a href='loja.php'><button class='btn btn-danger'>Voltar</button></a>";
    echo "</div>";
    echo "</div>";
    echo "</center>";
  }

  else{
    while ($dados=$query->fetch_object()) {
$Marca = $dados->Marca;
$DMarca = $dados->DMarca;
$Categoria = $dados->Categoria;
$DCategoria = $dados->DCategoria;
$Produto = $dados->Produto;
$Preco = $dados->Preco;
$Id_produto = $dados->idproduto;







echo "<fieldset>";

echo "<h4>".$Produto."</h4>";
echo "<h5>".$Categoria."</h5>";
echo "<p>Marca: ".$Marca."</p>";
echo "<div>";
echo "<label for= ' ".$Id_produto." '  ><img src='img/placeholder.png' id ='foto' ><br>";
echo "</div>";

echo "<label>";
echo "<h3>R$: ".$Preco.",00  ‎ ‎ ‎<h3>";

echo "<a href='produto.php? id=$dados->idproduto' ><button class='btn btn-outline-success ' type='submit' id=' ".$Id_produto." '>Ver Detalhes</button></a>";


echo "</div>";
echo  "</fieldset>";


}
}
    












}//Fim segundo if C0-M1




if ($cat != 0 && $mar != 0) {

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
produtos.categoria = categorias.id and 
categorias.id=".$cat." and
marcas.id=".$mar." and 
produtos.valor >= " .$min." and
produtos.valor <= " .$max." 
order by Preco ".$pre; 

if (!$query= $mysqli->query($sql)) {
     
  }
  if($query->num_rows==0){
    echo "<center>";
    echo "<div class='col-6'>";
        echo "<div class='col-md-offset-3'>";
    echo "<h1>Nenhum produto foi achado usando suas especificações</h1>";
    echo "<img  style='height:250px;' src='img/erro.png' >";
    echo "<br>";
    echo "<a href='loja.php'><button class='btn btn-danger'>Voltar</button></a>";
    echo "</div>";
    echo "</div>";
    echo "</center>";
  } 
  else{
    while ($dados=$query->fetch_object()) {
$Marca = $dados->Marca;
$DMarca = $dados->DMarca;
$Categoria = $dados->Categoria;
$DCategoria = $dados->DCategoria;
$Produto = $dados->Produto;
$Preco = $dados->Preco;
$Id_produto = $dados->idproduto;







echo "<fieldset>";

echo "<h4>".$Produto."</h4>";
echo "<h5>".$Categoria."</h5>";
echo "<p>Marca: ".$Marca."</p>";
echo "<div>";
echo "<label for= ' ".$Id_produto." '  ><img src='img/placeholder.png' id ='foto' ><br>";
echo "</div>";

echo "<label>";
echo "<h3>R$: ".$Preco.",00  ‎ ‎ ‎<h3>";

echo "<a href='produto.php? id=$dados->idproduto' ><button class='btn btn-outline-success ' type='submit' id=' ".$Id_produto." '>Ver Detalhes</button></a>";


echo "</div>";
echo  "</fieldset>";


}
}
    












}//Fim terceiro if C1-M1



?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>