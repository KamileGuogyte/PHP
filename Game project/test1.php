<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
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




    foreach ($form['fields'] as $field_id => $field) {
  foreach ($field as $field2_id => $field2) {
}
    }
var_dump($field);

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



