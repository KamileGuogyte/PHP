<?php

$siukslines_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(1, 10);
$rezultatas1 = $siukslines_turis+$max_kaupo_turis;
$rezultatas2 = $rezultatas1/$siuksliu_turis_per_d;

?> 
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1> 
       po <?php print date('Y-m-d', strtotime('+' . floor($rezultatas2) .  'days')) . ' dienų reikia pirkti gėles'?>
    </h1>
</body>
</html>


  