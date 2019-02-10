<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('servicos_model','modelservicos'); // Acessoa ao model.
	}

	public function index()
	{
		$this->load->library('table');
		//Dados a serem enviados para o Cabeçalho
		$dados['servicos'] = $this->modelservicos->listar_servicos(); // Traz os dados do model servicos_model.
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Projetos e Serviços';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/servicos');
		$this->load->view('backend/template/html-footer');
	}

	 public function inserir()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-modalidade','Modalidade',
            'required');
        $this->form_validation->set_rules('txt-nome','Nome',
            'required|min_length[3]');
        $this->form_validation->set_rules('txt-descricao','Descricao',
            'required|min_length[10]');
        $this->form_validation->set_rules('txt-imagem','Imagem');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $modalidade = $this->input->post('txt-modalidade');
            $nome = $this->input->post('txt-nome');
            $descricao = $this->input->post('txt-descricao');

            $imagem =  $_FILES['txt-imagem'];
						$original_name = $_FILES['txt-imagem']['name'];
						$new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
						$configuracao['upload_path'] = './assets/arquivos/fotos';
						$configuracao['allowed_types'] = 'png|jpeg|jpg';
						$configuracao['file_name'] = $new_name;
						$this->load->library('upload', $configuracao);
						$this->upload->initialize($configuracao);

						if($this->upload->do_upload('txt-imagem')){
							if($this->modelservicos->adicionar($nome, $descricao, $new_name, $modalidade)){
	                            redirect(base_url('admin/servicos'));
	                        }
						}
                        else{
                            echo "Houve um erro no sistema!";
							echo $this->upload->display_errors();
                        }
        }
    }

    public function pagina_alterar($id)
    {
        $this->load->library('table');
        $dados['servicos'] = $this->modelservicos->listar_servico($id); // Traz os dados do model noticias_model.
		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Projetos e Serviços';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_servicos');
		$this->load->view('backend/template/html-footer');
    }

    public function alterar($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-modalidade','Modalidade',
            'required');
        $this->form_validation->set_rules('txt-nome','Nome',
            'required|min_length[3]');
        $this->form_validation->set_rules('txt-descricao','Descricao',
            'required|min_length[10]');
        $this->form_validation->set_rules('txt-imagem','Imagem');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $modalidade = $this->input->post('txt-modalidade');
            $nome = $this->input->post('txt-nome');
            $descricao = $this->input->post('txt-descricao');

            if($this->modelservicos->alterar($id, $nome, $descricao, $modalidade)){
                redirect(base_url('admin/servicos'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function remover($id, $imagem)
    {
    	$caminhoArquivo = './assets/arquivos/fotos/'. $imagem;
        if (!unlink($caminhoArquivo)){
            echo 'Não foi possível excluir o arquivo antigo';
        }
        if($this->modelservicos->remover($id,$imagem)){
            redirect(base_url('admin/servicos'));
        }
        else{
            echo "Houve um erro no sistema!";
        }

    }

    public function pagina_foto($id)
    {
    	$this->load->library('table');
        $dados['servicos'] = $this->modelservicos->listar_servicos($id); // Traz os dados do model noticias_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Projetos e Serviços';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_foto');
		$this->load->view('backend/template/html-footer');
    }

    public function nova_foto($id, $imagem){
        /*Exclusão do arquivo antigo*/
        $this->load->helper('file');

       $caminhoArquivo = './assets/arquivos/fotos/'. $imagem;

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
            $configuracao['upload_path'] = './assets/arquivos/fotos';
            $configuracao['allowed_types'] = 'png|jpeg|jpg';
            $configuracao['file_name'] = $new_name;
            $configuracao['overwrite'] = TRUE;
            $this->load->library('upload', $configuracao);
            $this->upload->overwrite = true;
            $this->upload->initialize($configuracao);
            if($this->upload->do_upload('txt-imagem')){
                if($this->modelservicos->nova_foto($id, $new_name)){
                    redirect(base_url('admin/servicos'));
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
?>
