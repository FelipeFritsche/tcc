<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Atividade extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        if(!$this->session->id){
            redirect('login');
        }
    }

    public function index() {
        if ($this->input->post()) {
            $this->load->model('atividade_model', 'atividade');
            $this->atividade->idatividade = 2;
            $this->atividade->idusuario = $this->session->id;
            $this->atividade->idevento = 1;
            $this->atividade->tipo = $this->input->post('tipo');
            $this->atividade->titulo = $this->input->post('titulo');
            $this->atividade->duracao = $this->input->post('duracao');
            $this->atividade->data = $this->input->post('data');
            $this->atividade->inicio = $this->input->post('inicio');
            $this->atividade->fim = $this->input->post('fim');
            $this->atividade->cargaHoraria = $this->input->post('cargaHoraria');
            $this->atividade->limiteVagas = $this->input->post('limiteVagas');
            $this->atividade->descricao = $this->input->post('descricao');

            if ($this->atividade->inserir()) {
                echo 'Atividade salva com sucesso!!!';
            } else {
                echo 'Erro ao salvar atividade';
            }
        }
        $data['titulo'] = "Atividade";
        $this->template->load('template', 'atividade/view_atividade', $data);
    }
    
    public function listar() {
        $data['titulo'] = "Evento";
        $this->template->load('template', 'atividade/consultar_atividade', $data);
    }
    
    

}
