<?php
    spl_autoload_register(function ($className) {
        include __DIR__ . '/class/' . $className . '.php';            
    });
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
        $header = new Header("Probando el título.", "Probando el  subtítulo");
        echo $header;
    ?>
</body>
</html>