<?php
/*
EL NÚCLEO DE LA APLICACIÓN!
*/
session_start();

//Constantes de conexión
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jcimport');

//Constantes de la APP

define('HTML_DIR', 'html/');
define('APP_TITTLE', 'JC IMPORT');
define('APP_COPY', 'Copyright &copy; ' . date('Y', time()) . ' ');
define('APP_URL', 'http://localhost/jcimportdb/');

/*
Constantes de PHPMailer
define('PHPMAILER_HOST','');
define('PHPMAILER_USER','');
define('PHPMAILER_PASS','');
define('PHPMAILER_PORT',);
*/

//Estructura
//require('vendor/autoload.php');
require('core/bin/functions/Users.php');

require('core/models/class.Conexion.php');

$_users = Users();
?>
