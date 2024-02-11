<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
        $data['current_uri'] = $this->uri->uri_string();
        $data['title'] = 'Dashboard';
        
        $this->load->view('pages/v_admin', $data); 
	}

        public function load_page($page) {
                // Load halaman dari folder 'pages' secara dinamis
                $this->load->view('pages/' . $page);
        }
}