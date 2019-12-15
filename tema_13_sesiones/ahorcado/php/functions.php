<?php
    function get_json_content() {
        $file = file_get_contents('assets/words.json');
        $result = json_decode($file, true);
        return $result;  
    }

    function get_word() {
        $key = $_SESSION['chapter'];
        $all_words = get_json_content();
        return array_rand(array_flip($all_words["$key"]));
    }

?>