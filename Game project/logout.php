<?php


$_SESSION = []; //istrinam kaip session unset

setcookie(session_name(), '', time() -1, '/');

session_destroy(); 

header('Location: create.php');

