<?php

class inventoryModel extends CI_Model {
    public function insertInventory($data) {
        return $this->db->insert('stk_inventory', $data);
    }
    public function getInventory() {
        $query = $this->db->get('stk_inventory');
        return $query->result();
    }
}

?>