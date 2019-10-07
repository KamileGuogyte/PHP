<?php

$array = [
    'participants' => [
        [
            'name' => 'Juozas',
            'surname' => 'Juozaitis',
            'age' => 86,
        ],
        [
            'name' => 'Dalia',
            'surname' => 'Zemkalnyte',
            'age' => 28,
        ],
        [
            'name' => 'Mantas',
            'surname' => 'Britkus',
            'age' => 41,
        ]
    ]
];


$new_array = [];

foreach ($array['participants'] as $value) {
   $new_array[] = $value['age'];
      
}

  var_dump($new_array);



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