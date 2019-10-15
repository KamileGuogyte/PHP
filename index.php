<?php

require 'functions/html/generators.php';
require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => 
        [ 
    ],
    'fields' => [
        'team' => [
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Team name',
                    'class' => 'nes-input',
                ],
            ],
            'validate' => [
                'validate_not_empty',
                'validate_team',
            ],
        ],
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'class' => 'nes-btn is-success',
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
        
];

//$team = [
//    [
//        'team' => 'Komanda-1',
//        'players' => [
//            [
//                'nickname' => '1',
//                'score' => 'aaa'
//            ],
//        ],
//    ],
//    [
//        'team' => 'Komanda-2',
//        'players' => [
//            [
//                'nickname' => '2',
//                'score' => 'bbb'
//            ],
//        ],
//    ],
//];


function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai
    $users_array = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu
    $filtered_input['players'] = [];
    $users_array[] = $filtered_input; // einamuoju indeksu prideda inputus i users_array
    array_to_file($users_array, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu
}

function form_fail($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai

}

$filtered_input = get_filtered_input($form); 
 


if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
    
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form from arrays, templates and 'require'</title>
        <!-- latest -->
        <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet"/>
        <!-- core style only -->
        <link href="https://unpkg.com/nes.css/css/nes-core.min.css" rel="stylesheet"/>

        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet"/>
        <link href="includes/style.css" rel="stylesheet"/>
       
    </head>
    <body>

        <div class="container">
            <?php require 'templates/form.tpl.php'; ?>
        </div>

    </body>
</html>








