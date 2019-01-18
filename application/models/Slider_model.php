<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {

    public $id;
    public $imagem;
    public $titulo;
    public $subtitulo;
    public $link;

	public function __construct(){
		parent::__construct();
	}

    public function mostrar_slides(){
        $this->db->select('id, imagem, titulo, subtitulo, link');
        $this->db->from('slider');
        return $this->db->get()->result();
    }
}
