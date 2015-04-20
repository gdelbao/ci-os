<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_model extends CI_Model{

    	public function getAll(){
    		return $this->db->get('usuario'); 		
    	}
        
            public function getById($id=NULL) {
                if($id != NULL){
                    return $this->db->get_where('usuario', array('id' => $id), 1);
                } else {
                    return FALSE;
                }
            }
        
        public function insert($data=NULL){
            if($data != NULL){
                $this->db->insert('usuario', $data);
                $this->session->set_flashdata('add-ok', 'Cadastro Efetuado com Sucesso!');
                redirect('usuario/novo');
            }
        }
        
        public function update($dados=NULL, $condicao=NULL){
            if($dados != NULL && $condicao != NULL){
                $this->db->update('usuario', $dados, $condicao);
                $this->session->set_flashdata('update-ok', 'Usuário Alterado com Sucesso!');
                redirect(current_url());
            }
        }
        
        public function delete($condicao=NULL){
            if($condicao != NULL){
                $this->db->delete('usuario', $condicao);
                $this->session->flashdata('delete-ok', 'Usuário Excluido com Sucesso!');
                redirect('usuario');
            }
        }

    }
    
?>

