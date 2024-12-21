<?php
    class Test3a extends CI_Controller {
		
		public function index() {
			$this->load->helper("array");
			$quotes = array("Quote 1", "Quote 2", "Quote 3", "Quote 4", "Quote 5", "Quote 6");
			
			$data['quote'] = random_element($quotes);
			$this->load->view("test3a_view", $data);
		}
    }
?>