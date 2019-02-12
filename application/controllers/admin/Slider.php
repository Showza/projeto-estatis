<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('slider_model', 'modelslider');
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

	public function inserir()
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-titulo','Título','required|min_length[3]');
	   $this->form_validation->set_rules('txt-subtitulo','Subtítulo','required|min_length[3]');
	   $this->form_validation->set_rules('txt-link','Link','required|min_length[3]');
	   $this->form_validation->set_rules('txt-imagem','Imagem');

	   if($this->form_validation->run() == FALSE){
		   $this->index();
	   }
	   else{
		   $titulo = $this->input->post('txt-titulo');
		   $subtitulo = $this->input->post('txt-subtitulo');
		   $link = $this->input->post('txt-link');

		   $imagem =  $_FILES['txt-imagem'];
					   $original_name = $_FILES['txt-imagem']['name'];
					   $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
					   $configuracao['upload_path'] = './assets/frontend/img/slider';
					   $configuracao['allowed_types'] = 'png|jpeg|jpg';
					   $configuracao['file_name'] = $new_name;
					   $this->load->library('upload', $configuracao);
					   $this->upload->initialize($configuracao);

					   if($this->upload->do_upload('txt-imagem')){
						   if($this->modelslider->adicionar($titulo, $subtitulo, $link, $new_name)){
							   redirect(base_url('admin/slider'));
						   }
					   }
					   else{
						   echo "Houve um erro no sistema!";
						   echo $this->upload->display_errors();
					   }
	   }
   }

   public function alterar($id)
   {
	   $this->load->library('table');
	   $dados['slider'] = $this->modelslider->listar_slider($id); // Traz os dados do model noticias_model.
	   $dados['titulo']= 'Painel Administrativo';
	   $dados['subtitulo'] = 'Slider';

	   $this->load->view('backend/template/html-header', $dados);
	   $this->load->view('backend/template/template');
	   $this->load->view('backend/alterar-slider');
	   $this->load->view('backend/template/html-footer');
   }

   public function salvar_alteracoes($id)
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-titulo','Título','required|min_length[3]');
	   $this->form_validation->set_rules('txt-subtitulo','Subtítulo','required|min_length[3]');
	   $this->form_validation->set_rules('txt-link','Link','required|min_length[3]');

	   if($this->form_validation->run() == FALSE){
		   $this->alterar($id);
	   }
	   else{
		   $titulo = $this->input->post('txt-titulo');
		   $subtitulo = $this->input->post('txt-subtitulo');
		   $link = $this->input->post('txt-link');

		   if($this->modelslider->alterar($id, $titulo, $subtitulo, $link)){
			   redirect(base_url('admin/slider'));
		   }
		   else{
			   echo "Houve um erro no sistema!";
		   }
	   }
   }

   public function remover($id, $imagem=null)
   {
	   $caminhoArquivo = './assets/frontend/img/slider/'.$imagem;
	   if (!unlink($caminhoArquivo)){
		   echo 'Não foi possível excluir o arquivo antigo';
	   }
	   if($this->modelslider->remover($id,$imagem)){
		   redirect(base_url('admin/slider'));
	   }
	   else{
		   echo "Houve um erro no sistema!";
	   }

   }

   public function nova_foto($id, $imagem){
	   /*Exclusão do arquivo antigo*/
	   $this->load->helper('file');

	   $caminhoArquivo = './assets/frontend/img/slider/'.$imagem;

	   $extensoes_permitidas = array('.png', '.jpeg', '.jpg');
	   // Faz a verificação da extensão do arquivo enviado
	   $extensao = strrchr($_FILES['txt-imagem']['name'], '.');

	   if(in_array($extensao, $extensoes_permitidas) == true)
	   {
		   if (!unlink($caminhoArquivo)){
			   echo 'Não foi possível excluir o arquivo antigo';
		   }
		   $imagem = $_FILES['txt-imagem'];
		   $original_name = $_FILES['txt-imagem']['name'];
		   $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
		   $configuracao['upload_path'] = './assets/frontend/img/slider';
		   $configuracao['allowed_types'] = 'png|jpeg|jpg';
		   $configuracao['file_name'] = $new_name;
		   $configuracao['overwrite'] = TRUE;
		   $this->load->library('upload', $configuracao);
		   $this->upload->overwrite = true;
		   $this->upload->initialize($configuracao);
		   if($this->upload->do_upload('txt-imagem')){
			   if($this->modelslider->nova_foto($id, $new_name)){
				   redirect(base_url('admin/slider/alterar/'.$id));
			   }
		   }else{
			   echo "Houve um erro no sistema!";
			   echo $this->upload->display_errors();
		   }
	   }
	   else{
		   echo "Selecione apenas arquivos de imagem !";
	   }
   }
}
