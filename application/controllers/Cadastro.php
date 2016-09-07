<?php
/**
 * Description of Cadastro
 *
 * @author 130266
 */
class Cadastro extends CI_Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        /*
        if($this->input->post()){
            $this->load->model('usuario_model', 'usuario');
            $this->usuario->nome = $this->input->post('nome');
            $this->usuario->email = $this->input->post('email');
            $this->usuario->endereco = $this->input->post('endereco');
            
            
            
            if($this->usuario->inserir()){
                echo 'Usuario salvo com sucesso!';
            }
            else{
                echo 'Erro ao salvar usuário';
            }
        }
        */
        $data['titulo'] = "Cadastro";
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
