<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class inventory extends CI_Controller {
    public function inventory() {
        $this->load->model('ProductsModel');
        $data['products'] = $this->ProductsModel->getProduct();
        $this->load->view('Invetory',$data);
    }
}

?>