<?php 
session_start();

$servidor = 'localhost';
$usuario = 'id15512619_root';
$senha = '6Es*VsQa$iiF~fyx';
$banco = 'id15512619_wda';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if (mysqli_connect_errno()) trigger_error (mysqli_connect_error());
else{
	
}
$mysqli->set_charset("utf8");














       $custo = '08';
       $salt = 'FT6k32oQBhMnGAjvN3U2zR';


 $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
       
       
       
       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
        $criado = $today->format("Y-m-d H:i:s");
        $modificado = $today->format("Y-m-d H:i:s");

$login = crypt($_POST['login'], '$2a$' . $custo . '$' . $salt . '$');
$senha = crypt($_POST['senha'], '$2a$' . $custo . '$' . $salt . '$');




$sql = "insert into usuarios values (null,'".$nome."', '".$login."','".$email."','".$senha."','".$telefone."','".$criado."','".$modificado."','1', '1')";
   
  if(!$mysqli->query($sql)){
echo $mysqli->error;
$_SESSION['erro']="ocorreu um erro";
}else {
    $_SESSION['sucesso']="Cadastro com sucesso";
    header('location:../index.php');
}


?>