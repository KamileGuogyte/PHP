<?php

require 'validators.php';

/**
 * Form'os fieldų filtravimo f-ija
 * !! Ji nefiltruoja mygtukų, tik field'us
 * @param array $form
 * @return array Išviltruotas input'ų masyvas
 */
function get_filtered_input($form) {
    $filter_parameters = [];
//    var_dump($filter_parameters);
    foreach ($form['fields'] as $field_id => $field) {
        //var_dump($field);
        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
//        var_dump($filter_parameters[$field_id]);
//        var_dump($field['filter']);
//        var_dump(FILTER_SANITIZE_SPECIAL_CHARS);
    }
    return filter_input_array(INPUT_POST, $filter_parameters);

//     var_dump(filter_input_array(INPUT_POST, $filter_parameters));
//      var_dump(INPUT_POST);
//        var_dump($filter_parameters);
}

/**
 * Submit'inus form'ą, gausime
 * kuris mygtukas (jo indeksas) buvo paspaustas
 * @return string (mygtuko indeksas)
 */
function get_form_action() {

    return filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
}

// var_dump(filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS));
//      var_dump(INPUT_POST);
//        var_dump(FILTER_SANITIZE_SPECIAL_CHARS);

/**
 * F-ija validuojanti formą
 * @param type $filtered_input
 * @param type $form
 * @return boolean
 */
function validate_form($filtered_input, &$form) {
//      var_dump('Buvo iskviesta validate_form funkcija');
//     var_dump($filtered_input);
//      var_dump($form); 
    $success = true;
//var_dump($sucess);
    // Kiekvieno field'o validacija
    foreach ($form['fields'] as $field_id => &$field) {
//          var_dump($form['fields']);
//     var_dump($field_id);
//      var_dump($field);

        $field_input = $filtered_input[$field_id];

//         var_dump( $field_input);
//      var_dump($filtered_input[$field_id]);

        $field['value'] = $field_input;

//          var_dump($field['value']);
//      var_dump($field_input);

        foreach ($field['validators'] ?? [] as $validator) {

            //        var_dump($field['validators']);
//var_dump($validator);

            $is_valid = $validator($field_input, $field);

            //              var_dump($is_valid);
            // var_dump($validator($field_input, $field));
            var_dump($validator);
            // var_dump($field_input);
            var_dump($field);
//            

            if (!$is_valid) {
//              var_dump(!$is_valid);
                $success = false;

//                         var_dump($is_valid);
//      var_dump($validator($field_input, $field));
//                 var_dump($validator);
//      var_dump($field_input);


                break;
            }
        }
    }

    //Visos formos validacija
//    if ($success) {
//        foreach ($form['validators'] ?? [] as $validator) { // Šiems validatoriams paduodame visus userio inputus ir visa forma
//            var_dump($form['validators']);
//            $is_valid = $validator($filtered_input, $form);
//            if (!$is_valid) {
//                $success = false;
//                break;
//            }
//        }
//    }



    if ($success) {
        foreach ($form['validators'] ?? [] as $validator_id => $validator) {
            if (is_array($validator)) {
                $is_valid = $validator_id($filtered_input, $form, $validator);
            } else {
                $is_valid = $validator($filtered_input, $form);
            }

            //   var_dump($validator_id);
            //  var_dump($validator);

            if (!$is_valid) {
                $success = false;
                break;
            }
        }
    }

    if ($success) {
        if (isset($form['callbacks']['success'])) {
            $form['callbacks']['success']($filtered_input, $form);
        }
    } else {
        if (isset($form['callbacks']['fail'])) {
            $form['callbacks']['fail']($filtered_input, $form);
        }
    }

    return $success;
}
