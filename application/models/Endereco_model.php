<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Endereco_model extends CI_Model {
    
    public $idusario;
    public $pais;
    public $cep;
    public $logradouro;
    public $numero;
    public $estado;
    public $bairro;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir()
    {
        return $this->db->insert('endereco', $this);
    }
    
}