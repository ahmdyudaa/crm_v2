<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('session');
    }
    public function login_post(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // $adminModel = new _admin();
        $result = $this->m_admin->login($username, $password);

        if($result){
            $this->session->set_userdata('user_id', $result['id_admin']);
            $this->session->set_userdata('username', $result['username']);
            $this->response([
                'data' => $result,
                'status' => true,
                'message' => "Login successful",
            ], RestController::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => "Login failed",
            ], RestController::HTTP_BAD_REQUEST);
        }     
        
    }
} 