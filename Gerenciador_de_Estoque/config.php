<?php

/** O nome do banco de dados*/
define('DB_NAME', 'id15512619_wda');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'id15512619_root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '6Es*VsQa$iiF~fyx');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/Gerenciador_de_Estoque/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
