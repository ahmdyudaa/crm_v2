<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Agen extends RestController{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_agen');
    }

    public function index_get(){
        $agen['data'] = $this->m_agen->get_agen();
        // $agen = $this->m_agen->get_agen();
		$this->response($agen, 200);
    }

    public function create_post() {
        $data['agen'] = 'create cuy';
        $this->response($data, 200);
    }

    public function update_put($id) {
        $data['agen'] = 'update cuy';
        $this->response($data, 200);
    }

    public function delete_delete($id) {
        $data['agen'] = 'delete cuy';
        $this->response($data, 200);
    }

} 