<?php

$x = 0;

function change_x(&$x){
    $x = 1;
}
change_x($x);

print $x;




?>
<html>
    <head>
        <title>Reference</title>
   
    </head> 
    <body>
     
    </body>
</html>


