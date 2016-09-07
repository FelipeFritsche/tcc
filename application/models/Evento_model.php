<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Evento_model extends CI_Model {
    
    public $idevento;
    public $titulo;
    public $link;
    public $local;
    public $responsavel;
    public $email;
    public $telefone;
    public $descricao;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir()
    {
        return $this->db->insert('evento', $this);
    }
    
}
