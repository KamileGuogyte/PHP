<?php

$siukslines_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(1, 10);
$rezultatas = $siukslines_turis/$siuksliu_turis_per_d+$max_kaupo_turis;

?> 
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <h1> 
        <?php print 'po ' . floor($rezultatas) . ' dienų reikia pirkti gėles'?>
    </h1>
   
</body>
</html>


  