<?php
class loginmodel extends CI_Model {

    public function authenticate($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('login_register');
        return $query->row();
    }
}   