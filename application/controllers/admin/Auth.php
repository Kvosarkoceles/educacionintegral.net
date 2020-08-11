<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index(){
		if ($this->session->userdata("login")) {
			redirect(base_url()."admin/Administrador");
		}
		else{
			$this->load->view("admin/login");
		}
	}
	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username);
		if (!$res){
			$this->session->set_flashdata("error","El usuario es incorrecto");
			redirect(base_url()."admin/auth");
		}
		elseif(password_verify($password, $res->password)) {
			$data  = array(
				'id' => $res->id,
				'nombre' => $res->nombre,
				'username' => $res->username,
				'rol' => $res->id_rol,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."admin/Administrador");
		}	
		else{
			$this->session->set_flashdata("error","La contraseña son incorrectos");
			redirect(base_url()."admin/auth");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
