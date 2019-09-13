<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

var_dump("Grizai velai: $grizai_velai, Grizai isgeres: $grizai_isgeres");

if ($grizai_velai && $grizai_isgeres) {
    $isvada = 'Grįžai vėlai ir išgėręs';
} elseif ($grizai_velai && !$grizai_isgeres){
    $isvada = 'Grįžai vėlai';      
} elseif(!$grizai_velai && $grizai_isgeres) {
      $isvada = 'Grįžai išgėręs';  
} else {
      $isvada = 'Nieko nepadarei';
}

?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <ul>
            <h1> Buitinė skaičiuoklė</h1>
            <h2><?php print $isvada; ?></h2>   
        </ul>
    </body>
</html>



