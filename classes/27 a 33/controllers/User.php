<?php
    class User extends CI_Controller {
        
        private $userid;
        
        public function __construct() {
            
            parent::__construct();
            $this->load->database();
            $this->load->model("UserModel");
            $this->load->helper("form");
            $this->load->library("form_validation");

            if(!$this->session->set_userdata("login_true")) {
                redirect(base_url() . "login");
            }
            $this->$userid = $this->session->userdata("uniid");
        }

        public function index() {
            $data["userinfo"] = $this->UserModel->loggedInUserInfo($this->userid);
            $this->load->view("header");
            $this->load->view("user_view", $data);
            $this->load->view("footer");
        }
        
        public function logout() {
            $array_items = array("uniid", "username", "login_true");
            $this->session->unset_userdata($array_items);
            redirect(base_url() . "login");
        }
        
        public function change_password() {
            $this->load->view("header");
            
            $data = $this->UserModel->loggedInUserInfo($this->userid);
            
            if (password_verify($opwd, $data->password)) {
                $this->UserModel->updatePassword($npwd, $this->userid);
                
                if (!empty($status)) {
                    $this->session->set_userdata("success", "Password changed successfully", 3);
                    redirect(current_url());
                }
                else {
                    $this->session->set_userdata("error", "Unable to update the password", 3);
                    redirect(current_url());
                }
            }
            
            else {
                $this->session->set_userdata("error", "Old password does not match with database password", 3);
                redirect(current_url());
            }
            
            
            $this->form_validation->set_rules("opwd","Old password","required");
            $this->form_validation->set_rules("npwd","New password","required|min_length[6]|max_length[20]");
            $this->form_validation->set_rules("cpwd","Confirm New password","required|matches[npwd]");
            
            if ($this->form_validation->run() == true) {
                $opwd = $this->input->post("opwd", true);
                $npwd = password_hash($this->input->post("npwd", true), PASSWORD_DEFAULT);
            }
            else {
                $this->load->view("change_pwd_view");
            }
            
            $this->load->view("footer");
        }
        
        public function edit() {
            
            $data['user'] = $this->UserModel->loggedInUserInfo($this->userid);
            $this->load->view("header");
            
            $this->form_validation->set_rules("uname","Username","required|min_length[3]");
            $this->form_validation->set_rules("mobile","Mobile","required|exact_length[10]");
            
            if ($this->form_validation->run() == true) {
                
                $userInfo = array(
                    "username" => $this->input->post("uname", true),
                    "mobile" => $this->input->post("mobile", true),
                );
                $status = $this->UserModel->updateProfile($userInfo, $this->userid);

                if (!empty($status)) {
                    $this->session->set_userdata("success", "Profile updated successfully", 3);
                    redirect(current_url());
                }
                else {
                    $this->session->set_userdata("error", "Unable to update the profile", 3);
                    redirect(current_url());
                }
            }
            
            else {
                $this->load->view("user_edit_view");
            }
            
            $this->load->view("footer");
        }
    }
    ?>