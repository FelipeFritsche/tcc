<?php
/**
 * Description of Cadastro
 *
 * @author 130266
 */
class Evento extends CI_Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        if($this->input->post()){
            $this->load->model('evento_model', 'evento');
            $this->evento->idevento = 1;
            $this->evento->titulo = $this->input->post('titulo');
            $this->evento->email = $this->input->post('email');
            $this->evento->responsavel = $this->input->post('responsavel');
            $this->evento->local = $this->input->post('local');
            $this->evento->link = $this->input->post('link');
            $this->evento->telefone = $this->input->post('telefone');
            $this->evento->descricao = $this->input->post('descricao');
            
            if($this->evento->inserir()){
                echo 'Evento salvo com sucesso!';
            }
            else{
                echo 'Erro ao salvar usuário';
            }
        }
        
        $data['titulo'] = "Evento";
        $data['mensagem'] = 'Hello World!';
        
        $this->template->load('template', 'evento/criar_evento', $data);        
    }
    
    
    public function hello()
    {
        $data['titulo'] = 'Hello';
        $data['mensagem'] = "Sou o action hello e estou no template 'template.php'";
        $this->template->load('template', 'view_hello', $data);
    }    
}