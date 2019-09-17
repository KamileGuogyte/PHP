
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

        <title>Užduotis #6 - darbo dienų sutaupymas</title>

    </head>

    <body>

        <h1>Mano dūmų skaičiuoklė</h1>

        <h2><?php print $h2_text; ?></h2>

        <h3><?php print $h3_text; ?></h3>

    </body>

</html>