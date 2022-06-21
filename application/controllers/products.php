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
    public function update($id) {
        $this->form_validation->set_rules('prodname','prodname','required');
        $this->form_validation->set_rules('brand','brand','required');
        $this->form_validation->set_rules('sphone','sphone','required');
        $this->form_validation->set_rules('supplier','supplier','required');
        if($this->form_validation->run()) :
            $data = [
                "product_Name" => $this->input->post('prodname'),
                "brand" => $this->input->post('brand'),
                "supplier_phone" => $this->input->post('sphone'),
                "supplier" => $this->input->post('supplier')
            ];
            $this->load->model('ProductsModel');
            $this->ProductsModel->updateProduct($data,$id);
            redirect(base_url('products/display'));
        else : 
            $this->edit($id);
        endif;
    }
    public function delete($id) {
        $this->load->model('ProductsModel');
        $this->ProductsModel->deleteProduct($id);
        redirect(base_url('/products/display'));
    }
    public function print() {
        $this->load->library('fpdf');
        $products = $this->db->get('products')->result_array();
        $fpdf = new FPDF();
        $fpdf->AddPage();

        $fpdf->SetFont('arial','',12);

        $fpdf->Cell(180,10,'Product Details',1,1,'C');
        $fpdf->Cell(45,10,'Product Name',1,0);
        $fpdf->Cell(45,10,'Brand',1,0);
        $fpdf->Cell(45,10,'Supplier phone',1,0);
        $fpdf->Cell(45,10,'Supplier',1,0);
        // $fpdf->Cell(45,10,'Added Date',1,0);

        foreach ($products as $product) {
            $fpdf->Ln();
            $fpdf->SetFont('arial','',8);
            $fpdf->Cell(45,10,$product['product_Name'],1,0);
            $fpdf->Cell(45,10,$product['brand'],1,0);
            $fpdf->Cell(45,10,$product['supplier_phone'],1,0);
            $fpdf->Cell(45,10,$product['supplier'],1,0);
            // $fpdf->Cell(45,10,$product['added_date'],1,0);
        }
        $fpdf->Output();

    }
}

?>