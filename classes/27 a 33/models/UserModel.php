<?php

    class UserModel extends CI_Model {

        public function loggedInUserInfo($userid) {
            
            $this->db->where("uniid", $userid);
            $result = $this->db->get("users");

            if ($result->num_rows() > 0) {
                return $result->row();
            }
            else {
                return false;
            }
        }

        public function updatePassword($pwd, $id) {
            $this->db->where("uniid", $id);
            $this->db->getupdate("users", array("password" => $pwd));

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        public function updateProfile($data, $id) {
            $this->db->where("uniid", $id);
            $this->db->getupdate("users", $data);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }
    }

?>