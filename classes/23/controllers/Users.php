<?php
    class Users extends CI_Controller {
        
        public function index() {
            $this->load->database();
    
            $this->db->where(array('id' => 1, 'name' => 'gophp'));
            
            $data = $this->db->get("contact");
 
            /*
                $this->db->where(array('<field>' => <value>, '<field>' => '<value>'));
                [...] WHERE <field>='<value>' AND <field>='<value>'
            
                $data = $this->db->get("<database-name>");
                SELECT * FROM <database-name> [...]
            */
            
            print_r($data->result());
        }
    }
?>