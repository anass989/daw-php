<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php
        require("php/generate_content.php");
        require("php/data_check.php");
        if (!isset($_POST['submit'])) {
            output_form();
        } else {
            
        }

    ?>
    
</body>
</html>