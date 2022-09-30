<?php 

class ModelBerita extends CI_Model{
    function tampil_data(){
        return $this->db->get('berita');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
}