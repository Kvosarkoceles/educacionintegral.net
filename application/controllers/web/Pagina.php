<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagina extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();	
		$this->load->model("pagina/Cursos_model");
		$this->load->model("pagina/Profesores_model");
		$this->load->model("pagina/Pagina_model");
	}
	public function index()
	{
		$data  = array(
			'sliders' => $this->Pagina_model->getSliders(),
			'populares' => $this->Pagina_model->getCursosPopulares()
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
		$data  = array(
			'cursos' => $this->Cursos_model->getList()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/cursos',$data);
		$this->load->view('layouts/footer');
	}

	public function curso($id)
	{
		$data  = array(
			'curso' => $this->Cursos_model->getCurso($id)
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/curso',$data); 
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
