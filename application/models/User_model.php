<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public $iduser;
    public $name;
    public $email;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert()
    {
        return $this->db->insert('user', $this);
    }
    
    public function update()
    {
        return $this->db->update('user', $this, array('iduser' => $this->iduser));
    }
    
    public function delete()
    {
        return $this->db->delete('user', array('iduser' => $this->iduser));
    }
    
    public function getUser($iduser)
    {
        return $this->db->get_where('user', array('iduser' => $iduser))->row_object();
    }
    
    public function getUsers()
    {
        return $this->db->get('user');
    }
}