<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postagem extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index($id=null, $slug=null)
	{
        if ( !$id )
        {
            redirect(base_url('blog'));;
        }
		$this->load->model('blog_model', 'modelblog');
		$dados['postagem'] = $this->modelblog->publicacao($id);

		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Publicação';
		$dados['subtitulo'] = '';
		$dados['subtitulodb'] = $this->modelblog->listar_titulo($id);

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/postagem');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}

}
