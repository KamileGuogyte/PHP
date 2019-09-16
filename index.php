<?php

$days = 365;
$cigs_mon_fri = rand(3, 4);
$cigs_sat = rand(10, 20);
$cigs_sun = rand(1, 3);
$pack_price = 3.50;

$count_ttl = 0;
$price_ttl = 0;

for ($i = 0; $i < $days; $i++) {
//    print $i;
    $savaites_diena = date('N', strtotime("+$i days"));
//print $savaites_diena<br>"

    if ($savaites_diena < 6) {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
//        print "$savaites_diena-ieni surukiau $cigs_mon_fri<br>";
    } elseif ($savaites_diena == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
//        print "$savaites_diena-ieni surukiau $cigs_sat<br>";
    } else
        $cigs_sun = rand(1, 3);
    $count_ttl += $cigs_sun;
//    print "$savaites_diena-ieni surukiau $cigs_sun<br>";
}
print ($count_ttl/20) . "<br>";
$ttl_packs = ceil($count_ttl/20);
print "$ttl_packs";
$ttl_price = $ttl_packs * $pack_price;
print "$ttl_price";
$text = "Per $days surukysiu $ttl_packs pakeliu cigareciu uz  $ttl_price eur";

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Mano dumu skaiciuokle</h1>
        <h2><?php print $text; ?></h2>



    </body>
</html>

