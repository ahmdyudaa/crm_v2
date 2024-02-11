<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
        // $data['title'] = 'Dashboard';
        // $this->load->view('root/v_app', $data); 
		if ($this->session->userdata('user_id')) {
			echo "User ID: " . $this->session->userdata('user_id');
			echo "Username: " . $this->session->userdata('username');
			redirect('admin');
		} else {
			echo "User belum login";
			redirect('login');
		}
	}
}