<?php

    function clean_up($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function validate_text($input_text) {        
        //preg_match("/^(\+34|0034|34)?[0-9]{9}$/")
        if (preg_match("/^[a-zA-Z0-9]+_?[a-zA-Z0-9]+$/D", $input_text)){
            return true;
        }
    }

    function get_json_content() {
        $file = file_get_contents('assets/uids.json');
        $result = json_decode($file);
        return $result;
    }
    
    //versión mclibre
    //modificar
    function get_data($var, $m = '') {
        
        if (!isset($_REQUEST[$var])) {
            $tmp = (is_array($m)) ? [] : "";
        } elseif (!is_array($_REQUEST[$var])) {
            $tmp = $_REQUEST[$var];
            $tmp = clean_up($tmp);
        } else {
            $tmp = $_REQUEST[$var];
            array_walk_recursive($tmp, function(&$valor) {
                $valor = clean_up($valor);
            }); 
        }
        return $tmp;
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

    function get_errors() {
        
    }
    
?>