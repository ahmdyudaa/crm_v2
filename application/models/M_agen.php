<?php

class M_agen extends CI_model{

    public function get_agen()
    {
        return $this->db->get('agen')->result();
    }

    public function insert_agen($agen)
    {
        $this->db->insert('agen', $agen);
    }

    public function delete_agen($id)
    {
        $this->db->where('id_agen', $id);
        $this->db->delete('agen');
    }

    public function update_agen($id, $agen){
        $this->db->where('id_agen', $id);
        $this->db->update('agen', $agen);
    }

}