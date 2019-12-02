<?php

    function clean_up($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function validate_text($input_text) {   
        clean_up($input_text);     
        if (preg_match("/^[a-zA-Z0-9]+_?[a-zA-Z0-9]+$/D", $input_text)){
            return true;
        }
    }

    function validate_password($input_password) {
        // "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,16}$/"
        // faltan los caracteres especiales
        clean_up($input_password);
        if (preg_match("/^[a-z0-9]{4,16}$/i", $input_password)){
            return true;
        }
    }

    function validate_email($input_email) {
        clean_up($input_email);
        if (preg_match("/^[a-z0-9\\._-]+@[a-z0-9][a-z0-9-]*(\\.[a-z0-9_-]+)*\\.([a-z]{2,6})$/i", $input_email)) {
            //también podemos usar A-z en vez de i
            return true;
        }
    }
    
    function get_errors($errors) {
        //sobra
        $uid = $_REQUEST['uid'];
        $password = $_REQUEST['password'];
        $password_repeat = $_REQUEST['password_repeat'];
        $email = $_REQUEST['email'];

        if($uid !== '' && $password !== '' && $password_repeat !== '' && $email !== '') {

            if(validate_text($uid) && validate_password($password) && validate_email($email) && isset($_REQUEST['gender']) && isset($_REQUEST['language'])) {
                if($password_repeat !== $password) {
                    $errors['wrong_password_repeat'] = 'Passwords don\'t match';
                } else {
                    //si se ha cumplimentado correctamente, guardamos los datos en $_SESSION y pasamos a la página de login
                    //en la página de login se mostrarán los datos almacenados en $_SESSION
                    $_SESSION['uid'] = $_REQUEST['uid'];
                    $_SESSION['password'] = $_REQUEST['password'];
                    $_SESSION['email'] = $_REQUEST['email'];
                    $_SESSION['gender'] = $_REQUEST['gender'];
                    $_SESSION['language'] = $_REQUEST['language'];
                    header('Location: php/login.php');
                }
            }
            if (!validate_text($uid)) {
                $errors['wrong_uid'] = 'Invalid username.';
            }
    
            if(!validate_password($password)) {
                $errors['wrong_password'] = 'Invalid password';
            }
    
            if($password_repeat !== $password) {
                $errors['wrong_password_repeat'] = 'Passwords don\'t match';
            }
    
            if (!validate_email($email)) {
                $errors['wrong_email'] = 'Invalid email.';
            }
    
            if (!isset($_REQUEST['gender'])) {
                $errors['wrong_gender'] = 'Please, select a gender.';
            }
             
            if ($_REQUEST['language'] === 'none') {
                $errors['wrong_language'] = 'Please, select a language.';
            }
    
        } else {
            $errors['error'] = 'Please, fill in the required fields.';
        }
        return $errors;
    }

    /*
    //funciones json
    function get_json_content() {
        $file = file_get_contents('assets/uids.json');
        $result = json_decode($file);
        return $result;
    }

    function authenticate_login($uid, $password) {
        $users = get_json_content();
        $error = '';
        $exists = false;
    
        foreach($users as $user) {
            if ($uid == $user->uid) {
                $exists = true;
                if ($password == $user->password) {
                    $_SESSION['uid'] = $uid;
                } else {
                    $error = 'pass';
                    break;
                }
            }
        }
    
        if ($exists === false) {
            $error = 'uid';
        }

        return $error;
    }
    */  
?>