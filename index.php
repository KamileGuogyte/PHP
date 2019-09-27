<?php


$sheep = ['blee'];

for ($x = 0; $x < 4; $x++){
    var_dump($x);
   $sheep[] = &$sheep[$x];
   
}

$sheep[0] = 'kitaip';

 var_dump($sheep);


?>
<html>
    <head>
        <title>Reference</title>
   
    </head> 
    <body>
     
    </body>
</html>


