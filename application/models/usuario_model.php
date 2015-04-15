<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_model extends CI_Model{

    	public function getAll(){
    		return $this->db->get('usuario'); 		
    	}

    }
    
?>

