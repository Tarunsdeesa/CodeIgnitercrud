<?php
class loginmodel extends CI_Model {
    
    public function insertData($data) {
        $this->db->insert('registration', $data);
        return $this->db->insert_id();
    }
}
?>