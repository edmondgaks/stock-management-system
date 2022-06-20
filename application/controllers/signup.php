<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function signup() {
        $this->load->database();
        $this->load->view('Signup');
    }
    public function store() {
        $this->form_validation->set_rules('firstname','firstname','required');
        $this->form_validation->set_rules('lastname','lastname','required');
        $this->form_validation->set_rules('email','email','required');

        $data['firstname'] = $this->input->post('firstname');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('Signup', $data);
        } 
        else {
            $data=array(
                'firstname'=>$this->input->post('firstname'),
                'lastname'=>$this->input->post('lastname'),
                'email'=>$this->input->post('email'),
                "password"=>$this->input->post('password')
            );
            $this->load->model('UserModel');
            $this->UserModel->insertUser($data);
            redirect('/products/add');
        }
    
    }
}

?>