<?php

date_default_timezone_set('Europe/Vilnius');
print date('Y-M-d H:i:sa');
print date(' Y-m-d', strtotime('+1 week'));
        

?>


<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <title>PHP lydės ir <?php print date(' Y-m-d', strtotime('+1 day')); ?></title>
    </head>
    <body>
        <h1>Kamilė - PHP su manim buvo ir <?php print date(' H:i:s', strtotime('-1 hour')) . ' valandą!';?></h1>
        <p><?php print date('Y', strtotime('+1 year')); ?> ne už kalnų!</p>
       
    </body>
</html>
