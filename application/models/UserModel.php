<?php

class UserModel extends CI_Model {
    public function insertUser($data) {
        return $this->db->insert('users', $data);
    }
    public function getUser() {
        $query = $this->db->get('users');
        return $query->result();
    }
}

?>