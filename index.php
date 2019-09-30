<?php

$array = ['a', 'c', 't', 't', 'n'];

function count_values($array, $value) {
    $counter = 0;
    foreach ($array as $ride) {
        if ($ride === $value) {
            $counter++;
        }  
    }
    return $counter;
}


$array = ['a', 'c', 't', 't', 'n'];

function change_values(&$array, $val_from, $val_to) {
    foreach ($array as &$ride) {
        if ($ride === $val_from) {
            $ride = $val_to;
        }  
    }
}

change_values($array, 't', 'T');
var_dump($array);


?>
<html>
    <head>
        <title>Reference</title>
   
    </head> 
    <body>
     
    </body>
</html>


