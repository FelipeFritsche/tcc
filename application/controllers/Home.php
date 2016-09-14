<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {    
        $this->load->model('evento_model', 'evento');
        $data['eventos']= $this->evento->get_evetosById($this->session->id);
        $this->template->load('template','home',$data);
        
    }
}
?>    