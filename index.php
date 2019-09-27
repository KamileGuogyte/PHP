<?php

$x = 0;
$b = &$x; 


unset($b);

$b = 1; 

print $x;





?>
<html>
    <head>
        <title>Reference</title>
   
    </head> 
    <body>
     
    </body>
</html>


