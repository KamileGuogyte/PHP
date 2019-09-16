<?php

$x = rand(1, 10);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Foreach ciklas</title>
    </head>
    <body>
<?php for ($i = 1; $i <= $x; $i++):
     ?> 
        <p><?php print "Tai yra $i-tasis ciklas"; ?></p>
        <?php endfor; ?>

    </body>
</html>

