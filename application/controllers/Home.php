<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller {

        public function __construct(){
            parent::__construct();
        }

        public function index( )
        {

            //Dados a serem enviados para o Cabeçalho
    		$dados['titulo'] = 'Estatis Jr.';
    		$dados['subtitulo'] = 'Empresa Júnior de Estatística';

            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/home');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
        }
    }
?>
