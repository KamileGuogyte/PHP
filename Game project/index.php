<?php

session_start();

//require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


//Patikrinti ar useris yra prisijynges
//isset tikrina ae variablas egzistuojas

if(!empty($_SESSION)) {
    //prisijunges
    $users = file_to_array('data/users.txt');
    foreach ($users as $user) {
        if ($user['email'] == $_SESSION['email']) {
          //  cookies nustatte login savo form succes
            
            $name = $user['name'];
        }
    }
   
    $text = "Sveiki sugrįžę, $name";
} else {
    $text = 'Jūs neprisijungęs';
}


//validate_fields_match($filtered_unput, $form, $params);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Jūs prisijungęs-neprisijungęs</title>
        <link rel="stylesheet" href="includes/register.css">
    </head
    <body>

        <div class="container">
<?php require 'templates/form.tpl.php'; ?>
        </div>
        <h1><?php print $text;?></h1>
     

    </body>
</html>
