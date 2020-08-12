<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
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
			'sliders' => $this->Slider_model->getSliders(),
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/list',$data);
		$this->load->view('admin/layouts/footer');
	}

	public function add()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/add');
		$this->load->view('admin/layouts/footer');
	}

	public function edit()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/edit');
		$this->load->view('admin/layouts/footer');
	}

	public function imagenStore($id)
	{
		unlink('assets/images/logo.png');
		$mi_imagen = 'mi_archivo';
		$config['upload_path'] = "assets/images";
		$config['overwrite'] = "TRUE";
		$config['file_name'] = "logo";		
		$config['allowed_types'] = "png";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_imagen)) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			return;
		}
		$data['uploadSuccess'] = $this->upload->data();
	}
}
