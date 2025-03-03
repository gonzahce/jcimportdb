<?php

/**
 * Login functionality.
 *
 * @package    my-package
 * @subpackage my-subpackage
 * @author     my-name
 * @version    my-version
 * ...
 */


 if (!empty($_POST['user']) and !empty($_POST['pass'])) {
    # code...
    $db = new Conexion();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = $db->query("SELECT id FROM usuarios WHERE usuario='$user' AND clave='$pass' LIMIT 1");

    if ($db->rows($sql) > 0) {
        # code...
        $_SESSION['app_id'] = $db->recorrer($sql)[0];
        echo 1;
    } else {
        echo 'Credenciales incorrectas';
    }

    $db->liberar($sql);
    $db->close();


 } else {
    echo 'Rellene todos los datos';
 }