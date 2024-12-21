<?php
    class Test3b extends CI_Controller {
		
		public function index() {
			$this->load->helper("form");
			$this->load->view("test3b_view");
		}
    }
?>