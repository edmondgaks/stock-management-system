<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function products() {
        $this->load->database();
        // $this->load->view('Product');
    }
    public function store() {
        $this->form_validation->set_rules('prodname','prodname','required');
        $this->form_validation->set_rules('brand','brand','required');
        $this->form_validation->set_rules('sphone','sphone','required');
        $this->form_validation->set_rules('supplier','supplier','required');

        $data['prodname'] = $this->input->post('prodname');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('Product', $data);
        } 
        else {
            $data=array(
                'product_Name'=>$this->input->post('prodname'),
                'brand'=>$this->input->post('brand'),
                'supplier_phone'=>$this->input->post('sphone'),
                'supplier'=>$this->input->post('supplier')
            );

            $this->load->model('ProductsModel');
            $this->ProductsModel->insertProduct($data);
            redirect('products/display');
        }
    }
    public function display() {
        $this->load->model('ProductsModel');
        $data['products'] = $this->ProductsModel->getProduct();
        $this->load->view('displayProducts',$data);
    }
    public function edit($id) {
        $this->load->model('ProductsModel');
        $data['product'] = $this->ProductsModel->editProduct($id);
        $this->load->view('editProduct',$data);
    }
    
}

?>