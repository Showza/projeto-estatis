<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos_model extends CI_Model {

	public $missao;
	public $visao;
	public $valores;
	

	public function mostrar_texto(){
		$this->db->from('sobre_nos');
        return $this->db->get()->result();
	}

	public function adicionar($missao, $visao, $valores){
        $dados['missao'] = $missao;
        $dados['visao'] = $visao;
        $dados['valores'] = $valores;

        return $this->db->update('sobre_nos',$dados);
    }  
}
