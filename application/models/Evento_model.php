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

    public function __construct() {
        parent::__construct();
    }

    public function inserir() {
        return $this->db->insert('evento', $this);
    }

    public function auto_increment() {
    $this->db->select_max('id');
    $query = $this->db->get('evento');
    }

    public function get_evetos() {
        $query = $this->db->get('evento');
        return $query->result();
    }

    public function get_evetosById($id) {
        $query = $this->db->query('select e.titulo,e.local,e.responsavel,i.tipoAcesso from evento e,inscricao i where e.idevento = i.idevento and i.idusuario ='.$id);
        return $query->result();
    }
    
    function row_delete($id) {
        $this->db->delete('evento', array('id' => $id)); 
    }

}
