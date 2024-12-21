<?php
    class TestEmail extends CI_Controller {
        
        public function index() {
            $this->load->library("email");

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.email.com',
                'smtp_timeout' => 30,
                'smtp_port' => 465,
                'smtp_user' => 'user@email.com',
                'smtp_pass' => '********',
                'charset' => 'utf-8',
                'mailtype' => 'html',
                'newline' => '\r\n'
            );

            $this->email->initialize($config);

            $this->email->set_newline("\r\n");
            $this->email->set_crlf("\r\n");
            $this->email->to("ram@email.com");
            $this->email->from("info@email.com");
            $this->email->subject("Subject goes here");
            $this->email->message("Message...");
            
            if($this->email->send()) {
                echo "Success";
            }
            else {
                echo "Error";
                print_r($this->email->print_debugger());
            }
        }
    }
?>