<?php
    class Contacts extends CI_Controller {
        
        public function index() {
            $this->load->model("ContactsModel");
            $data['records'] = $this->ContactsModel->getContacts();
            $this->load->view("contacts_view", $data);
        }
    }
?>