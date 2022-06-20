<?php

class ProductsModel extends CI_Model {
    public function insertProduct($data) {
        return $this->db->insert('products', $data);
    }
    public function getProduct() {
        $query = $this->db->get('products');
        return $query->result();
    }
    public function editProduct($id) {
        $query = $this->db->get_where('products', ['productId' => $id]);
        return $query->row();
    }
    public function updateProduct($data,$id) {
        $this->db->update('products',$data,['productId' => $id]);
    }
}

?>