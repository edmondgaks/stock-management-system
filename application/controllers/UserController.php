<?php

class UserController extends CI_Controller
{
    public function display()
    {
        $this->load->model('UserModel');
        $data['users'] = $this->UserModel->getUser();
        $this->load->view('displayUser',$data);
    }
}
?>