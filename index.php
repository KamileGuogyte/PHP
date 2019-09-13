<?php
$sunny = rand(0, 1);

if ($sunny) {
    $oras = 'Sauleta';
    $class = 'sun';
} else {
    $oras = 'Debesuota';
    $class = 'rain';
}
?>
<html>
    <head>
        <title> Antraštė </title>      
        <style>
            .sun {
                display: inline-block;
                width: 150px;
                height: 150px;
                background-size: cover;
                background-image: url(https://cdn2.vectorstock.com/i/1000x1000/21/46/sun-weather-and-season-logo-icon-design-vector-22962146.jpg);
            }

            .rain {
                display: inline-block;
                width: 150px;
                height: 150px;
                background-size: cover;
                background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Weather-rain-thunderstorm.svg/919px-Weather-rain-thunderstorm.svg.png);
            }

            .inlineblock {
                display: inline-block;
            }

        </style>
    </head>
    <body>
        <div
            class="<?php print $class; ?>">
        </div>
        <h3  
            class="inlineblock">
            <?php print $oras; ?>
        </h3>
    </body>
</html>

