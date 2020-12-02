<?php

 

require_once('../config.php');
require_once(DBAPI);

 

if ($_SESSION['acesso']==1) {
header('location:index.php');
}
elseif ($_SESSION['acesso']=="") {
  header('location:index.php');
}

 


$marcas = null;
$marca = null;

 

/**
 *  Listagem de Clientes
 */
function index() {
    global $marcas;
    $marcas = find_all('marcas');
}

 

function add() {
    if (!empty($_POST['marca'])) {
        $today =
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
          $marca = $_POST['marca'];
          $marca['modified'] = $marca['created'] = $today->format("Y-m-d H:i:s");
save('marcas', $marca);
   header('location: index.php');
   }
   }

 

   function edit() {
   $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
          if (isset($_POST['marca'])) {
            $marca = $_POST['marca'];
             $marca['modified'] = $now->format("Y-m-d H:i:s");
             update('marcas', $id, $marca);
             header('location: index.php');
                 } else {
                     global $marca;
                      $marca = find('marcas', $id);
                          }
                          } else {
                              header('location: index.php');
                               }
                               }

 

                               function view($id = null) {
                                   global $marca;
                                   $marca = find('marcas', $id);
                                   }

 

                                   function delete($id = null) {
                                           global $marca;
                                             $marca = remove('marcas', $id);
                                               header('location: index.php');
                                           }