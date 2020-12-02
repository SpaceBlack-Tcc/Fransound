<?php

 

require_once('../config.php');
require_once(DBAPI);

 



 

 


$produtos = null;
$produto = null;
$marca = null;
$marcas = null;

 


$servidor = 'localhost';
$usuario = 'id15512619_root';
$senha = '6Es*VsQa$iiF~fyx';
$banco = 'id15512619_wda';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

 

if (mysqli_connect_errno()) trigger_error (mysqli_connect_error());
else{

 

}
$mysqli->set_charset("utf8");

 

 

function index() {
    global $produtos;
    $produtos = find_all('produtos');

 

 

  function clear_messages(){
    $session_close();
  }
 }

 

function add() {
    if (!empty($_POST['produto'])) {
        $today =
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
          $produto = $_POST['produto'];
          $produto['modified'] = $produto['created'] = $today->format("Y-m-d H:i:s");
save('produtos', $produto);
   header('location: index.php');
   }
   }

 

   function edit() {
   $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
          if (isset($_POST['produto'])) {
            $produto = $_POST['produto'];
             $produto['modified'] = $now->format("Y-m-d H:i:s");
             update('produtos', $id, $produto);
             header('location: index.php');
                 } else {
                     global $produto;
                      $produto = find('produtos', $id);
                          }
                          } else {
                              header('location: index.php');
                               }
                               }

 

                               function view($id = null) {
                                   global $produto;
                                   $produto = find('produtos', $id);
                                   }

 

                                   function delete($id = null) {
                                           global $produto;
                                             $produto = remove('produtos', $id);
                                               header('location: index.php');
                                           }
 