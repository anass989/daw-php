<?php

    session_start();

    require('php/generate_content.php');
    if (!isset($_REQUEST['submit']) && !isset($_REQUEST['reset'])) {
        output_loss();
    } elseif (isset($_REQUEST['submit'])) {
        unset($_SESSION['attempts']);
        $_SESSION['guessed'] = array();
        header('Location: play.php');

    } elseif (isset($_REQUEST['reset'])) {
        session_destroy();
        header('Location: index.php');
    }

?>