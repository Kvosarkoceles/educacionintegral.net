<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagina extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		} 
		$this->load->model("pagina/Slider_model");
		$this->load->model("pagina/Profesores_model");
	}
	public function index()
	{
		$data  = array(
			'sliders' => $this->Slider_model->getList()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/index',$data);
		$this->load->view('layouts/footer');
	}

	public function nosotros()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/nosotros');
		$this->load->view('layouts/footer');
	}

	public function cursos()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/cursos');
		$this->load->view('layouts/footer');
	}

	public function profesores()
	{
		$data  = array(
			'profesores' => $this->Profesores_model->getList()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/profesores',$data);
		$this->load->view('layouts/footer');
	}
	public function noticias()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/noticias');
		$this->load->view('layouts/footer');
	}
}
