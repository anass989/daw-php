<?php

    function login_msg($uid) {
        echo <<<EOD

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="./../css/style.css">
            <title>Ejercicio 2</title>
        </head>
        <body>
            <div class="login-wrapper">
                <h2>Welcome to the login page, {$_SESSION['uid']}</h2>
                <h3>This is your data:</h3>

                <table class="table-data">
                    <tbody>
                    <tr>
                        <th>Your username:</th>
                        <td>{$_SESSION['uid']}</td>
                    </tr>
                    <tr>
                        <th>Your password:</th>
                        <td>{$_SESSION['password']}</td>
                    </tr>
                    <tr>
                        <th>Your email:</th>
                        <td>{$_SESSION['email']}</td>
                    </tr>
                    <tr>
                        <th>Your gender:</th>
                        <td>{$_SESSION['gender']}</td>
                    </tr>
                    <tr>
                        <th>Your language:</th>
                        <td>{$_SESSION['language']}</td>
                    </tr>
                    </tbody>
                </table>
                <form method="POST">
                    <button type="submit" name="logout" class="btn-logout">Log Out</button>
                </form>
            </div>
        </body>
        </html>
EOD;
    }

    function logout_msg() {
        echo <<<EOD

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="./../css/style.css">
            <title>Ejercicio 2</title>
        </head>
        <body>
            <div class="logout-wrapper">
                <p>You have successfully logged out.</p>
            </div>
        </body>
        </html>
EOD;
    }

    function output_form() {

        echo <<<EOD

        <div class="form-wrapper">
            <form action="index.php" method="post">

                <h1>Sign Up</h1>

                <label for="username">
                    Enter your username:
                </label>

                <input type="text" name="uid"  placeholder="" value="">

                <label for="password">
                    Enter your password:
                </label>

                <input type="password" name="password">

                <label for="password-repeat">
                    Repeat Password:
                </label>

                <input type="password" name="password_repeat">

                <label for="password-repeat">
                    Email:
                </label>

                <input type="email" name="email" value="">

                <label for="gender">
                    Gender:

                    <input type="radio" name="gender"> Male
                    <input type="radio" name="gender" value=""> Female
                    <input type="radio" name="gender" value=""> Other
                </label>

                <label for="language">
                    Language:
                </label>

                <select name="language" id="">
                    <option name="language" value=""></option>
                    <option name="language" value=""></option>
                    <option name="language" value=""></option>
                </select>

                <button type="submit" name="submit" class="btn">
                    Login
                </button>

                </form>
        </div>
EOD;
        }

?>

