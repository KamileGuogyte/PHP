
<?php

$array = [];
for ($i = 1; $i < 7; $i++) {
    $array[] = date('l', strtotime("+ $i days")); 
}
    var_dump($array);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2><?php  ?></h2>
    </body>
</html> 
