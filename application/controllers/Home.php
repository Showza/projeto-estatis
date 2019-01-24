<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller {

        public function __construct(){
            parent::__construct();

            $this->load->model('slider_model', 'modelslider');
        }

        public function index()
        {
            $dados['slider'] = $this->modelslider->mostrar_slides();

            //Dados a serem enviados para o Cabeçalho
		    $dados['titulo'] = 'Estatis Jr.';
		    $dados['subtitulo'] = 'Empresa Júnior de Estatística';

            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/depoimentos');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
        }
    }
?>
