<?php

$siukslines_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(1, 10);
$siuksliu_turis_max = $siukslines_turis+$max_kaupo_turis;
$siuksles_po_dienu = $siuksliu_turis_max/ $siuksliu_turis_per_d;
$suapvalintas_sk_siuksliu = floor($siuksles_po_dienu);
$date = date('Y-m-d', strtotime('+' . ($suapvalintas_sk_siuksliu) .  'days'));
$text = " po $suapvalintas_sk_siuksliu dienų ($date) pirk gėlių ir šampano, jei nori išvengti konflikto "

?> 
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1> 
        <?php print $text ?>
    </h1>
</body>
</html>


  