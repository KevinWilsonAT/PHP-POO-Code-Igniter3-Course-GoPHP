<?php
    class Test24 extends CI_Controller {
		
		public function __construct() {

			parent::__construct();
			$this->load->helper("form");
			$this->load->library(array("form_validation","session"));
			$this->load->database();
			$this->load->model("Test25");
		}

		public function index() {
			$this->form_validation->set_rules("uname", "Username", "required|min_length[3]");
			$this->form_validation->set_rules("email", "Email", "required|valid_email");
			$this->form_validation->set_rules("pwd", "Password", "required|min_length[6]|max_length[20]");
			$this->form_validation->set_rules("cpwd", "Confirm Password", "required|min_length[6]|max_length[20]|matches[pwd]");
			$this->form_validation->set_rules("mobile", "Mobile", "required|exact_length[10]|numeric");
			$this->form_validation->set_rules("gender", "Gender", "required");
			
			if($this->form_validation->run() === true) {
				
				$data = array(
					"username" => $this->input->post("uname",TRUE),
					"email" => $this->input->post("email",TRUE),
					"password" => password_hash($this->input->post("pwd",TRUE), PASSWORD_DEFAULT),
					"mobile" => $this->input->post("mobile",TRUE),
					"gender" => $this->input->post("gender",TRUE),
					"uniid" => md5(str_shuffle(time().$uname.$mobile."abcdefghijklmnopqrstuvwxyz"))
				);

				$status = $this->Test25->saveData($data);

				if($status === true) {
					$this->session->set_tempdata("success","Account created successfully",3);
					redirect(current_url());
				}
				else {
					$this->session->set_tempdata("error","Sorry, Unable to create an account",3);
					redirect(current_url());
				}

			}
			else {
				this->load->view("test24a");
			}
		}

		public function another {

		}
        
    }
?>