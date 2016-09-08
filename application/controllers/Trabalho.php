<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Trabalho extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('trabalho_model', 'trabalho');
    }
    
    public function index()
    {
        if($this->input->post()){            
            $this->trabalho->id = $this->input->post('id');
            $this->trabalho->nome = $this->input->post('nome');
            $this->trabalho->modalidade = $this->input->post('email');
            $this->trabalho->areaTematica = $this->input->post('endereco');
            $this->trabalho->avaliador = $this->input->post('nome');
            
            if($this->trabalho->inserir()){
                echo 'Trabalho salvo com sucesso!';
            }
            else{
                echo 'Erro ao salvar trabalho';
            }
        }
        $this->load->view('view_trabalho');        
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