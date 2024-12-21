<?php
    class Sample {
        public static $x = 200;
        public static $y = 300;

        public static function add() {
            echo "This an Static add function<br>";
        }
    }

    $Obj = new Sample();
    $Obj->add();

    echo Sample::$x;
    echo Sample::$y;
    Sample::add();

?>