<?php

class Atividade_model extends CI_Model {

    public $idatividade;
    public $idevento;
    public $idusuario;
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

    public function __construct() {
        parent::__construct();
    }

    public function inserir() {
        return $this->db->insert('atividade', $this);
    }

    public function auto_increment() {
        $this->db->select_max('id');
        $query = $this->db->get('atividade');
    }

    public function get_atividades() {
        $query = $this->db->get('atividade');
        return $query->result();
    }

    function row_delete($id) {
        $this->db->delete('atividade', array('id' => $id));
    }

    public function get_atividadesById($id) {
        $query = $this->db->get('atividade');
        return $query->result();
    }
}
