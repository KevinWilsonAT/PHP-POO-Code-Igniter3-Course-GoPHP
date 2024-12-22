<?php
    class RegisterModel extends CI_Model {

        public function saveData($data) {
            $this->db->insert("users", $data);
            
            if ($this->db->affected_rows() == 1) {
                return true;
            }
            else {
                return false;
            }
        }
        
        public function verifyUniid($uniid) {
            $this->db->where("uniid",$uniid);
            $res = $this->db->get("users");
            
            if ($res->affected_rows() == 1) {
                return $res->row();
            }
            else {
                return false;
            }
        }
    }
?>