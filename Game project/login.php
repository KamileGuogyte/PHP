<?php

session_start();

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'title' => 'Registracija',
    'attr' => [
    ],
    'fields' => [
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
                'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'Prisijungti' => [
            'type' => 'submit'
        ],
    ],
    'validators' => [
        'validate_login'
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ]
];

function form_success($filtered_input, &$form) {
    print 'prisijungei';
    
  $_SESSION['email'] = $filtered_input['email'];
//$form['message'] = 'Sveiki, sugrįžę';  
header('Loacation: index.php');
}

function form_fail($filtered_input, &$form) {
    print 'nepavyko prisijungti';
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




