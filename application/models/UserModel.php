<?php

class UserModel extends CI_Model {
    public function insertUser($data) {
        return $this->db->insert('users', $data);
    }
    public function getUser() {
        $query = $this->db->get('users');
        return $query->result();
    }
    public function editUser($id) {
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
    public function updateUser($data,$id) {
        $this->db->update('users',$data,['id' => $id]);
    }
}

?>