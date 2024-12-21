<?php
    class Sample {
        public $x = 200;
        public $y = 300;
        
        /*
        
        public static $x = 200;
        public static $y = 300;

        public static function add() {
            $sum = self::$x + self::$y;
            echo "<p>The Sum is: ". $sum . "</p>";
        }
        public static function display(){
            self::add();
        }
        
        */

        public function add() {
            $sum = $this->x + $this->y;
            echo "<p>The Sum is: ". $sum . "</p>";
        }

        public function display(){
            $this->add();
        }
    }
    
    $obj = new Sample();
    
    $obj->display();

?>