<?php

var_dump($_POST);
$value = 0;

if (isset($_POST['enter'])) {
    $value = $_POST['enter'];
    $value++;
}




?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms</title>
    </head> 
    <body>
        <form method="POST">
            <input type="submit" name="enter" value="<?php print $value; ?>"/>
        </form>
 
    </body>
</html>


