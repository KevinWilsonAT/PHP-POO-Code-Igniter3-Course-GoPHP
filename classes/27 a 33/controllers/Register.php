<?php
    class Register extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->helper("form");
            $this->load->library(array("form_validation", "session", "email"));
            $this->load->database();
            $this->load->model("RegisterModel");
        }

        public function index() {

            $this->load->view("header");

            $this->form_validation->set_rules("uname", "Username", "required|min_length[3]");
            $this->form_validation->set_rules("email", "Email", "required|valid_email");
            $this->form_validation->set_rules("pwd", "Password", "required|min_length[6]|max_length[20]");
            $this->form_validation->set_rules("cpwd", "Confirm Password", "required|min_length[6]|max_length[20]|matches[pwd]");
            $this->form_validation->set_rules("mobile", "Mobile", "required|exact_length[9]|numeric");
            $this->form_validation->set_rules("gender", "Gender", "required");

            if ($this->form_validation->run() === true) {
                $uniid = md5(str_shuffle(time()."abcdefghijklmnopqrstuvwxyz"."1234567890"));

                $data = array (
                    "username" => $this->input->post("uname", TRUE),
                    "email" => $this->input->post("email", TRUE),
                    "password" => password_hash($this->input->post("pwd", TRUE), PASSWORD_DEFAULT),
                    "mobile" => $this->input->post("mobile", TRUE),
                    "gender" => $this->input->post("gender", TRUE),
                    "uniid" => $uniid,
                );

                $status = $this->RegisterModel->saveData($data);

                if ($status === true) {
                    //$this->session->set_tempdata ("success", "Account created successfully", 3);
                    //redirect(current_url());

                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.email.com',
                        'smtp_timeout' => 30,
                        'smtp_port' => 465,
                        'smtp_user' => 'gophp@email.com',
                        'smtp_pass' => '********',
                        'charset' => 'utf-8',
                        'mailtype' => 'html',
                        'newline' => '\r\n'
                    );

                    $subject = "Account Activation Link - gophp";
                    $message = "Hello," . $this->input->post("uname", TRUE) . "<br><br>Thanks for the account creation.<br><br>"
                                . "Click to activate your account<br><br>"
                                . "<a href='". base_url() ."register/activate/". $uniid ."' target='_blank'>Activate Account</a>";

                    $this->email->initialize($config);
                    $this->email->set_newline("\r\n");
                    $this->email->set_crlf("\r\n");
                    $this->email->to($this->input->post("email", TRUE));
                    $this->email->from("info@email.com");
                    $this->email->subject($subject);
                    $this->email->message($message);
                    
                    if($this->email->send()) {
                        echo "Success";
                    }
                    else {
                        echo "Error";
                        print_r($this->email->print_debugger());
                    }
                }
                else {
                    $this->session->set_tempdata ("error", "Sorry! Unable to create an account", 3);
                    redirect(current_url());
                }
                
            }
            else {   
                $this->load->view("register_view");
            }

            $this->load->view("footer");
        }

        public function activate($uniid) {
            $this->RegisterModel->verifyUniid($uniid);

            if (!empty($data)) {
                if ($data->status == 'inactive') {
                    $this->db->where("uniid",$uniid);
                    $this->db->update("users", array("status" => "active"));
                    
                    if ($this->db->affected_rows() == 1) {
                        echo "<p> Account already created. Please Login.</p>";
                    }
                    else {
                        echo "<p> Cannot activate your account</p>";
                    }
                }

                else {
                    echo "<p> Account already created. Please Login.</p>";
                }
            }
            
            else {
                echo "<p> Cannot find your account</p>";
            }
        }
    }
?>