<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

session_start();

//if (empty($_SESSION)) {
   // header('Location: join.php');
   // exit();
//}

$form = [
    'fields' => [],
    'buttons' => [
        'kick' => [
            'type' => 'submit',
            'value' => 'Kick the ball',
        ],
    ],
    'validators' => ['validate_kick'],
    'callbacks' => [
        'success' => 'form_success',
    ]
];

function validate_kick($filtered_input, &$form) {
    $teams = file_to_array('data/teams.txt');

    foreach ($teams as &$team) {
        if ($team['team_name'] == $_SESSION['cookie_team']) {
            foreach ($team['players'] as &$player) {
                if ($player['nickname'] == $_SESSION['cookie_nickname']) {
                    return true;
                }
            }
        }
    }
    
    $form['message'] = 'Tu kazka cia suki';
}

function form_success($filtered_input, &$form) {
    $teams = file_to_array('data/teams.txt');

    foreach ($teams as &$team) {
        if ($team['team_name'] == $_SESSION['cookie_team']) {
            foreach ($team['players'] as &$player) {
                if ($player['nickname'] == $_SESSION['cookie_nickname']) {
                    $player['score'] ++;
                }
            }
        }
    }

    array_to_file($teams, 'data/teams.txt');
    $form['message'] = "Spyris iskaitytas ({$player['score']})";
}

if (get_form_action() == 'kick') {
    validate_form([], $form);
}

$text = 'Go For It, ' . $_SESSION['cookie_nickname'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <?php require 'navigation.php'; ?>
    <body class="bg">
        <div class="laukas">
            <h1><?php print $text; ?></h1>
            <?php require 'templates/form.tpl.php'; ?>
        </div>
    </body>
</html>