<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos_model extends CI_Model {

	public $id;
	public $descricao;
	

	public function mostrar_texto(){
		$this->db->select('descricao');
		$this->db->from('sobre_nos');
        return $this->db->get()->result();
	}

}
