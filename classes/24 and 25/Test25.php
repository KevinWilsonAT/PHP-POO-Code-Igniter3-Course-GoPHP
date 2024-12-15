<?php
    class Test25 extends CI_Model {

		public function saveData($data) {
			
			$this->db->insert("users",$data);
			if ($this->db->affected_rows()==1) {
				return true;
			}
			else {
				return false;
			}
		}

	}
?>