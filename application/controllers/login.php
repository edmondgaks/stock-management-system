<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function index() {
        $this->load->view('Login');
    }
    public function login() {
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');

        $data['email'] = $this->input->post('email');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('Login', $data);
        }else {
            $data=array(
                'email'=>$this->input->post('email'),
                "password"=>$this->input->post('password')
            );
            $this->load->model('UserModel');
            $result = $this->UserModel->loginUser($data);
            if($result != false) {
                echo
                $auth_userdetails = [
                    'firstname' => $result->firstname,
                    'lastname' => $result->lastname,
                    'email' => $result->email
                ];
                $this->session->set_userdata('authenticated','1');
                $this->session->set_userdata('auth_user',$auth_userdetails);
                $this->session->set_flashdata('status','Invalid Email id or password');
                redirect(base_url('home'));
            } else {
                $this->session->set_flashdata('status','Invalid Email');
                redirect(base_url('login'));
            }
            redirect('/home');
        }
    }
    
}

?>