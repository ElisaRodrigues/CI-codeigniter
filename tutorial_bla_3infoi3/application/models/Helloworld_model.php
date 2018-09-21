<?php

defined('BASEPATH') or exit ('No direct script acess allowed');

class Helloworld_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function getData(){
        $query = $this->db->get('data');
        if ($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        } else{
            return false;
        }
    }
}