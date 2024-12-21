<?php

    class Emp extends CI_Controller {
        
        public function index() {
            $data['employees'] = array(
                array("id"=>1, "name"=>"ram", "email"=>"ram@email.com"),
                array("id"=>2, "name"=>"nit", "email"=>"nit@email.com"),
                array("id"=>3, "name"=>"gophp", "email"=>"gophp@email.com"),
            );

            $data['page_title'] = "All Employees";
            $data['page_heading'] = "All Employees List";

            $this->load->view("emp_view", $data);
        }
    }

?>