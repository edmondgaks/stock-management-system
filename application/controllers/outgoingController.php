<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class outgoingController extends CI_Controller {
    public function outgoing() {
        $this->load->model('ProductsModel');
        $data['products'] = $this->ProductsModel->getProduct();
        $this->load->view('Outgoing',$data);
    }
    public function store() {
        $this->form_validation->set_rules('productId','productId','required');
        $this->form_validation->set_rules('quantity','quantity','required');

        $data['productId'] = $this->input->post('productId');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('Outgoing', $data);
        }
        else {
            $data=array(
                'productId'=>$this->input->post('productId'),
                'quantity'=>$this->input->post('quantity')
            );
    
            $this->load->model('OutgoingModel');
            $this->OutgoingModel->insertOutgoing($data);
            redirect('products/display');
        }
    }
}