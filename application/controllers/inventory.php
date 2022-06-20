<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class inventory extends CI_Controller {
    public function inventory() {
        $this->load->model('ProductsModel');
        $data['products'] = $this->ProductsModel->getProduct();
        $this->load->view('Inventory',$data);
    }
    public function store() {
        $this->form_validation->set_rules('quantity','quantity','required');
        $this->form_validation->set_rules('productId','productId','required');

        $data['productId'] = $this->input->post('productId');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('Inventory', $data);
        }
        else {
            $data=array(
                'quantity'=>$this->input->post('quantity'),
                'productId'=>$this->input->post('productId')
            );
            
            $this->load->model('inventoryModel');
            $this->inventoryModel->insertInventory($data);
            redirect('products/display');
        }
    }
}

?>