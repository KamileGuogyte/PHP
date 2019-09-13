<?php

$randomiser = rand(0, 2);

print $randomiser;

if ($randomiser ===0) {
    $coffe = 'black-coffe';
} elseif ($randomiser ===1) {
    $coffe = 'latte';
} else {
    $coffe = 'tea';
}

?>

<html>
    <head>
        <title> Antraštė </title>  
        <link rel="stylesheet" href ="includes/normalize.css">
        <style>

            div {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .black-coffe {
                color: white;
                height: 100vh;
                background-color: black;  
            }

            .latte {
                color: white;
                height: 100vh;
                background-color: red;
            }
              
            .tea {
                color: white;
                height: 100vh;
                background-color: yellow;
            }
            
            .p {
                font-size: 40px;
            }

        </style>
    </head>
    <body>
        <div class="<?php print $coffe; ?>">
            <p>
                Gersiu <?php print $coffe; ?>
            </p>
        </div>
    </body>
</html>

