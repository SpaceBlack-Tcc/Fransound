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
 $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
$nome= $_SESSION['nome'];
$email= $_SESSION['email'];
$telefone = $_SESSION['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
 $criado = $today->format("Y-m-d H:i:s");
$modificado = $today->format("Y-m-d H:i:s");
$sql = "insert into contatos values (null, '".$nome."','".$assunto."','".$mensagem."','".$criado."','".$modificado."','".$email."','".$telefone."')";

  if(!$mysqli->query($sql)){
echo $mysqli->error;
}
$_SESSION['sucesso']="Mensagem enviada com sucesso";
header('location:index.php');


?>
