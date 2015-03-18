<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller{
        
        
        
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->load->model('login_model', '');
            $this->load->library('session');
        }
        
        public function index(){
            $error['loginerror'] = FALSE;
            $this->load->view('login_view', $error);
        }
        
        public function valida(){
            $this->form_validation->set_rules('txtLogin','Login', 'trim|required');
            $this->form_validation->set_rules('txtSenha','Senha', 'trim|required');
            
            if($this->form_validation->run()==TRUE){
                
                $usuario = $this->input->post('txtLogin');
                $senha = $this->input->post('txtSenha');
                
                //Executa Consulta ao Banco de Dados
                $result = $this->login_model->login($usuario, $senha);
                
                //Verifica Retorno
                if($result){
                    $sess_array = array();
                    foreach ($result as $row){
                        $sess_array = array(
                            'id' => $row->id,
                            'username' => $row->usuario
                        );
                        $this->session->set_userdata('logged_in', $sess_array);
                    }
                    redirect('home', 'refresh');
                } else {
                    //TODO retornar caso de erro
                    $error['loginerror'] = TRUE;
                    $this->load->view('login_view', $error);
                }
                
            } else {
                $this->load->view('login_view');
            }
        }
    }
?>