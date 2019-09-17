

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

$pack_count = intval($count_ttl / 20) + 1;



$h2_text = "Per $days dienas, surukysiu $count_ttl cigarečių už $price_ttl eur.";

$h3_text = "Nerukydamas darbo dienomis, sutaupyčiau $price_mon_thu eur.";
?>

<html>

    <head>

        <meta charset="UTF-8">

        <title>Užduotis EKSTRA</title>

        <style>

            .pack {

                display: inline-block;

                background-image: url(https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn2.bigcommerce.com%2Fserver4700%2Ff4505%2Fproducts%2F35790%2Fimages%2F184452%2Fhaz_flashcigarette-full__46511.1547602571.120.120.png%3Fc%3D2&f=1&nofb=1);

                background-size: contain;

                height: 60px; 

                width: 60px;

                border: 1px solid #000000;

                margin: 2px;

            }

        </style>

    </head>

    <body>

        <h1>Mano dūmų skaičiuoklė</h1>

<?php for ($i = 0; $i < $pack_count; $i++): ?>

            <div class="pack"></div>

<?php endfor; ?>

    </body>

</html>