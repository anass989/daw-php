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
        require("php/authenticate.php");

        $uid = '';
        $errors = [
            "wrong_uid" => '',
            "wrong_password" => '',
            "error" => ''
        ];

        if (isset($_POST['submit'])) {
            $uid = get_data("uid");
            $password = $_REQUEST['password'];
            if($uid !== '' && $password !== '') {
                if(validate_text($uid)) {
                    $error = authenticate_login($uid, $password);

                    if($error === 'pass') {
                        $errors['wrong_password'] = 'Wrong password.';
                    } elseif ($error === 'uid') {
                        $errors['wrong_uid'] = 'Username doesn\'t exist.';
                    } else {
                        header('Location: php/login.php');
                    }

                } elseif (!validate_text($uid)) {
                    $errors['wrong_uid'] = 'Invalid username.';
                }
            } else {
                $errors['error'] = 'Please, fill in the required files.';
            }
        }

        output_form($uid, $errors);  

    ?>
    
</body>
</html>