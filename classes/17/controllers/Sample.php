<?php
    class Sample extends CI_Controller {
		
		public function index() {
			$this->load->helper(array("url","html"));

			$this->load->view("sample_view");
		}
    }
?>