<?php
    session_start();

    require('php/generate_content.php');

    $chapter =& $_SESSION['chapter'];
    $word =& $_SESSION['word'];
    $guess =& $_SESSION['guess'];
    $guessed =& $_SESSION['guessed'];
    $score =& $_SESSION['score'];
    $attempts =& $_SESSION['attempts'];

    if (!isset($_REQUEST['submit'])) {
        output_game($chapter, $score, $attempts, $word, $guessed);
    } else {
        if($attempts < 11) {
            $guess = $_REQUEST['submit'];
            array_push($guessed, $guess);
            $attempts++;
            output_game($chapter, $score, $attempts, $word, $guessed);
        } else {
            header('Location: loss.php');
        }
    }

?>