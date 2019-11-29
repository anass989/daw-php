<?php
    function clean_up($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function validate_text($input_text) {
        clean_up($input_text);
        //preg_match("/^(\+34|0034|34)?[0-9]{9}$/")
        if (preg_match("/^[a-zA-Z]$/", $input_text)){
            return true;
        }
    }    
?>