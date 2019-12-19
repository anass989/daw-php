<?php

    function output_form() {
        echo <<<EOD
        <form>
            <label for="figure">Choose a shape</label>
            <input type="checkbox" name="shape[]">Circle
            <input type="checkbox" name="shape[]">Square
            <input type="checkbox" name="shape[]">Rectangle
            <input type="checkbox" name="shape[]">Polygon

            <label for="figure-color">Pick a color:</label>
            <input type="color" name="color" value="">

            <button type="submit" name="submit">Submit</button>

        </form>
EOD;
    }


    function output_figure() {

    }

?>