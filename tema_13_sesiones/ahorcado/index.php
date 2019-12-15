<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compat1ible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Hangman</title>
</head>
<body>
    <?php
        session_start();

        require('php/generate_content.php');
        require('php/functions.php');

        if (!isset($_REQUEST['chapter'])) {
            output_intro();
        } else {
            $_SESSION['chapter'] = $_REQUEST['chapter'];
            $_SESSION['word'] = get_word();
            $_SESSION['guessed'] = array();
            $_SESSION['score'] = 0;
            $_SESSION['attempts'] = 0;        
            header("Location: play.php");
        }

    ?>
</body>
</html>