<?php
switch($_GET['code'])
{
case '404':header('Location: https://www.243tech.com/erreur-404.php');
break;
default:header('Location: https://www.243tech.com/');
}
?>