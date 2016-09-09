<?php

/**
 * Description of Usuario_model
 *
 * @author 130266
 */
class Usuario_model extends CI_Model {
    
    public $idusuario;
    public $cpf;
    public $nome;
    public $email;
    public $sexo;
    public $telefone;
    public $celular;
    public $usuario;
    public $senha;

    public function __construct() {
        parent::__construct();
    }

    public function inserir() {
        return $this->db->insert('usuario', $this);
    }

    public function autenticar($usuario, $senha) {
        return $this->db
                ->from('usuario u')
                ->where('u.usuario', $usuario)
                ->where('u.senha', $senha)
                ->get()
                ->row_object();
    }

    public function get_usuarios() {
        $query = $this->db->get('usuario');
        return $query->result();
    }
}
