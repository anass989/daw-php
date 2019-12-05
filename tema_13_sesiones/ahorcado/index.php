<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ahorcado</title>
</head>
<body>
    <?php
    
        session_start();
        require('php/generate_content.php');
        $guessed_letters = [];
        if (!isset($_GET['start'])) {
            output_intro();
        }
        $_REQUEST['word'] = array_rand($words);
    ?>
</body>
</html>