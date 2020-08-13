<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		/* 	if (!$this->session->userdata("login")) {
			redirect(base_url());
		} */
		$this->load->model("pagina/Slider_model");
	}

	public function index()
	{
		$data  = array(
			'sliders' => $this->Slider_model->getSliders()
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
		$this->load->view('web/index');
		$this->load->view('layouts/footer');
		/* $this->load->view('welcome_message'); */
	}
}
