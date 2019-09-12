<?php
//$laikas = date('s');
//print $laikas . '<br>';
//
//$laikas_reversed = date('s', strtotime('-1 sec')); 
//print $laikas_reversed;

$laikas = date('s');
//print $laikas . '<br>';

$laikas_reversed = 59 - $laikas;
//print $laikas_reversed;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bombos sprogimas su kintamaisiais</title>
        <style>
            .squareA {
                width: 150px;
                height: 150px;
                background-color: pink;
                border:solid black 5px; 
            }

            .squareB0 {
                background-color: red;
                border:solid yellow 5px;
            }   
        </style>
    </head>
    <body>
        <div class="squareA squareB<?php print $laikas_reversed; ?>">
            <p><?php print $laikas; ?></p>
            <p><?php print $laikas_reversed; ?></p>
        </div>
    </body>
</html>







