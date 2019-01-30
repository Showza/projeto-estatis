<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->model('sobrenos_model','modelsobrenos');
		$dados['descricao'] = $this->modelsobrenos->mostrar_texto();
			
		$dados['titulo'] = 'Estatis Jr.';
		$dados['subtitulo'] = 'Quem Somos';

		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/sobrenos');
		$this->load->view('frontend/template/footer');
	}
}
