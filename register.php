<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'title' => 'Registracija',
    'attr' => [
        
    ],
    'fields' => [
        'name' => [
            'label' => 'Vardas',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Vardas Pavardė',
                    'class' => 'input-text',
                ],
            ],
            'validators' => [
                //'validate_not_empty',
            ],
        ],
        'email' => [
            'label' => 'El.paštas',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Email',
                    'class' => 'input-text',
                ],
            ],
            'validators' => [
                'validate_not_empty',
               'validate_email',
              //  'validate_email_unique',
            ],
        ],
        'password' => [
            'label' => 'Slaptažodis',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Password',
                    'value' => 'Slaptažodis',
                    'class' => 'input-text',
                ],
            ],
            'validators' => [
                //'validate_not_empty',
                //'validate_password'
            ],
        ],
        'password_repeat' => [
            'label' => 'Pakartoti slaptažodį',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Password repeat',
                    'value' => 'Pakartokite el.paštą',
                    'class' => 'input-text',
                ],
            ],
            'validators' => [
               // 'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Join'
        ],
    ],
    'validators' => [
        'validate_fields_match' => [
            'password',
            'password_repeat',
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ]
];

function form_success($filtered_input, &$form) { 
    $users_array = file_to_array('data/users.txt'); 
    
    $filtered_input['user'] = [];
    $users_array[] = $filtered_input; 
    
    array_to_file($users_array, 'data/users.txt');  
}

function form_fail($filtered_input, &$form) {
}


$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);

}


//validate_fields_match($filtered_unput, $form, $params);


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration form</title>
        <link rel="stylesheet" href="includes/register.css">
    </head>
    <body>

        <div class="container">
            <?php require 'templates/form.tpl.php'; ?>
        </div>

    </body>
</html>
