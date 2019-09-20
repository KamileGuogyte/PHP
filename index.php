<?php

$zodziai = [
    'Petras',
    'laukė',
    'prie',
    'parduotuvės',
    'durų'
];

$count_zodziai = count($zodziai) - 1;
$rasinelis = '';
        
//foreach ($zodziai as $kiti_zodziai) {
//    $rand_idx = rand(0, $count_zodziai);
//    $rasinelis .= "$zodziai[$rand_idx] ";
//};
//var_dump($rasinelis);

for ($x=0; $x < 20; $x++) {
   $rand_idx = rand(0, $count_zodziai);
    $rasinelis .= "$zodziai[$rand_idx] ";
}


  var_dump($rasinelis); 
 
//$text = $zodziai[$rand_idx];

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Rašinėlis </h1>
    <ul>
       
    </ul>
</body>
</html>


