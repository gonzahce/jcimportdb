<?php 

/**
* This is the description for the class below.
*
* @package    my-package
* @subpackage my-subpackage
* @author     my-name
* @version    my-version
* ...
*/

function Users() {
    $db = new Conexion();
  
    $sql = $db->query("SELECT * FROM usuarios;");
      
    if(1 == 1) {
      while($d = $db->recorrer($sql)) {
        $users[$d['id']] = $d;
      }
    } else {
      if(!isset($_SESSION['users'])) {
        while($d = $db->recorrer($sql)) {
          $users[$d['id']] = $d;
        }
      } else {
        $users = $_SESSION['users'];
      }
    }
  
    $_SESSION['users'] = $users;
  
    $db->liberar($sql);
    $db->close();
  
    return $_SESSION['users'];
  }
?>