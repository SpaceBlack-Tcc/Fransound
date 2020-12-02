<?php 
session_start();

 if (!isset($_SESSION['usuario'])) {
header('location:index.php');
  }
$servidor = 'localhost';
$usuario = 'id15512619_root';
$senha = '6Es*VsQa$iiF~fyx';
$banco = 'id15512619_wda';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if (mysqli_connect_errno()) trigger_error (mysqli_connect_error());
else{
	
}
$mysqli->set_charset("utf8");
$id =  $_SESSION['usuario'];
$sql= "select * from  usuarios where id='".$id."'";  
   if (!$query= $mysqli->query($sql)) {
 echo $mysqli->error;
  } 
  else{
    while ($dados=$query->fetch_object()) {
        
        
        $_SESSION['nome']=$dados->nome;
        $_SESSION['email']=$dados->email;
        $_SESSION['telefone']=$dados->telefone;
?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/loja.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style type="text/css">
	
#imagem{
  width: 320px;
  position: absolute;
  left: 200px;
  top: 200px;
}


</style>
    <title>Contato</title>
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

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Contato<span class="sr-only">(current)</span></a>
      </li>


  <li class="nav-item active">
        <a class="nav-link" href="../produtos/loja.php">Produtos<span class="sr-only">(current)</span></a>
      </li>
    <?php
    if (isset($_SESSION['usuario'])) {
   
 echo   "<li class='nav-item dropdown'>";
 echo  "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true'aria-expanded='false'>";
     echo    "Conta";
        echo"</a>";
        echo"<div class='dropdown-menu'aria-labelledby='navbarDropdown'>";
          echo"<a class='dropdown-item' href='conta.php'>Minha Conta</a>";
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
 if(isset($_SESSION['sucesso'])){
     
     echo "<h4 style='color:green;'>".$_SESSION['sucesso']."</h4>";
        unset($_SESSION['sucesso']);
 }

 ?>


<h3 style="margin-left: 80px;">CENTRAL DE ATENDIMENTO AO CLIENTE</h3>
	<p><b style="margin-left: 80px;">Preencha o formulário. A empresa entrará em contato o quanto antes.</b></p>
		<hr>

		
<div style="width: 100%; overflow: hidden;">
          <div style="width: 600px; float: left; margin-left:13px; ">
	
	
		<form method="POST" action="salva_mensagem.php">
			Nome: <input class="form-control" type="text" name="nome" disabled placeholder="Nome Completo" value="<?php echo $dados->nome; ?>" ></br>
				E-Mail: <input class="form-control" type="email" name="email" disabled placeholder="email" value="<?php echo $dados->email; ?>" ></br>
			Assunto: <input class="form-control" type="text" name="assunto" placeholder="Assunto do contato" required></br>
			Mensagem: <br><textarea class="form-control" name="mensagem"></textarea></br>
		<button type="submit" class="btn btn-warning" style="width: 22vw; border-radius: 0px;">Enviar</button></center><br>
		</form>	
		
		
		</div>
		
   <div style="margin-left: 620px;margin-right:10px;"> 
		<h4><b>Endereço:</b>Av. Marginal, 8225 - Bopiranga, Itanhaém - SP, 11740-000</h4>
		<h4><b>Horário de atendimento:</b>De segunda á sábado das 08hrs as 18hrs</h4>
		<h4><b>Telefone de contato:</b> (13) 3425-3889</h4>
		<br>
		<p>*Os horários de funcionamento ou serviços podem mudar</p>
		</div>
	</div>
		<?php
  }
}




?>

	
	</body>
</html>