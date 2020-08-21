<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
	/* 	if (!$this->session->userdata("login")) {
			redirect(base_url());
		} */
		$this->load->model("pagina/Pagina_model");
	}

	public function index()
	{



			$data  = array(
			'sliders' => $this->Pagina_model->getSliders(),
			'populares' => $this->Pagina_model->getCursosPopulares(),
			'servicios' => $this->Pagina_model->getServicios()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/index', $data);
		$this->load->view('layouts/footer');
	}
}
