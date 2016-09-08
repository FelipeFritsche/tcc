<?php

class Atividade_model extends CI_Model {
    
    public $id;
    public $idevento;
    public $idpalestrante;
    public $nome;
    public $titulo;
    public $tipo;
    public $duracao;
    public $data;
    public $inicio;
    public $fim;
    public $cargaHoraria;
    public $limiteVagas;
    public $descricao;
    public $facilitador;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir()
    {
        return $this->db->insert('atividade', $this);
    }
    
    public function auto_increment() {
//        $query = $this->db->select('max(id)')
//                  ->from('atividade')
//                  ->get();
    }
    public function get_atividades() {
         $query = $this->db->get('atividade');
        return $query->result();
    }
    
    function row_delete($id) {    
    $this->db->where('id', $id);   
    $this->db->delete('atividade');
}
}