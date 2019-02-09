<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('sobrenos_model','modelsobrenos');
	}

	public function index(){
		$this->load->library('table');

		$dados['descricao'] = $this->modelsobrenos->mostrar_texto();


		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Sobre Nós';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/sobrenos');
		$this->load->view('backend/template/html-footer');
	}
	
	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-missao','missao','required|min_length[3]');
		$this->form_validation->set_rules('txt-visao','visao','required|min_length[3]');
		$this->form_validation->set_rules('txt-valores','valores','required|min_length[3]');

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$missao = $this->input->post('txt-missao');
			$visao = $this->input->post('txt-visao');
			$valores = $this->input->post('txt-valores');
			if($this->modelsobrenos->adicionar($missao, $visao, $valores)){
				redirect(base_url('admin/'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}
}
?>
