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
		width: 290px;
	}
fieldset{
	display: inline;
	height: 350px;
	width: 380px;
  
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
	position: absolute;
	right: 1px;
	top: 100px;
}
#limite{
	width: 200px;
}
#preco{
	
	display: inline-block;
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
        <a class="nav-link" href="#">Produtos<span class="sr-only">(current)</span></a>
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
  
  <div id="espaco">
  </div>


        
 





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
    while ($dados=$query->fetch_object()) {
$Marca = $dados->Marca;
$DMarca = $dados->DMarca;
$Categoria = $dados->Categoria;
$DCategoria = $dados->DCategoria;
$Produto = $dados->Produto;
$Preco = $dados->Preco;
$Id_produto = $dados->idproduto;







echo "<fieldset>";

echo "<p><h4>".$Produto."</h4></p>";
echo "<p><h5>".$Categoria."</h5></p>";
echo "<p>Marca: ".$Marca."</p>";
echo "<div>";
echo "<label for= ' ".$Id_produto." '  ><img src='img/placeholder.png' id ='foto' ><br>";
echo "</div>";

echo "<label>";
echo "<p><h3>R$: ".$Preco.",00  ‎ ‎ ‎<h3></p>";

echo "<a href='produto.php? id=$dados->idproduto' ><button class='btn btn-outline-success ' type='submit' id=' ".$Id_produto." '>Ver Detalhes</button></a>";


echo "</div>";
echo	"</fieldset>";


}
}
    

?>



 <div id="pesquisa">
  	<center>
  	<h1>Filtros</h1>

    
         <form method="post" action="filtro.php">
        <label>Categorias:</label>
        <div id="limite">
 <select name="Categorias" class="form-control">
      <option value="0">Escolha a Categoria</option>
  <?php
       $sql = "select id , nome from categorias";

    if (!$query= $mysqli->query($sql)) {
 echo $mysqli->error;
  } 
  else{
    while ($dados=$query->fetch_object()) {
    echo "<option value = ".$dados->id.">".$dados->nome."</option>";
}
}

        ?>
    </div>
         </select>
<br>



 <label>Marcas:</label>
        <div id="limite">
 <select name="Marcas" class="form-control">
         <option value="0">Escolha a Marca</option>
  <?php
       $sql = "select id , nome from marcas";

    if (!$query= $mysqli->query($sql)) {
 echo $mysqli->error;
  } 
  else{
    while ($dados=$query->fetch_object()) {
    echo "<option value = ".$dados->id.">".$dados->nome."</option>";
}
}

        ?>
    </div>
         </select>
<br>

 <label>Preço:</label>
        <div id="limite">
 <select name="Preco" class="form-control">
        
 <option value="1">Maior Preço</option>
 <option value="0">Menor Preço </option>

       
    </div>
         </select>
<br>


             <div>
            <label>Limite de Preço:</label><br>
  	 	 	<input type="number" style="width: 75px; display: inline;"class="form-control"  required="" name="min" min="0" placeholder="Min">
  	 	 	<input type="number" style="width: 75px; display: inline; "class="form-control" required="" name="max" min="1" placeholder="Max">
  	 	 	
  	 	    </div>


  	 	 
<br>









 <button type="submit" class="btn btn-primary">Pesquisar</button>
</form>
</center>
                 </div>
  
	





   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>