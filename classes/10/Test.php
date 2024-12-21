<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Test extends CI_Controller {
        
        public function index() {
            echo "This is index";
        }

		public function welcome($name) {
            print_r($name);
        }

		// without .htaccess:
        // http://localhost/gophp/php-poo-ci3/ci3/index.php/test/welcome

		// with .htaccess:
		// http://localhost/gophp/php-poo-ci3/ci3/test/welcome

		public function greeting() {
            echo "Greetings!";
        }

		public function edit($id) {
            echo $id;
        }
		
		//without .htaccess:
		// http://localhost/gophp/php-poo-ci3/ci3/index.php/test/greeting
		
		//with .htaccess:
		// http://localhost/gophp/php-poo-ci3/ci3/test/greeting
    }
?>