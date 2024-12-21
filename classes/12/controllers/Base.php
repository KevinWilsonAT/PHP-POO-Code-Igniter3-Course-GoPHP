<?php

    class Base extends CI_Controller {
        
        public function index() {
            $this->load->view("sample");
            $this->load->view("myview");
        }
    }

?>