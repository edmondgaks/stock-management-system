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
    public function deleteUser($id) {
        return $this->db->delete('users',['id'=> $id]);
    }
    public function loginUser($data) {
        $this->db->select('*');
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $this->db->from('users');
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}

?>