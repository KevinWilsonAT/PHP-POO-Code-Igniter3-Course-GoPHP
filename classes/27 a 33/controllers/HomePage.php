<?php

    class HomePage extends CI_Controller {

        public function Index() {
            $this->load->view("header");
            $this->load->view("homepage_view");
            $this->load->view("footer");
        }
        
        public function article($id) {
            $this->load->view("header");
            $this->load->view("article_view");
            $this->load->view("footer");
        }
    }
?>