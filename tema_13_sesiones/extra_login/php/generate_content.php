<?php

    function output_form_template() {
        echo <<<EOD

        <div class="form-wrapper">
            <form action="" method="post">

                <h1>Sign In</h1>

                <label for="username">
                    Enter your username:
                </label>

                <input type="text" name="uid"  placeholder="">

                <label for="password">
                    Enter your password:
                </label>

                <input type="password" name="password">

                <button type="submit" name="submit" class="btn">
                    Login
                </button>

                </form>
        </div>
EOD;

    }
    function output_form($uid, $errors) {
        echo <<<EOD

        <div class="form-wrapper">
            <form action="" method="post">

                <h1>Sign In</h1>

                <label for="username">
                    Enter your username:
                </label>

                <input type="text" name="uid"  placeholder="" value=$uid>
                <span class="error">{$errors['wrong_uid']}</span>

                <label for="password">
                    Enter your password:
                </label>

                <input type="password" name="password">
                <span class="error">{$errors['wrong_password']}</span>

                <span class="error">{$errors['error']}</span>

                <button type="submit" name="submit" class="btn">
                    Login
                </button>

                </form>
        </div>
EOD;
    
    }



    function login_msg($uid) {
        echo <<<EOD

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="./../css/style.css">
            <title>Login</title>
        </head>
        <body>
            <div class="login-wrapper">
                <h2>Welcome to the login page, $uid</h2>
                <form method="POST">
                    <button type="submit" name="logout" class="btn">
                        Log Out
                    </button>
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
            <title>Login</title>
        </head>
        <body>
            <div class="logout-wrapper">
                <p>You have successfully logged out.</p>
            </div>
        </body>
        </html>
EOD;
    }
?>

