<?php
    class Test {
        public static $x = 100;
        public static $name = "<br>Static PHP<br>";
        public static function add() {
            echo "This an Static add function<br>";
        }
    }

    echo Test::$x;
    echo Test::$name;

    Test::add();

    $Obj = new Test();
    $Obj->add();

?>