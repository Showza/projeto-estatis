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

	public function alterar($id){
		$this->load->library('table');
        $dados['descricao'] = $this->modelsobrenos->mostrar_texto($id);

		$dados['autor']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Sobre nos';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/alterar-sobrenos');
		$this->load->view('backend/template/html-footer');
	}

	public function salvar_alteracoes(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-descricao','Descricao do sobrenos','required|min_length[10]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$descricao = $this->input->post('txt-descricao');
			if($this->modelsobrenos->alterar($descricao)){
				redirect(base_url('admin/sobrenos'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}
	/*
	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-autor','Autor do depoimento','required|min_length[3]|is_unique[depoimento.autor]');
		$this->form_validation->set_rules('txt-descricao','Descricao do depoimento','required|min_length[10]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$autor = $this->input->post('txt-autor');
			$descricao = $this->input->post('txt-descricao');
			$empresa = $this->input->post('txt-empresa');
			if($this->modeldepoimentos->adicionar($autor, $descricao, $empresa)){
				redirect(base_url('admin/depoimentos'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}

	public function excluir($id){
		if($this->modeldepoimentos->excluir($id)){
				redirect(base_url('admin/depoimentos'));
			}else{
				echo "Houve um erro no sistema!";
			}
	}

	public function alterar($id){
		$this->load->library('table');
        $dados['listadepoimentos'] = $this->modeldepoimentos->listar_depoimento($id);

		$dados['autor']= 'Painel Administrativo';
        $dados['subtitulo'] = 'depoimentos';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/alterar-depoimentos');
		$this->load->view('backend/template/html-footer');
	}

	public function salvar_alteracoes(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-autor','Autor do depoimento','required|min_length[3]');
		$this->form_validation->set_rules('txt-descricao','Descricao do depoimento','required|min_length[10]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$id = $this->input->post('txt-id');
			$autor = $this->input->post('txt-autor');
			$descricao = $this->input->post('txt-descricao');
			$empresa = $this->input->post('txt-empresa');

			if($this->modeldepoimentos->alterar($id, $autor, $descricao, $empresa)){
				redirect(base_url('admin/depoimentos'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}
	*/
}
?>
