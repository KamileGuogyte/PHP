<?php

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias!';
        return false;
    }

    return true;
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

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input)) {
        $field['error'] = 'Įveskite skaičių!';
        return false;
    }

    return true;
}

function validate_max_100($field_input, &$field) {
    if ($field_input > 100) {
        $field['error'] = 'Per daug metų!';
        return false;
    }

    return true;
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Įveskite teigiamą skaičių!';
        return false;
    }

    return true;
}

function validate_password($field_input, &$field) {
    if (strlen($field_input) < 8) {
        $field['error'] = 'Įveskite daugiau nei 8 simbolius!';
        return false;
    }

    return true;
}

function validate_email($field_input, &$field) {
    if (!filter_var($field_input, FILTER_VALIDATE_EMAIL)) {
        $field['error'] = 'Klaida';
    } else {
        return true;
    }
}

/**
 * 
 * @param type $filtered_input
 * @param type $form
 * @param type $params
 * @return boolean
 */
//Jei nesutampa password su paswoed repeat  - print Laukeliai tusti turi  register
function validate_fields_match($filtered_input, &$form, $params) { //params yra password ir paswird repeat
//    var_dump($filtered_input);
//    var_dump($params);
    $reference_value = $filtered_input[$params[0]];
    foreach ($params as $field_id) {
        if ($reference_value !== $filtered_input[$field_id]) {
            $form['fields'][$field_id]['error'] = 'Slaptažodis nesutampa';
            return false;
        }
    }

    return true;
}

// Patikrinti ar toks email jau yra duomenu bazeje (register)

function validate_email_unique($field_input, &$form) {
    $users = file_to_array('data/users.txt');
    if (!empty($users)) {
        foreach ($users as &$user) {
//            var_dump($user);
            if (strtoupper($user['email']) === strtoupper($field_input)) {
                $form['error'] = 'Toks el. paštas jau egzistuoja duomenu bazėje';
                return false;
            }
        }
    }

    return true;
}


///Patikrinti ar useris su tokiu email ir password jau egzistuoja. Useris uzsiregistravo (register) ir vel loginasi (login)
//Jeigu jo duomenys yra - ok, jeigu ne - toks vartotojas neegzistuoja. 5 uzduotis
        
function validate_login($filtered_input, &$form) { //iskviecia core validate login grazins true arba false 
    //var_dump($filtered_input);
    $users = file_to_array('data/users.txt');
    if (!empty($users)) {
        foreach ($users as &$user) {
            //var_dump($user);
            if ($user['email'] === $filtered_input['email'] && $user['password'] === $filtered_input['password']) {
                
                return true;
            }
        }
    }
      
  //  $form['fields']['password']['error'] = 'Toks vartotojas neegzistuoja';
    $form['error'] = 'Toks vartotojas neegzistuoja';
    return false;
}



  
