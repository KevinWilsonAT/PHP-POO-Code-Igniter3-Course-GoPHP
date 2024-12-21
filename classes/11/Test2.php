<?php

	defined('BASEPATH') OR exit ('No direct script access allowed');

    class Test2 extends CI_Controller {
		
		/*
		public function _myFun() {
			echo "MyFun";
		}
		*/

		public function _remap($action) {
			if ($action === "greeting") {
				$this -> greeting();
			}
			else if ($action === "index") {
				$this -> index();
			}
			else {
				$this ->default_method();
			}
		}
		
		public function index() {
			echo "Index";
		}
        
		public function welcome() {
            echo "Welcome!";
        }

		public function greeting() {
			// $this->_myFun;
            echo "Greetings!";
        }
		
		function default_method() {
			echo "Sorry! Not able to process";
		}
		
    }
?>