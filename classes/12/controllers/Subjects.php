<?php

    class Subjects extends CI_Controller {
        
        public function index() {
            $data['subjects'] = ["HTML", "CSS", "Javascript", "Bootstrap", "PHP", "MySQL",
            "CodeIgniter", "Wordpress", "Drupal"];

            $this->load->view("subjects_view", $data);
        }
    }
?>