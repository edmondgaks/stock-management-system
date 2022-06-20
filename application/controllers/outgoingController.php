<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class outgoingController extends CI_Controller {
    public function outgoing() {
        $this->load->model('ProductsModel');
        $data['products'] = $this->ProductsModel->getProduct();
        $this->load->view('Outgoing',$data);
    }
}