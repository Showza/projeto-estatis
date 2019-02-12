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

    public function listar_slider($id){
        $this->db->select('id, titulo, subtitulo, link, imagem');
        $this->db->from('slider');
        $this->db->where('md5(id)',$id);
        return $this->db->get()->result();
    }

	public function adicionar($titulo, $subtitulo, $link, $imagem){
        $dados['titulo'] = $titulo;
        $dados['subtitulo'] = $subtitulo;
        $dados['link'] = $link;
        $dados['imagem'] = $imagem;

        return $this->db->insert('slider',$dados);
    }

    public function alterar($id, $titulo, $subtitulo, $link){
        $dados['titulo'] = $titulo;
        $dados['subtitulo'] = $subtitulo;
        $dados['link'] = $link;

        $this->db->where('id',$id);
        return $this->db->update('slider',$dados);
    }

    public function remover($id, $imagem){
        $this->db->where('md5(id)',$id);
        return $this->db->delete('slider');
    }

    public function nova_foto($id, $imagem){
    	$dados['imagem'] = $imagem;
      	$this->db->where('md5(id)',$id);
      	return $this->db->update('slider',$dados);
    }
}
