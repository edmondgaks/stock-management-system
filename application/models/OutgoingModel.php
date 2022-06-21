<?php

class OutgoingModel extends CI_Model {
    public function insertOutgoing($data) {
        return $this->db->insert('outgoing', $data);
    }
    public function getOutgoing() {
        $query = $this->db->get('outgoing');
        return $query->result();
    }
}

?>