<?php
session_start();
$destino = 'foto/' . $_FILES['foto']['name'];
$arquivo_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino  );

?>