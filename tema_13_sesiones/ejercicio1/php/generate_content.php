<?php

    function output_form() {
        echo <<<EOD

        <div class="form-wrapper">
            <form action="" method="post">

                <h1>Sign In</h1>

                <label for="username">
                    Enter your username:
                </label>

                <input type="text" name="username"  placeholder="" required>

                <label for="password">
                    Enter your password:
                </label>

                <input type="password" name="password" required>
                </div>

                <button type="submit" name="submit" class="btn">
                    Log in
                </button>

                </form>
        </div>
EOD;
    
    }

    function login_msg() {

    }
?>