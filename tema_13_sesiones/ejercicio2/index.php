<?php
    session_id("session-13-01");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php
/**
 *   2. Volveremos al ejercicio de registro de usuarios, donde nos presentaba un 
 *   formulario para darnos de alta. Debemos controlar todas las restricciones que 
 *   queramos en cada campo, por ejemplo un identificador de usuario que no exista, 
 *   que tenga mayúsculas, minúsculas y dígitos. Cuando nos pida algún dato del 
 *   formulario que hubiésemos incluido erróneo,nos lo vuelve a pedir en rojo , 
 *   dejando cumplimentados el resto de los campos.
 *   Cuando empieza la session nos da la bienvenida con nuestro nombre y la posibilidad
 *   de salirnos de sesion. 
 *   -> Intentar meter otros inputs (radio, checkbox, etc.)
 */

        require("php/generate_content.php");
        require("php/functions.php");

        //cambiar - objeto
        $errors = [
            "wrong_uid" => '',
            "wrong_password" => '',
            "wrong_password_repeat" => '',
            "wrong_gender" => '',
            "wrong_email" => '',
            "wrong_language" => '',
            "error" => ''
        ];

        if (isset($_POST['submit']) && $_POST['submit'] === 'submit') {
            $errors = get_errors($errors);
        } elseif (isset($_POST['submit']) && $_POST['submit'] === 'reset') { 
            $_POST = [];
        }

        include('php/form.php');
    ?>
    
</body>
</html>