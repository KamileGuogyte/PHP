<?php
$days = 365;
$count_ttl = 0;
$count_ttl_work_day = 0;
$pack_price = 3.5;

for ($i = 0; $i < $days; $i++) {
	$savaites_diena = date('N', strtotime("+$i days"));	
	print "$savaites_diena";
	if ($savaites_diena <= 5) {
        $cigs_mon_fri = rand(3, 4);
		$count_ttl_work_day += $cigs_mon_fri;
    } elseif ($savaites_diena == 6) {
		$cigs_sat = rand(10, 20);
		$count_ttl += $cigs_sat;
    } else {
		$cigs_sun = rand(1, 3);
		$count_ttl += $cigs_sun;
    }
}

$total_packs = ceil($count_ttl / 20);
$price_ttl = $total_packs * $pack_price;
$rezultatas = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eurų.";


        
$savings = "Nerūkydamas darbo dienomis sutaupyčiau $count_ttl_work_day eurų";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cigaretes Užduotis #5</title>
    </head>
    <body>
        <h1>Mano dūmų skaičiuoklė</h1>
        <h2><?php print $rezultatas; ?></h2>
         <h3><?php print $savings; ?></h3>
    </body>
</html> 