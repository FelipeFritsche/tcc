<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Trabalho_model extends CI_Model {
    
    public $id;
    public $nome;
    public $modalidade;
    public $areaTematica;
    public $avalidador;
    public $arquivo;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir()
    {
        return $this->db->insert('trabalho', $this);
    }
    
    public function excluir($id)
    {
        return $this->db->delete('trabalho', array('id' => $id));
    }
    
    function row_delete($id) {
        $this->db->delete('trabalho', array('id' => $id));
    }
    
}