<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  function index(){
    $this->load->view('login_templates/header');
    $this->load->view('login_view');
    $this->load->view('login_templates/footer');
  }

  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $user_id  = $data['user_id'];
        $fname  = $data['firstname'];
        $mname  = $data['middlename'];
        $lname  = $data['lastname'];
        $contact = $data['contact_no'];
        $username = $data['username'];
        $address = $data['address'];
        $post_image  = $data['post_image'];
        $created_on  = $data['created_on'];
        $level  = $data['user_level'];
        $sesdata = array(
            'id' => $user_id,
            'fname'  => $fname,
            'mname'  => $mname,
            'lname'  => $lname,
            'username'  => $username,
            'contact' => $contact,
            'address' => $address,
            'post_image'  => $post_image,
            'created_on'  => $created_on,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'admin'){
            redirect('superadmin/index');

        // access login for staff
        }else{
            redirect('superadmin/staff');

        // access login for author
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is incorrect');
        redirect('login/index');
    }
  }

  function logout(){
      $this->session->sess_destroy();
     redirect('login/index');
  }

}
