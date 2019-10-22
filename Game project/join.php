<?php

//join irasomas playeris i komanda  

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

session_start();

//array tai yra ir galime iterpti kiek norime ir ko ir nebutinai json. kad ir ka irasysm i superglobalu ma
//syva liks visam laikui 

function get_options() {
    $teams = file_to_array('data/teams.txt');
    if (!empty($teams)) {
        foreach ($teams as $team) {
            $team_names[$team['team_name']] = $team['team_name'];
        }
        return $team_names;
    }
}

$form = [
    'fields' => [
        'player_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Player name',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_player'
            ]
        ],
        'team_select' => [
            'type' => 'select',
            'value' => '',
            'options' => get_options(),
            'validators' => [
                'validate_not_empty'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Join'
        ],
    ],
  
    'callbacks' => [
        'fail' => 'form_fail',
        'success' => 'form_success'
    ]
];

function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai (pirmasis i duombaze)
    $teams = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu
    foreach ($teams as &$team) {
        if ($team['team_name'] === $filtered_input['team_select']) {
            $team['players'][] = [
                'nickname' => $filtered_input['player_name'],
                'score' => 0,
            ];
        }
    }
    array_to_file($teams, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu

    //join playeris prisiregistruoja o play phn toliau bet mes jau prisiregistravome
    $_SESSION['cookie_nickname'] = $filtered_input['player_name'];
    $_SESSION['cookie_team'] = $filtered_input['team_select'];
    
    header ('Location: play.php'); 
}

//etcookie('cookie_nickname', 'Aurimas', time() + 3600, '/');
//$_COOKIE['cookie_nickname']; //tai duos indes cookie nickname ir valure aurimas


function form_fail($filtered_input, &$form) { // vykdoma, jeigu forma uzpildyta neteisingai
}

function validate_player($field_input, &$field) {
    $teams = file_to_array('data/teams.txt');
    foreach ($teams as $team) {
        foreach ($team['players'] as $player) {
            if (strtoupper($player['nickname']) === strtoupper($field_input)) {
                $field['error'] = 'Toks žaidėjas jau yra!';
                return false;
            }
        }
    }
    
    return true;
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

if (isset($_SESSION['cookie_nickname'])) {
    $text = 'Jau esi prisijunges kaip' . $_SESSION['cookie_nickname'];
}

 ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Join!</title>
            <link rel="stylesheet" href="includes/style.css">
        </head>
        <?php require 'navigation.php'; ?>
        <body>
    <?php if (isset($_SESSION['cookie_nickname'])): ?> 
    <h2><?php print $text; ?></h2>
    <?php else: ?>
            <?php require 'templates/form.tpl.php'; ?>
        <?php endif; ?>
</body>
</html>






