<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Blog extends CI_Controller {

        public function __construct(){
            parent::__construct();
        }

        public function index()
        {

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
