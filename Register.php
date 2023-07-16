
<?php

class Register extends CI_Controller{ 
    
    public function insert() {
        // Load the model
        $this->load->model('Registermodel');
        
        // Prepare the data to be inserted
        $data = array(
            'Full_Name' => $this->input->post('Full_Name'),
            'Email' => $this->input->post('E-Mail_Address'),
            'Passsword' => $this->input->post('Passsword'),
            'Confirm_Passsword' => $this->input->post('Confirm_Passsword'),
            
        );
        // print_r($data);
        // exit;
        
        // Insert the data
        $insert_id = $this->Registermodel->insertData($data);
        
        if ($insert_id) {
            // Data inserted successfully
            // echo 'Data inserted. Insert ID: ' . $insert_id;
            header("Location: http://localhost/codelgniter2/index.php/welcome/date/login.php");
        } else {
            // Failed to insert data
            echo 'Failed to insert data.';
        }
        
    }

    public function login() {
        // $this->load->view('dashbord');
                                           
        $this->load->model('Registermodel'); // Load the Registermodel
    
        $query = array(
            'Email' => $this->input->post('email'),
            'Passsword' => $this->input->post('password'),
        );
        // print_r($query);
        // exit;
        
        $user = $this->Registermodel->logindata($query['Email'], $query['Passsword']);
    // print_r($user);
    // exit;
        if ($user) {
            $_SESSION['username'] =  $user->Email;
            // User authenticated, create session or perform other actions
            // echo 'User authenticated.';
            header("Location: http://localhost/codelgniter2/index.php/welcome/display/");
        } else {
            // Authentication failed, display error message
            echo 'Invalid username or password';
        }
    }
   
    public function displayData() {
        $this->load->model('Registermodel');
        $data['users'] = $this->Registermodel->getAllData();
        // print_r($data);
        // exit;
        $this->load->view('display_data',$data);

    }
    public function delete($id) {
        $this->load->model('Registermodel');
        $data = $this->Registermodel->deleteData($id);
        
        // print_r($rows_affected);
        if ($data > 0) {
            // Data deleted successfully
            // echo 'Data deleted.';
            header("Location: http://localhost/codelgniter2/index.php/welcome/display/");
        } else {
            // Failed to delete data
            echo 'Failed to delete data.';
        }
    }
   
    public function edit($id) {
        $this->load->model('Registermodel');
        $data['user'] = $this->Registermodel->getUserById($id);
        // print_r($data);
        // exit;
        $this->load->view('editform', $data);
   
  }

  public function update($id) {
    $this->load->model('Registermodel');
    
    // Prepare the data to be updated
    $data = array(
        'Full_Name' => $this->input->post('Full_Name'),
        'Email' => $this->input->post('E-Mail_Address'),
        'Passsword' => $this->input->post('Password'),
        // 'Confirm_Passsword' => $this->input->post('Confirm_Password'),
    );
    
    // Update the data
    $rows_affected = $this->Registermodel->updateData($id, $data);
    
    if ($rows_affected > 0) {
        // Data updated successfully
        header("Location: http://localhost/codelgniter2/index.php/welcome/display/");
    } else {
        // Failed to update data
        echo 'Failed to update data.';
    }
}
}    