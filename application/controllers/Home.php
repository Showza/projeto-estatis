<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller {

        public function __construct(){
            parent::__construct();

            $this->load->model('slider_model', 'modelslider');
            $this->load->model('depoimentos_model','modeldepoimentos');
        }

        public function index()
        {
            $dados['slider'] = $this->modelslider->mostrar_slides();

            $dados['listadepoimentos'] = $this->modeldepoimentos->listar_depoimentos();

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
