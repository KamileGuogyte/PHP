<?php

require 'functions/html/generators.php';
require 'functions/form/core.php';
require 'functions/file.php';

$form = [
	'attr' => [
		'class' => 'form'
	],
	'fields' => [
		'team_name' => [
			'type' => 'text',
			'extras' => [
				'attr' => [
					'placeholder' => 'Team name',
					'class' => 'nes-input',
				],
			],
			'validators' => [
				'validate_not_empty',
				'validate_team'
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



function form_success($filtered_input, $form) { // vykdoma, jeigu forma uzpildyta teisingai
    $users_array = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu info is duombazes
    $filtered_input['players'] = [];
    $users_array[] = $filtered_input; // einamuoju indeksu prideda inputus i users_array (i arreju dedam dar viena musu $filtered_input)
    array_to_file($users_array, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu (irasom array atgal i faila)

 

//        header('Location: join.php');    
        
        //seatcookie sesion start header skr
        
          
}



function form_fail($filtered_input, &$form) { // vykdoma, jeigu forma uzpildyta neteisingai
    
}
function validate_team($field_input, &$field) {
	$teams = file_to_array('data/teams.txt');
	if (!empty($teams)) {
		foreach ($teams as $value) {
			if (strtoupper($value['team_name']) === strtoupper($field_input)) {
				$field['error'] = 'Tokia komanda jau egzistuoja';
				return false;
			}
                         
		}
	}
	
	return true;
}

$filtered_input = get_filtered_input($form); //skirti fieldams, play mes fieldu neturim
if (!empty($filtered_input)) {
	validate_form($filtered_input, $form);
}

var_dump($form);
  
?>
<html>
    <head>
        <meta charset="UTF-8">
    <meta charset="UTF-8">
        <title>Create Team!</title>
    <link rel="stylesheet" href="includes/style.css">
       
    </head>
    <body>

        <div class="container">
            <?php require 'templates/form.tpl.php'; ?>
        </div>

    </body>
</html>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

