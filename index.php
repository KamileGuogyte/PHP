<?php

$distance = rand(100, 200);
$consumption = 7.5;
$price_1 = 1.3;
$my_money = 100; 

$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;
        
$title = 'Kelionės skaičiuoklė';
$text_1 = "Nuvažiuota distancija: $distance";
$text_2 = "Sunaudota $fuel_total l. kuro";
$text_3 = "Kaina: $price_trip pinigų";

if ($price_trip>$my_money) {
    print "Neįperkama";
} else {
    print "Įperkama";
}


?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <ul>
            <li> Turimi pinigai: <?php print $my_money; ?></li>
            <hr></hr>    
        </ul>
    </body>
</html>



