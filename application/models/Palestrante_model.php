<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Palestrante_model extends CI_Model {
    
    public $id;
    public $nome;
    public $email;
    public $endereco;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir()
    {
        return $this->db->insert('palestrante', $this);
    }
    
}