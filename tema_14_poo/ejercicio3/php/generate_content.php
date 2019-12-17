<?php

    function output_form() {
        echo <<<EOD
        <form>
            <label for="figure">Choose a shape</label>
            <input type="checkbox" name="shape[]">
            <input type="checkbox" name="shape[]">
            <input type="checkbox" name="shape[]">

            <label for="figure-color">Pick a color:</label>
            <input type="radio" name="color" value="red">
            <input type="radio" name="color" value="cyan">
            <input type="radio" name="color" value="yellow">

            <button type="submit" name="submit">Submit</button>

        </form>
EOD;
    }

?>