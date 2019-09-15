<?php

$sunny = rand(0, 1);
$rainy = rand(0, 1);

if ($sunny && $rainy) {
    $weather = 'sunny_rainy';
    $weather_title = 'Saulėta ir lyja';
} elseif ($sunny && !$rainy) {
    $weather = 'sunny';
    $weather_title = 'Saulėta';
} elseif (!$sunny && $rainy) {
    $weather = 'rainy';
    $weather_title = 'Lyja';
} else {
    $weather = 'cloudy';
    $weather_title = "Debesuota";
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>if, elseif, else </title>
        <style>
            .sunny_rainy {
                display: inline-block;
                background: url(https://cdn2.vectorstock.com/i/1000x1000/66/26/sun-holding-cloud-rainbow-set-rain-drop-weather-vector-22876626.jpg);
                background-size: cover;
                height: 200px;
                width: 200px;
            }

            .sunny {
                display: inline-block;
                background: url(https://i.pinimg.com/originals/25/e9/45/25e945cbe48792dbc8ba4e9ef51cf1e2.jpg);
                background-size: cover;
                height: 200px;
                width: 200px;
            }

            .rainy {
                display: inline-block;
                background: url(https://us.123rf.com/450wm/yupiramos/yupiramos1802/yupiramos180225830/96070237-stock-vector-cute-cartoon-happy-cloud-rain-drops-vector-illustration.jpg?ver=6);
                background-size: cover;
                height: 200px;
                width: 200px;
            }

            .cloudy {
                display: inline-block;
                background: url(https://i.pinimg.com/originals/e3/17/19/e317197d99b7b6b5b1688df45e206dcc.jpg);
                background-size: cover;
                height: 200px;
                width: 200px;
            }

            .text_position {
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="<?php print $weather; ?>"></div>
        <div class="text_position"><?php print $weather_title; ?></div>
    </body>
</html>