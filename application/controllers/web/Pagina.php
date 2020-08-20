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
		$data  = array(			
			'populares' => $this->Pagina_model->getCursosPopulares()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/nosotros',$data);
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

	public function profesor($id)
	{
		$data  = array(
			'profesor' => $this->Profesores_model->getProfesor($id)
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/profesor',$data);
		$this->load->view('layouts/footer');
	}
	public function noticias()
	{
		$data  = array(
			'noticias' => $this->Pagina_model->getNoticias(),
			'utimasNoticias' => $this->Pagina_model->getUltimasNoticias(),
			'tags' => $this->Pagina_model->getTags()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/noticias', $data);
		$this->load->view('layouts/footer');
	}
	public function noticia($id)
	{
		$data  = array(
			'noticia' => $this->Pagina_model->getNoticia($id),
			'utimasNoticias' => $this->Pagina_model->getUltimasNoticias(),
			'tags' => $this->Pagina_model->getTags()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/noticia', $data);
		$this->load->view('layouts/footer');
	}
	public function tags($id)
	{
		$data  = array(
			'noticias' => $this->Pagina_model->getNoticiasTag($id),
			'tags' => $this->Pagina_model->getTags()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/noticias', $data);
		$this->load->view('layouts/footer');
	}

}
