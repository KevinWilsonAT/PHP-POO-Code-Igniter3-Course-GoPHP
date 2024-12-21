<?php
    class Test {
        public $x = 100;
        public $name = "PHP";
        public function add() {
            echo "This an add function";
        }
    }
        
    $xyz = new Test();
    $xyz->add();
    echo $xyz->x;
    echo $xyz->name;

    Test::add();

?>