<?php

var_dump($_SESION);

session_start();

var_dump($_SESION);

$_SESION = [
    'user' => 'Petras'
];

$_SESION['low'] = 'rider';
        
var_dump($_SESION);
   
