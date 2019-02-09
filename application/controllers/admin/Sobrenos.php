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
	
}
?>
