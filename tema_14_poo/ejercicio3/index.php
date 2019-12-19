<?php
    session_start();
    include 'includes/autoloader.inc.php';
    include 'includes/generate_content.inc.php';
    include 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3 - Figuras</title>
</head>
<body>
    <?php
        // pedimos color, número de lados
        if (!isset($_REQUEST['submit'])) {
            output_form();
        } else {
            $_SESSION['color_hex'] = $_REQUEST['color_hex'];
            $_SESSION['shape'] = $_REQUEST['shape'];

            $color_hex = $_SESSION['color_hex'];
            $color_rgb = get_rgb($color_hex);
            $_SESSION['color_rgb'] = $color_rgb;

            var_dump($_SESSION);
        }
    ?>    
</body>
</html>
