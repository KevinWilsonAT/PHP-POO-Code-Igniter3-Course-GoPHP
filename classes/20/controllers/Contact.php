<?php
    class Contact extends CI_Controller {
        
        public function index() {
            $this->load->helper("form");
            $this->load->library("form_validation");

            $this->form_validation->set_rules("name", "Name", "required|min_length[3]", array(
                'required' => 'Name Required',
                'min_length' => 'Name should have at least 3 characters long'
            ));
            
            $this->form_validation->set_rules("email", "Email", "required|valid_email", array(
                'required' => 'Email Required',
                'valid_email' => 'Valid Email Required'
            ));
            
            $this->form_validation->set_rules("mobile", "Mobile", "required|numeric|exact_length[9]", array(
                'required' => 'Mobile number Required',
                'numeric' => 'Mobile number should contain number only',
                'exact_length' => 'Mobile number should contain exactly 9 numbers'
            ));

            if($this->form_validation->run() === TRUE) {
                echo 'All OK';
            }
            else {
                $this->load->view("contact_view");
            }
        }
    }
?>