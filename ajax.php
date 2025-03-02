<?php 

switch ($_POST) {
    
case 'login':
    require('core/bin/ajax/goLogin.php');
    break;
case 'reg':
    require('core/bin/ajax/goReg.php');
    break;

default:
    break;
}

?>
