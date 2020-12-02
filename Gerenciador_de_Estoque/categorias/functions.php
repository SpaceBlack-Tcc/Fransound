<?php

require_once('../config.php');
require_once(DBAPI);


$categorias = null;
$categoria = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $categorias;
	$categorias = find_all('categorias');
}

function add() {
	if (!empty($_POST['categoria'])) {
		$today = 
		date_create('now', new DateTimeZone('America/Sao_Paulo'));
		  $categoria = $_POST['categoria'];
		  $categoria['modified'] = $categoria['created'] = $today->format("Y-m-d H:i:s");	
save('categorias', $categoria);
   header('location: index.php');
   }
   }

   function edit() {
   $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
     if (isset($_GET['id'])) {
         $id = $_GET['id'];
          if (isset($_POST['categoria'])) {
            $categoria = $_POST['categoria'];
             $categoria['modified'] = $now->format("Y-m-d H:i:s");		  
             update('categorias', $id, $categoria);
             header('location: index.php');
                 } else {
                 	global $categoria;
                 	 $categoria = find('categorias', $id);
                 	     } 
                 	     } else {
                 	     	header('location: index.php');
                 	     	 }
                 	     	 }

                 	     	 function view($id = null) {
                 	     	 	global $categoria;
                 	     	 	$categoria = find('categorias', $id);
                 	     	 	}

                 	     	 	function delete($id = null) {
                 	     	 			global $categoria;
                 	     	 			  $categoria = remove('categorias', $id);
                 	     	 			    header('location: index.php');
                 	     	 			}