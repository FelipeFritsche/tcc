<?php

class Local_model extends CI_Model {
    
    public $idatividade;
    public $titulo;

    public function __construct() 
    {
        parent::__construct();
    }
    
    public function inserir()
    {
        return $this->db->insert('local', $this);
    }

    function row_delete($id) {    
    $this->db->delete('local', array('id' => $id)); 
}
}

