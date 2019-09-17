<?php
$days = 365;

$count_ttl = 0;

$cigs_saved = 0;



for ($i = 1; $i <= $days; $i++) {

    $cigs_sun = rand(5, 6);

    $cigs_sat = rand(10, 20);

    $cigs_mon_fri = rand(3, 4);

    $time_per_cig = rand(3, 7);

    $pack_price = rand(3.4, 3.6);



    $loop_date = date('N', strtotime("+$i day"));

    if ($loop_date == 7) {

        $count_ttl += $cigs_sun;
    } elseif ($loop_date == 6) {

        $count_ttl += $cigs_sat;
    } elseif ($loop_date == 5) {

        $count_ttl += $cigs_mon_fri;
    } else {

        $cigs_saved += $cigs_mon_fri;
    }
}



$time_total = $count_ttl * $time_per_cig / 60;

$time_hours = intval($time_total);

$time_mins = intval(($time_total - $time_hours) * 60);



$price_ttl = ($count_ttl / 20) * $pack_price;

$price_mon_thu = ($cigs_saved / 20) * $pack_price;



$h2_text = "Per $days dienas, surukysiu $count_ttl cigarečių už $price_ttl eur.";

$h3_text = "Nerukydamas darbo dienomis, sutaupyčiau $price_mon_thu eur.";
?>

<html>

    <head>

        <meta charset="UTF-8">

        <title>Užduotis H1</title>

        <style>

            .cig {

                display: inline-block;

                background-image: url(https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ficons.iconarchive.com%2Ficons%2Fmusett%2Fcoffee-shop%2F64%2FCigarette-icon.png&f=1&nofb=1);

                background-size: contain;

                height: 16px; 

                width: 16px; 

            }

        </style>

    </head>

    <body>

        <h1>Mano dūmų skaičiuoklė</h1>

        <?php for ($i = 0; $i < $count_ttl; $i++): ?>

            <div class="cig"></div>

        <?php endfor; ?>

    </body>

</html>