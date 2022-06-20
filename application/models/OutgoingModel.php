<?php

class OutgoingModel extends CI_Model {
    public function insertOutgoing($data) {
        return $this->db->insert('outgoing', $data);
    }
}

?>