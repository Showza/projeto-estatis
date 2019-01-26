<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->model('quemsomos_model','modelquemsomos');
		$dados['descricao'] = $this->modelquemsomos->mostrar_texto();
			
		$dados['titulo'] = 'Estatis Jr.';
		$dados['subtitulo'] = 'Quem Somos';

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/quemsomos');
		$this->load->view('frontend/template/footer');
	}
}
