<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function insert() {
        // Load the model
        $this->load->model('loginmodel');
        
        // Prepare the data to be inserted
        $data = array(
            'username' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'confirm_password' => $this->input->post('cpassword'),
            // Add more columns and values as needed
        );
        
        // Insert the data
        // print_r($data);
        // exit;
        $insert_id = $this->loginmodel->insertData($data);
        // print_r($insert_id);
        // exit;
        
        if ($insert_id) {
               
            //    echo "Data inserted successfully";
            // echo 'Data inserted. Insert ID: ' . $insert_id;

            header("Location: http://localhost/codelgniter2/");
        } else {
            // Failed to insert data
            echo 'Failed to insert data.';
        }
    }
}
