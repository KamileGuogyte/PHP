<?php

var_dump($_POST);

$ats = 0;

function square($x) {
    return $x ** 2;    
}

if (isset($_POST['enter'])){
    $ats = square($_POST['skaicius']);
}

$text = "Atsakymas: $ats";

?>
<html>
    <head>
        <meta charset="UTF-8"
        <title>Forms</title>
    </head> 
    <body>
        <form method="POST">
            <span>Pakelti kvadratu:</span>
            <input type="number" name="skaicius" required/>
            <input type="submit" name="enter"/>
        </form>
        <h1><?php print $text; ?></h1>
    </body>
</html>


