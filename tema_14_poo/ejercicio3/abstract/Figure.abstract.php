<?php

    abstract class Figure {
        protected $shape;
        protected $color;
        protected $measurements;

        abstract public function output_figure();
        abstract public function calc_area();
    }

?>