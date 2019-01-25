<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('quemsomos_model','modelquemsomos');
	}

	public function index()
	{
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/quemsomos');
		$this->load->view('frontend/template/footer');
	}
}
