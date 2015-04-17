<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->model('usuario_model');
        $this->load->library('session');
    }
    
    public function index(){
        $session_data = $this->session->userdata('logged_in');
        $dados = array(
            'titulo_pagina' => 'Usuários',
            'page' => 'usuario_list',
            'username' => $session_data['username'],
            'dbdata' => $this->usuario_model->getAll()->result()
        );
        $this->load->view('usuario_view',$dados);
    }

    public function novo(){
        //Validação do Formulário
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required');
        $this->form_validation->set_message('is_unique','Já existe um %s cadastrado no Banco');
        $this->form_validation->set_rules('email', 'E-MAIL', 'trim|required|valid_email|is_unique[usuario.email]');
        $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required');
        $this->form_validation->set_message('matches','O campo %s está diferente do campo %s');
        $this->form_validation->set_rules('txtSenha2', 'REPETE SENHA', 'trim|required|matches[senha]');
        
        if ($this->form_validation->run()==TRUE){
            $data = elements(array('nome', 'email', 'usuario', 'senha'), $this->input->post());
            $data['senha'] = md5($data['senha']);
            $this->usuario_model->insert($data);
        }
        
        
        $session_data = $this->session->userdata('logged_in');
        $dados = array(
            'titulo_pagina' => 'Adicionar Usuários',
            'page' => 'usuario_add',
            'username' => $session_data['username']
        );
        $this->load->view('usuario_view',$dados);
    }
    
    public function editar(){
        //Validação do Formulário
        $this->form_validation->set_rules('nome', 'NOME', 'trim|required');
        //$this->form_validation->set_message('is_unique','Já existe um %s cadastrado no Banco');
        $this->form_validation->set_rules('email', 'E-MAIL', 'trim|required|valid_email|');
        $this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required');
        $this->form_validation->set_message('matches','O campo %s está diferente do campo %s');
        $this->form_validation->set_rules('senha2', 'REPETE SENHA', 'trim|required|matches[senha]');
        
        if ($this->form_validation->run()==TRUE){
            $data = elements(array('nome', 'email', 'usuario', 'senha'), $this->input->post());
            $data['senha'] = md5($data['senha']);
            $this->usuario_model->update($data, array('id'=>$this->input->post('id')));
        }
        
        
        $session_data = $this->session->userdata('logged_in');
        $dados = array(
            'titulo_pagina' => 'Editar Usuários',
            'page' => 'usuario_edit',
            'username' => $session_data['username']
        );
        $this->load->view('usuario_view',$dados);
    }
}

?>

