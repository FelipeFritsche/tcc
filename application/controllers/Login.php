<?php
/**
 * Description of Cadastro
 *
 * @author 130266
 */
class Login extends CI_Controller {   
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        if($this->input->post()){
            $this->load->model('Usuario_model', 'usuario');
            $this->usuario->usuario = $this->input->post('usuario');
            $this->usuario->senha = $this->input->post('senha');
            if($this->usuario->login($this->input->post('usuario'),$this->input->post('senha'))){
                echo 'Evento salvo com sucesso!';
            }
            else{
                echo 'Erro ao salvar usuário';
            }
        }
        $this->load->view('login');
    }
    
    
    public function hello()
    {
        $data['titulo'] = 'Hello';
        $data['mensagem'] = "Sou o action hello e estou no template 'template.php'";
        $this->template->load('template', 'view_hello', $data);
    }    
}