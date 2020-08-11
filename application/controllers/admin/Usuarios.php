<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
	/* 	if (!$this->session->userdata("login")) {
			redirect(base_url());
		} */
		$this->load->model("Usuarios_model");
	 	$this->load->library('form_validation');
		$this->load->library('encryption');
	}
	public function index(){
		$data  = array(
		'usuarios' => $this->Usuarios_model->getUsuarios(),
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside"); 
		$this->load->view("admin/usuarios/list2",$data);
	 	$this->load->view("admin/layouts/footer"); 
	}
	public function add(){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
		);
	/* 	$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside"); */
		$this->load->view("admin/usuarios/add",$data);
		/* $this->load->view("admin/layouts/footer"); */
	}
	public function store(){
		$nombres = $this->input->post("nombres");
		$username = $this->input->post("nick");
		$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
		$rol = $this->input->post("rol");
		$this->form_validation->set_rules("nombres","Nombres","required");
		$this->form_validation->set_rules("nick","Usuario","required");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("rol","rol","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'username' => $username,
				'password' => $password,
				'id_rol' => $rol,
				'id_estado' => "1"
			);
			if ($this->Usuarios_model->save($data)) {
				redirect(base_url()."admin/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."admin/usuarios/add");
			}
			}else {
				$this->add();
			}
		}
	public function update(){
		$idusuario = $this->input->post("idusuario");
		$nombres = $this->input->post("nombres");
		$username = $this->input->post("nick");
		$rol = $this->input->post("rol");
		$this->form_validation->set_rules("nombres","Nombres","required");
		$this->form_validation->set_rules("nick","Usuario","required");
		$this->form_validation->set_rules("rol","rol","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'username' => $username,
				'id_rol' => $rol
			);
			if ($this->Usuarios_model->update($idusuario,$data)) {
				redirect(base_url()."administrador/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/usuarios/edit".$idusuario);
			}
			}else {
			$this->edit($idusuario);
		}
	}
	public function view(){
		$idusuario = $this ->input ->post("idusuario");
		$data = array(
			"usuario" => $this->Usuarios_model->getUsuario($idusuario),
		);
		$this->load->view("admin/usuarios/view",$data);
	}
	public function edit($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'usuario' => $this->Usuarios_model->getUsuario($id)
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("admin/layouts/footer");
	}
	public function delete($id){
		$data  = array(
			'id_estado' => "0",
		);
		$this->Usuarios_model->update($id,$data);
		redirect(base_url()."administrador/usuarios");
	}
	public function configuracion($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'usuario' => $this->Usuarios_model->getUsuario($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/configuracion",$data);
		$this->load->view("layouts/footer");
	}
	public function nickUpdate(){
		$idusuario = $this->input->post("idusuario");
		$nick = $this->input->post("nick");
		$this->form_validation->set_rules("nick","Nick de usuario","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'username' => $nick,
			);
			if ($this->Usuarios_model->update($idusuario,$data)) {
				redirect(base_url()."auth/logout");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/usuarios/configuracion".$idusuario);
			}
		}
		else{
			$this->edit($idusuario);
		}
	}
	public function password($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'usuario' => $this->Usuarios_model->getUsuario($id),
			'estadoContraseña'=>"",
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/password",$data);
		$this->load->view("layouts/footer");
	}
	public function passwordUpdate($id){
		$idusuario = $this->input->post("idusuario");
		$password_old = sha1($this->input->post("password_old"));
		$password_Nuevo = sha1($this->input->post("password_Nuevo"));
		$password = sha1($this->input->post("password_Confirmacion"));
		$this->form_validation->set_rules("password_old","password","required");
		$this->form_validation->set_rules("password_Nuevo","Password nuevo","required|matches[password_Confirmacion]");
		 $this->form_validation->set_rules('password_Confirmacion', 'Confirmar Password', 'required');
		//$this->form_validation->set_rules("password","Password","required");
		//$this->form_validation->set_rules("rol","rol","required");
		if ($this->form_validation->run()) {
			$passwordactual= $this->Usuarios_model->getUsuario($idusuario)->password;
			if ($password_old === $passwordactual) {



				$data  = array(
					'password' => $password_Nuevo
				);

				if ($this->Usuarios_model->update($idusuario,$data)) {
					redirect(base_url()."auth/logout");
				}
				else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."administrador/usuarios/edit".$idusuario);
				}




		}else {
			$data  = array(
				'roles' => $this->Usuarios_model->getRoles(),
				'usuario' => $this->Usuarios_model->getUsuario($id),
				'estadoContraseña'=>"Contraseña invalida",
			);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("admin/usuarios/password",$data);
			$this->load->view("layouts/footer");
		}


		}else {
			$this->password($idusuario);
		}
	}
}
