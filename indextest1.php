<?php

?> 
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <h1>
          <?php print 'PHP lydės ir' . ' ' . 
                  date('Y-m-d', strtotime('+' . (rand(1, 10) . 'year') . (rand(1, 12) . 'months') . (rand(1, 28) . 'days'))); ?>  
        </h1>
        <p>
             <?php print 'PHP lydės ir' . ' ' . date('Y-m-d', strtotime('+' . rand(1, 3600). 'days')) ?>  
        </p>
    <p> 
       Kamilė - <?php print 'galbūt turėsiu ' . rand(1, 5) . ' vaikus'; ?>
    </p>
        <p><?php print 'Trumpas nebebus prezidentu nuo' . date(' Y-m-d', strtotime('+' . rand(2, 10). 'year')); ?></p>
          <p><?php print date('Y', strtotime('+1 year')); ?> ne už kalnų!</p>
</body>
</html>
<?php

$img= 'https://www.piepenbrock.de/fileadmin/user_upload/bilder/unternehmen/forstbild-wald.jpg';  

?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .img {
                height: 50px;
                width: 50px;
                background-size: cover;      
            }
           
        </style>
    </head>
    <body>
                <img class="img" src="<?php print $img; ?>">
              
           </div>
</html>

<?php

$distance = rand(100, 3000); //km
$consumption = 7.5;       //l/100km
$consumption_1km = 0.075; //l/1km
$price_l = 1.3;           //eur/l 
$my_money = 100;           //eur
             
$fuel_total = floor($distance * $consumption_1km);
$price_trip = $fuel_total * $price_l;

$able = 'Išvada: kelionė ';
if ($price_trip <= $my_money){
    $able .= 'įvyks';
} else {
    $able .= 'neįvyks';
}

$kelione = 'Kelionės skaičiuoklė';
$distancija = "Nuvažiuota distancija: $distance";
$fuel = "Sunaudota $fuel_total l kuro";
$price = "Kaina $price_trip pinigu";
$money = "Turimi pinigai: $my_money"; 

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print $kelione; ?>;</h1>
        <ul>
            <li><?php print $distancija; ?></li>
            <li><?php print $fuel; ?></li>      
            <li><?php print $price; ?></li>
            <li><?php print $money; ?> </li>
              </ul> 
            <hr>     
            <p><?php print $able; ?></p>
    </body>
</html>

<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1); 
$miegas = 'Miegosi savo lovoje';

$buitiakas = 'Buitinė skaičiuoklė';
    
if ($grizai_velai && $grizai_isgeres) {
    $rezultatas = 'Grįžai vėlai ir išgėręs';
    $miegas = 'Miegosi ant sofos';
} elseif ($grizai_velai && !$grizai_isgeres){
     $rezultatas = 'Grįžai vėlai';
} elseif (!$grizai_velai && $grizai_isgeres){ 
      $rezultatas = 'Grįžai išgėręs';
}
 else {
      $rezultatas = 'Nieko nepadarei';
 } 
 
 $rezultatas1 = "Situacija: $rezultatas";
 $miego_rezultatas = "Išvada: $miegas";
     
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print $buitiakas; ?></h1>
            <h3><?php print $rezultatas1; ?></h3>
             <h3><?php print $miego_rezultatas; ?></h3>
    </body>
</html>

