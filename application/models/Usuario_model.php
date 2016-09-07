<?php

/**
 * Description of Usuario_model
 *
 * @author 130266
 */
class Usuario_model extends CI_Model {

    public $id;
    public $nome;
    public $email;
    public $endereco;

    public function __construct() {
        parent::__construct();
    }

    public function inserir() {
        return $this->db->insert('usuario', $this);
    }

    public function login($usuario, $senha) {
        $this->db->select('usuario, senha');
        $this->db->from('usuario');
        $this->db->where('usuario', usuario);
        $this->db->where('senha', senha);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $data['titulo'] = "Evento";
        $this->template->load('template', 'atividade/consultar_atividade', $data);
            return $query->result();
        } else {
            $data['titulo'] = "Evento";
        $this->template->load('template', 'atividade/consultar_atividade', $data);
            $this->load->view('../login');
            return false;
        }
    }

}
