<?php
    class Data extends CI_Controller {
        
        public function index() {
            $this->load->database();
            $resultSet = $this->db->query("SELECT * FROM contact");

            echo $resultSet->num_rows();

            $data = $resultSet->result();

            print_r($data);
        }
    }
?>