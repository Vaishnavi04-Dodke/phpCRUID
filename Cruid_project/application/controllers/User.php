<?php
class User extends CI_controller{
    function index() {
        $this->loa~d->model('User_model');
        $users = $this->User_model->all();
        $data['users'] = $users;
        $this->load->view('List', $data);
    }
    function create() {
    // $this->load->view('create');
    $this->load->model('User_model');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == false) {
        $this->load->view('create');
    } else {
        // Form validation passed, save record to database
        $formArray = array();
       $formArray['name']=$this->input->post('name');
       $formArray['email']=$this->input->post('email');
       $formArray['create_at']=date('y-m-d');
       $this->User_model->create($formArray);
       $this->session->set_flashdata('success','record added successfully');
       redirect(base_url().'index.php/user/index');
       

    }
}

function edit($userId) {
    // Load the necessary model to fetch user data
    $this->load->model('User_model');
    
    // Fetch user data from the model based on the user ID
    $user = $this->User_model->getuser($userId);
    
    // Pass the user data to the view
    $data['user'] = $user;

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
    if($this->form_validation->run() == false){
        $this->load->view('Edit', $data);
    } else {
        // Form validation passed, update user records
        $formArray = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'create_at' => date('Y-m-d') // Use capital Y for 4-digit year
        );
        $this->User_model->updateuser($userId, $formArray);
        $this->session->set_flashdata('success', 'Record updated successfully');
        redirect(base_url() . 'index.php/user/index');
    }
}

function delete($userId) {
    $this->load->model('User_model');
    
    // Fetch user data from the model based on the user ID
    $user = $this->User_model->getuser($userId);
    
    // Check if the user exists
    if(empty($user)) {
        $this->session->set_flashdata('failure', 'Record not found in database');
    } else {
        // Delete the user record
        $this->User_model->deleteuser($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
    }
    
    redirect(base_url() . 'index.php/user/index');
}
}
?>