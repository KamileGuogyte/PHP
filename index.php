<?php

$randomiser = rand(0, 1);

if ($randomiser) {
    $coffe = 'black-coffe';
} else {
    $coffe = 'latte';
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

