<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos_model extends CI_Model {

	public $id;
	public $descrição;
	
	
	public function descricao(){
		$this->db->select('descricao');
		$this->db->from('sobre_nos');
	}

}
