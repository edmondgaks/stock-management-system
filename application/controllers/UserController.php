<?php

class UserController extends CI_Controller
{
    public function display()
    {
        $this->load->model('UserModel');
        $data['users'] = $this->UserModel->getUser();
        $this->load->view('displayUser',$data);
    }
    public function edit($id) {
        $this->load->model('UserModel');
        $data['user'] = $this->UserModel->editUser($id);
        $this->load->view('editUser',$data);
    }
    public function update($id) {
        $this->form_validation->set_rules('firstname','firstname','required');
        $this->form_validation->set_rules('lastname','lastname','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run()) :
            $data = [
                "firstname" => $this->input->post('firstname'),
                "lastname" => $this->input->post('lastname'),
                "email" => $this->input->post('email'),
                "password" => $this->input->post('password')
            ];
            $this->load->model('UserModel');
            $this->UserModel->updateUser($data,$id);
            redirect(base_url('display/user'));
        else : 
            $this->edit($id);
        endif;
    }
}
?>