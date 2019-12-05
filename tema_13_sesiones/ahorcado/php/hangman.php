<?php
    session_start();

    $word =& $_SESSION['word'];
    $guessed =& $_SESSION['guessed'];
    //así nos ahorramos $_SESSION['word'] = $word y $_SESSION['guessed'] = $guessed
    //se actualizarán al mismo tiempo

    if (isset($_REQUEST['word'])) {
        $word = str_split($_REQUEST['word']);
        $guessed = array_fill(0, count($word), '_');
    }
    if (isset($_REQUEST['guess'], $word, $guessed)) {
        $guess = array_fill(0, count($word), $_REQUEST['guess']);
        $guessed = array_replace($guessed, array_intersect($word, $guess));
    }

    echo join(' ', $guessed);
?>