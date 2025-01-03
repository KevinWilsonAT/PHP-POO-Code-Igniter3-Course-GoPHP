<?php
    class Login extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->helper("form");
            $this->load->library(array("form_validation"));
            $this->load->database();
            $this->load->model("LoginModel");
        }

        public function index() {
            $this->load->view("header");

            $this->form_validation->set_rules("email", "Email", "required|valid_email");
            $this->form_validation->set_rules("pwd", "Password", "required");

            if ($this->form_validation->run() == true) {
                $email = $this->input->post("email", true);
                $pwd = $this->input->post("pwd", true);

                $info = $this->LoginModel->verifyEmail($email);

                if (!empty($info)) {
                    if (password_verify($pwd, $info->password)) {
                        if ($info->status == "active") {
                            //$this->session->set_userdata("login_true", $info->uniid);
                            $this->session->set_userdata(array(
                                "uniid" => $info->uniid,
                                "username" => $info->username,
                                "login_true" => true)
                            );
                            
                            redirect(current_url() . "user");
                        }
                        else {
                            $this->session->set_tempdata("warning", "Activate the account");
                            redirect(current_url());
                        }
                    }
                    else {
                        $this->session->set_tempdata("error", "Wrong password");
                        redirect(current_url());
                    }
                }
                else {
                    $this->session->set_tempdata("error", "Unable to find email");
                    redirect(current_url());
                }
            }
            else {
                $this->load->view("login_view");
            }
            
            $this->load->view("footer");
        }
    }
?>