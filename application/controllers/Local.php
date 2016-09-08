<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Trabalho extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function add()
    {
        echo 'Action para add Trabalho';
    }
    
    public function editar($id)
    {
        echo 'Editando o Trabalho #' . $id;
    }
    
    public function excluir($id)
    {
        if($this->trabalho->excluir($id)){
            echo 'Trabalho #' . $id . ' excluido';
        }
        else{
            echo 'Erro ao excluir o Trabalho #' . $id;
        }        
    }
}

