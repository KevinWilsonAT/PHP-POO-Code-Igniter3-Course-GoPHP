<?php
    class Test3 {
        public $x = 200;
        public $y = 300;
        
        public function add() {
            $sum = $this->x + $this->y;
            echo "<p>The Sum is: ". $sum . "</p>";
        }
        public function display(){
            $this->add();
        }
    }
    
    $obj = new Test3();
    
    $obj->display();