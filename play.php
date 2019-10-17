<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
  
    'title' => 'Go for it',
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Kick the ball',
        ],
    ],
    'validators' => [
        'validate_kick'
        
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];



$form['title'] = 'Go for it, ' . $_COOKIE['cookie_nickname'];

function form_sucess() {
    $teams = file_to_array('data/teams.txt');

    foreach ($teams as &$team) {
        if ($team['team_name'] === $_COOKIE['cookie_team']) {
            foreach ($team['players'] as $player) {
                if ($player['nickname'] === $_COOKIE['cookie_nickname']) {
                    $player['score'] += 2;
                    var_dump($player);
//                    header('Location: join.php');
                  
                }
            }
        }
    }

//kai siunciame dokuneta i browseri var_dump yra html yra body struktura ne header.
    
    array_to_file($teams, 'data/teams.txt');
}

function validate_kick($filtered_input, $form) {
    print 'veikia validate_kick';
}

    if (isset($_POST['submit'])) {
        form_success();
    }




 
    ?>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>Join!</title>
            <link rel="stylesheet" href="includes/style.css">
        </head>
        <body>
    <?php if (isset($_COOKIE['cookie_nickname'])) ; ?> 
    <h2><?php print $text ?></h2>
            <?php else:  ?>
            <?php require 'templates/form.tpl.php'; ?>
</body>
</html>

<!--visi validatoriai vienam fieldui galiojo
cia nera nie vieno field ir jeigu get filtered input us tuscias nes foreacjpri koekviena formss
foelda-->