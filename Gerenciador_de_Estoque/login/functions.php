<?php

require_once('../config.php');
require_once(DBAPI);





$usuarios = null;
$usuario = null;




function login(){
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


if(isset($_POST['login'])){


    $login = crypt($_POST['login'], '$2a$' . $custo . '$' . $salt . '$');
    $senha = crypt($_POST['senha'], '$2a$' . $custo . '$' . $salt . '$');

           

$comando = "select * from usuario where login = '".$login."' and senha = '".$senha."'";
 if ($query = $mysqli->query($comando)) {
  if($query->num_rows==1){
        while($dados=$query->fetch_object())
    $_SESSION['usuario'] = $dados->cd_usuario;
        header('location:..index.php');
                          }else{
echo "<script>alert('Login ou Senha Errados');</script>";
                          }

 }
}

  



}

    /*  if ($result = $database->query($loginc)) {
     while ($obj=$result->fetch_object()) {
      $_SESSION['cod_user'] = $obj->cd_usuario;
      $_SESSION['nome'] = $obj->nm_usuario;
        header("location:../home/index.php");
    }
  }*/



?>
