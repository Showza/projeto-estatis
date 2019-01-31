<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos_model extends CI_Model {

	public $id;
	public $descricao;
	

	public function mostrar_texto(){
		$this->db->from('sobre_nos');
        return $this->db->get()->result();
	}

	public function alterar($descricao){
        $dados['descricao'] = $descricao;
        return $this->db->update('sobre_nos', $dados);
    }    
}
