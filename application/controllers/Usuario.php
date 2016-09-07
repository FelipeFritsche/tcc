<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        if($this->input->post()){
            $this->load->model('usuario_model', 'usuario');
            $this->usuario->nome = $this->input->post('nome');
            $this->usuario->email = $this->input->post('email');
            $this->usuario->endereco = $this->input->post('endereco');
            $this->usuario->telefone = $this->input->post('nome');
            $this->usuario->celular = $this->input->post('email');
            $this->usuario->senha = $this->input->post('endereco');
            
            if($this->usuario->inserir()){
                echo 'Usuario salvo com sucesso!';
            }
            else{
                echo 'Erro ao salvar usuário';
            }
        }
        $this->load->view('view_cadastro');        
    }
}