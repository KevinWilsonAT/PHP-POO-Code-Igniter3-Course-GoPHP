<?php
    class LoginModel extends CI_Model {

        public function verifyEmail($email) {
            $this->db->where("email", $email);
            $result = $this->db->get("users");

            if ($this->db->affected_rows() == 1) {
                return $result->row();
            }
            else {
                return false;
            }
        }
    }
?>