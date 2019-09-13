<?php

//km
$distance = rand(1, 10); 

//1/100km
$consumption = 7.5; 

//Eur/1
$price_1 = 1.3;
$fuel_total = ($distance * $consumption)/100;
$price_trip = $fuel_total * $price_1;
       
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kelionės skaičiuoklė</h1>
        <ul>
            <li> Nuvažiuota distancija <?php print $distance; ?>     
            </li>
          <li> Sunaudota <?php print $fuel_total; ?>
            </li>
           <li> Kaina <?php print $price_trip; ?> eur
            </li>
        </ul>
    </body>
</html>