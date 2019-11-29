<?php

    function output_form() {
        echo <<<EOD

        <div class="wrapper">
            <form action="" method="post">

                <h1>Enter a name:</h1>

                <div class="two-col">
                    <input type="text" name="given_name">
                    <label for="given_name">
                        Name
                    </label>
                </div>

                <input type="text" name="last_name" required>
                    <label for="last_name" class="">
                        Last
                    </label>
                </div>

                <button type="submit" name="submit" class="btn" value="Submit">
    
            </form>
        </div>
EOD;
    
    }

?>