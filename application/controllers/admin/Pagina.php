<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/index');
		$this->load->view('layouts/footer');
	}

	public function logo()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/logo/list');
		$this->load->view('admin/layouts/footer');
	}

	public function banners()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/banners/list');
		$this->load->view('admin/layouts/footer');
	}

	public function profesores()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('web/profesores');
		$this->load->view('layouts/footer');
	}
}
