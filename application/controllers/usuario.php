<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
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
        $session_data = $this->session->userdata('logged_in');
        $dados = array(
            'titulo_pagina' => 'Adicionar Usuários',
            'page' => 'usuario_add',
            'username' => $session_data['username']
        );
        $this->load->view('usuario_view',$dados);
    }
}

?>

