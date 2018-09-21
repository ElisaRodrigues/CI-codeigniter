<?php

defined('BASEPATH') OR exit('No direct script acess allowed');

class Helloworld extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Helloworld_model');
    }

    public function index(){
    $data['result'] = $this->Helloworld_model->getData();

    $this->load->view('helloworld_view', $data);
    }
}