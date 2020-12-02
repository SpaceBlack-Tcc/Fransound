<?php

 

require_once('../config.php');
require_once(DBAPI);

 



 


$contatos = null;
$contato = null;

 

/**
 *  Listagem de Clientes
 */
function index() {
    global $contatos;
    $contatos = find_all('contatos');
}

 

function add() {
    if (!empty($_POST['contato'])) {
        $today =
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
          $contato = $_POST['contato'];
          $contato['modified'] = $contato['created'] = $today->format("Y-m-d H:i:s");
save('contatos', $contato);
   header('location: index.php');
   }
   }

 

   function edit() {
   $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
          if (isset($_POST['contato'])) {
            $contato = $_POST['contato'];
             $contato['modified'] = $now->format("Y-m-d H:i:s");
             update('contatos', $id, $contato);
             header('location: index.php');
                 } else {
                     global $contato;
                      $contato = find('contatos', $id);
                          }
                          } else {
                              header('location: index.php');
                               }
                               }

 

                               function view($id = null) {
                                   global $contato;
                                   $contato = find('contatos', $id);
                                   }

 

                                   function delete($id = null) {
                                           global $contato;
                                             $contato = remove('contatos', $id);
                                               header('location: mensagem.php');
                                           }