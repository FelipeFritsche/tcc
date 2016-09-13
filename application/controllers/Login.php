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
        $data['msg'] = null;
        if($this->input->post()){
            $this->load->model('usuario_model', 'usuario');
            $usuario_login = $this->usuario->autenticar($this->input->post('usuario'), $this->input->post('senha'));
            
            if(isset($usuario_login->idusuario)){
                //salva os dados na sessao
                //redireciona para o controller principal
                $this->session->set_userdata(array('id' => $usuario_login->idusuario, 'nome' => $usuario_login->nome));
                redirect('home');
            }
            else{
                $data['msg'] = 'Usuário e/ou senha incorretos';
            }
        }
        $this->load->view('login', $data);
    }
}
