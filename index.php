<?php

$array = [
    'vardas',
    'pavarde',
    'amzius' => [
        10 => [
            'moksleivis'
            ],
        20 => [
            'studentas'
        ]
    ]
];

//foreach ($array['amzius'] as $pasirinkimai) {
//    var_dump($pasirinkimai);
//}

var_dump($array);
print $array['amzius'][20][0];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>

        <h1><?php ?></h1> 


    </body>
</html>