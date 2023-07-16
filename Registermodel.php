

<?php
class Registermodel extends CI_Model {
    
    public function insertData($data) {
        $this->db->insert('login_register', $data);
        return $this->db->insert_id();
    }


    public function logindata($Email, $Passsword) {
        $this->db->where('Email', $Email);
        $this->db->where('Passsword', $Passsword);
        $query = $this->db->get('login_register');
        return $query->row();
    }


    public function getAllData() {  
        $query = $this->db->get('login_register');
        return $query->result();
    }
    // print_r($query);
    // exit;

    public function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('login_register');
        return $this->db->affected_rows();
    }

    public function getUserById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('login_register');
        return $query->row();
    }

    public function updateData($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('login_register', $data);
        return $this->db->affected_rows();
    }
}
