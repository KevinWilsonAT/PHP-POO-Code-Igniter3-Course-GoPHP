<?php

    class Test10 extends CI_Controller {
        
		public function welcome() {
            /*
            echo "Welcome!";
            */
        }

		//without .htaccess:
        // http://localhost/<project-folder>/index.php/test10/welcome

		//with .htaccess:
		// http://localhost/<project-folder>/test10/welcome

		public function greeting() {
            /*
            echo "Greetings!";
            */
        }
		
		//without .htaccess:
		// http://localhost/<project-folder>/test10/greeting
		
		//with .htaccess:
		// http://localhost/<project-folder>/test10/greeting
    }
?>