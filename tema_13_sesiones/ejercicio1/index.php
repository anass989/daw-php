<?php
    session_id("session_13_01");
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
/**
 *2. Volveremos al ejercicio de registro de usuarios, donde nos presentaba un 
 *   formulario para darnos de alta. Debemos controlar todas las restricciones que 
 *   queramos en cada campo, por ejemplo un identificador de usuario que no exista, 
 *   que tenga mayúsculas, minúsculas y dígitos. Cuando nos pida algún dato del 
 *   formulario que hubiésemos incluido erróneo,nos lo vuelve a pedir en rojo , 
 *   dejando cumplimentados el resto de los campos.
 *   Cuando empieza la session nos da la bienvenida con nuestro nombre y la posibilidad
 *   de salirnos de sesion. 
 */

        require("php/generate_content.php");
        require("php/data_check.php");
        if (!isset($_POST['submit'])) {
            output_form();
        } elseif () {
                
        }
        echo         

    ?>
    
</body>
</html>