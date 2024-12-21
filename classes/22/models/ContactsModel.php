<?php
    class ContactsModel extends CI_Model {
        public function getContacts() {
            $this->load->database();
            $result = $this->db->query("SELECT * FROM contact");
            
            if($result->num_rows() > 0) {
                return $result->result();
            }
            else {
                return false;
            }
        }
    }
?>