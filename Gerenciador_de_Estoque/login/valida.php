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



if(isset($_POST['login'])){



    $custo = '08';
    $salt = 'FT6k32oQBhMnGAjvN3U2zR';




    $login = crypt($_POST['login'], '$2a$' . $custo . '$' . $salt . '$');
    $senha = crypt($_POST['senha'], '$2a$' . $custo . '$' . $salt . '$');

           
$comando = "select * from usuarios where login = '".$login."' and senha = '".$senha."'";

 if ($query = $mysqli->query($comando)) {
  if($query->num_rows==1){
        while($dados=$query->fetch_object()){
      $_SESSION['usuario'] = $dados->id;
    $_SESSION['acesso'] = $dados->acesso;

}





if ($_SESSION['acesso']==1) {
header('location:../index.php');

echo "<meta http-equiv='refresh' content='1; URL='../index.php''/>";

}
if ($_SESSION['acesso']==0) {

 header('location:../home.php');
}


                          }else{
                              $_SESSION['erro'] = "Usuário ou Senha inválidos";
 header('location:index.php');
}

 }
}
?>