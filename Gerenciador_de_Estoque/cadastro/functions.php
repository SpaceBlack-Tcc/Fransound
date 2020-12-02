<?php

require_once('../config.php');
require_once(DBAPI);



$usuarios = null;
$usuario = null;



/**
 *  Listagem de Clientes
 */
function index() {
    global $usuarios;
    $usuarios = find_all('usuarios');
}



function add() {
    if (!empty($_POST['usuario'])) {
        $today =
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
          $usuario = $_POST['usuario'];
       $custo = '08';
       $salt = 'FT6k32oQBhMnGAjvN3U2zR';



      $usuario['login'] = crypt($_POST['login'], '$2a$' . $custo . '$' . $salt . '$');
      $usuario['senha'] = crypt($_POST['senha'], '$2a$' . $custo . '$' . $salt . '$');
          $usuario['modified'] = $usuario['created'] = $today->format("Y-m-d H:i:s");
save('usuarios', $usuario);
   header('location: ../login/index.php');
   }
   }



   function edit() {
   $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
          if (isset($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
             $usuario['modified'] = $now->format("Y-m-d H:i:s");
             update('usuarios', $id, $usuario);
             header('location: index.php');
                 } else {
                     global $usuario;
                      $usuario = find('usuarios', $id);
                          }
                          } else {
                              header('location: index.php');
                               }
                               }



                               function view($id = null) {
                                   global $usuario;
                                   $usuario = find('usuarios', $id);
                                   }



                                   function delete($id = null) {
                                           global $usuario;
                                             $usuario = remove('usuarios', $id);
                                               header('location: index.php');
                                           }
