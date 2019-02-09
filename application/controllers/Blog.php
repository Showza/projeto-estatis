<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Blog extends CI_Controller {

        public function __construct(){
            parent::__construct();
        }

        public function index($pular=null, $post_por_pagina=null)
        {

            $this->load->library('pagination');
            $this->load->model('blog_model', 'modelblog');

            $config['base_url'] = base_url("blog/");
    		$config['total_rows'] = $this->modelblog->contar();
    		$post_por_pagina = 4;
    		$config['per_page'] = $post_por_pagina;

    		$this->pagination->initialize($config);

    		$dados['links_paginacao'] = $this->pagination->create_links();

    		$dados['postagem'] = $this->modelblog->mostrar_publicacao($pular, $post_por_pagina);

            //Dados a serem enviados para o Cabeçalho
		    $dados['titulo'] = 'Estatis Jr.';
		    $dados['subtitulo'] = 'Blog';

            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/blog');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
        }
    }
?>
