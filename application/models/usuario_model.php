<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_model extends CI_Model{

    	public function getAll(){
    		return $this->db->get('usuario'); 		
    	}
        
        public function insert($data=NULL){
            if($data != NULL){
                $this->db->insert('usuario', $data);
                $this->session->set_flashdata('add-ok', 'Cadastro Efetuado com Sucesso!');
                redirect('usuario/novo');
            }
        }

    }
    
?>

