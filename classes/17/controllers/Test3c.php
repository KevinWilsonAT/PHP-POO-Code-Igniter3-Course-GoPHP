<?php
    class Test3c extends CI_Controller {
		
		public function index() {
			$this->load->helper(array("form", "html", "url"));

			$list = array("HTML", "CSS", "Javascript");
			$attr = array("id" => "CSS", "class" => "all_sub");
			
			echo ul($list, $attr);

			$this->load->view("test3c_view");
		}
    }
?>