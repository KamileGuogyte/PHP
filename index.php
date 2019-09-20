
<?php

$mano_atmintis = [
    'penktadienis',
    'pakaitos',
    'persirengimas',
    'miestas',
    'baras',
    'šokiai',
    'kelionė',
    'jūra'
];

$draugo_atmintis = [
    'penktadienis',
    'darbas',
    'mašina',
    'degalinė',
    'baras',
    'šokiai',
    'kelionė',
    'jūra'
];

$bendra_atmintis = [];

foreach ($mano_atmintis as $mano_prisiminimas) {
    var_dump($mano_prisiminimas);
    foreach ($draugo_atmintis as $draugo_prisiminimas) {
        var_dump($draugo_prisiminimas);
        if ($mano_prisiminimas == $draugo_prisiminimas) {
            $bendra_atmintis[] = $mano_prisiminimas;
        }
    }
};
var_dump($bendra_atmintis);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Sutapę prisiminimai</h3>
        <p>:</p> 
        <ul>
            <?php foreach ($bendra_atmintis as $rezultatas): ?>
                <li> 
                    <?php print $rezultatas; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html> 




