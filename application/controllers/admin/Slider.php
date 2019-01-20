<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$this->load->library('table');
		$this->load->model('slider_model', 'modelslider');
		$dados['slider']= $this->modelslider->mostrar_slides();

		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Slider';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/slider');
		$this->load->view('backend/template/html-footer');
	}

    public function alterar($id){
		$this->load->model('slider_model', 'modelslider');
        $dados['slider'] = $this->modelslider->listar_slides($id);
		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Slider';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/alterar-slider');
		$this->load->view('backend/template/html-footer');
    }

    public function salvar_alteracoes($id){

		$this->load->model('slider_model', 'modelslider');
        $this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo','Título do Slider', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-subtitulo','Subtítulo', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-link','Link', 'required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            $this->alterar($id);
        }
        else {
    		$titulo= $this->input->post('txt-titulo');
    		$subtitulo= $this->input->post('txt-subtitulo');
    		$link= $this->input->post('txt-link');
            $id= $this->input->post('txt-id');
            if($this->modelslider->alterar($titulo, $subtitulo, $link, $id)){
                redirect(base_url('admin/slider'));
            }
            else {
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function nova_foto(){

		$this->load->model('slider_model', 'modelslider');

		$id= $this->input->post('id');
		$config['upload_path']= './assets/frontend/img/slider';
		$config['allowed_types']= 'jpg';
		$config['file_name']= $id.".jpg";
		$config['overwrite']= TRUE;
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}
		else {
			$config2['source_image']= './assets/frontend/img/slider/'.$id.'.jpg';
			$config2['create_tumb']= FALSE;
			$this->load->library('image_lib', $config2);
			if($this->image_lib->resize()){
				if($this->modelslider->alterar_img($id)){
	                redirect(base_url('admin/slider/alterar/'.$id));
	            }
	            else {
	                echo "Houve um erro no sistema!";
	            }
			}
			else {
				echo $this->image_lib->display_errors();
			}
		}
    }

	public function inserir(){
		$this->load->model('slider_model', 'modelslider');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-titulo', 'Título do Slide',
            'required|min_length[3]');
		$this->form_validation->set_rules('txt-subtitulo', 'Subtítulo',
            'required|min_length[3]');
		$this->form_validation->set_rules('txt-link', 'Link',
            'required|min_length[3]');
        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else {
            $titulo= $this->input->post('txt-titulo');
			$subtitulo= $this->input->post('txt-subtitulo');
			$link= $this->input->post('txt-link');
            if($this->modelslider->adicionar($titulo, $subtitulo, $link)){
                redirect(base_url('admin/slider'));
            }
            else {
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function excluir($id){
		$this->load->model('slider_model', 'modelslider');
        if($this->modelslider->excluir($id)){
            redirect(base_url('admin/slider'));
        }
        else {
            echo "Houve um erro no sistema!";
        }
    }

}
