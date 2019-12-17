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
        require('php/generate_content.php');
        // pedimos color, número de lados
        if (!isset($_REQUEST['submit'])) {
            output_form();
        }
    ?>    
</body>
</html>
