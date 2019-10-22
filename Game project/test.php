<?php

//superglobalus masyvas $_SESSIN
var_dump($_SESION); //nieko nebus nes nieko nera

session_start();

var_dump($_SESION); //parasius sesion_start jau vardambinasi

//PHPsesid susikure po parasymo session_start
//value - kai useris issiuncia cookie i serveri . sesssion start sako, ar turiu serveryje  jeigu guli
        //pagal numeri value. Jis bus priskirtas bent tam apsilankymui prisijungimui.
        //Dazniausiai mes norime cookies kai prisilogino,. Pasvaordas bus i sesion masyva bus irasytas.
        //Esme pagal value verte serverio cookies bus susiejams.

$_SESION = [
    'user' => 'Petras'
];




$_SESION['low'] = 'rider';
        
var_dump($_SESION);

//ssesionas superglobalus masyvas priplidomas is cokie .
        //Pagal session start komanda ir pagal palikta value skaisius bus irasytas user - aurimas i masyva


   
