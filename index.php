<?php

var_dump($_POST);
$value = 0;

if (isset($_POST['enter'])) {
    $value = $_POST['enter'] + 1;
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms</title>
        <style>

            img {
                width: 200px;
            }

        </style>
    </head> 
    <body>
        <form method="POST">
            <input type="submit" name="enter" value="<?php print $value; ?>"/>
        </form>
        <?php for ($x = 0; $x < $value; $x++): ?>
            <img src="https://image.freepik.com/free-vector/smiling-sun-background_23-2147664511.jpg">
        <?php endfor; ?>
    </body>
</html>


