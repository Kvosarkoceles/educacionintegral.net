<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usuarios extends CI_Controller
{
	/* private $permisos; */
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Usuarios_model");
		$this->load->library('form_validation');
		$this->load->library('encryption');
	}
	public function index()
	{
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(),
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/usuarios/list", $data);
		$this->load->view("admin/layouts/footer");
	}
	public function add()
	{
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/usuarios/add", $data);
		$this->load->view("admin/layouts/footer");
	}
	public function store()
	{
		$nombre = $this->input->post("nombre");
		$username = $this->input->post("nick");
		$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
		$rol = $this->input->post("rol");

		$mi_archivo = 'mi_archivo';
		$config['upload_path'] = 'assets/images/usuarios';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nombre . $username;
		$config['max_size'] = "50000"; //tamaño en kilobytes
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)) {
			echo '<script type="text/javascript">
								alert("Agrege una imagen");
							</script>';
			redirect(base_url() . "admin/usuarios/add");
		} else {
			$file_info = $this->upload->data();
			$archivo = $file_info['file_name'];
			$data  = array(
				'nombre' => $nombre,
				'username' => $username,
				'password' => $password,
				'avatar' => "assets/images/usuarios/" . $archivo,
				'id_rol' => $rol,
				'id_estado' => "1",
				'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
				'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d"),
			);
			if ($this->Usuarios_model->save($data)) {
				redirect(base_url() . "admin/usuarios");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "admin/usuarios/add");
			}
		}
	}

	public function update($id){		
		$nombre = $this->input->post("nombre");
		$username = $this->input->post("nick");		
		$rol = $this->input->post("rol");
		$status = $this->input->post("status");
		
		$data  = array(
			'nombre' => $nombre,
			'username' => $username,
			'id_rol' => $rol,
			'id_estado' => $status,
			
		);
		if ($this->Usuarios_model->update($id, $data)) {
			redirect(base_url() . "admin/usuarios");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "admin/usuarios/edit" . $id);
		}

	}
	public function view()
	{
		$idusuario = $this->input->post("idusuario");
		$data = array(
			"usuario" => $this->Usuarios_model->getUsuario($idusuario),
		);
		$this->load->view("admin/usuarios/view", $data);
	}
	public function edit($id)
	{
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'menu_status' => $this->Usuarios_model->getMenuStatus(),
			'usuario' => $this->Usuarios_model->getUsuario($id)
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/usuarios/edit", $data);
		$this->load->view("admin/layouts/footer");
	}
	public function delete($id)
	{
		$data  = array(
			'id_estado' => "0",
		);
		$this->Usuarios_model->update($id, $data);
		redirect(base_url() . "administrador/usuarios");
	}
	public function configuracion($id)
	{
		$data  = array(			
			'usuario' => $this->Usuarios_model->getUsuario($id)			
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/usuarios/configuracion", $data);
		$this->load->view("admin/layouts/footer");
	}

	public function cabiarfoto($id)
	{
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id)
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/usuarios/editfoto', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function imagenupdate()
	{
		$imagenold = $this->input->post("imagenold");
		$nombre = $this->input->post("nombre");
		$username = $this->input->post("nick");
		$id = $this->input->post("id");
		unlink($imagenold);
		$mi_imagen = 'mi_archivo';
		$config['upload_path'] = "assets/images/usuarios";
		$config['overwrite'] = "TRUE";
		$config['file_name'] = $nombre . $username;
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_imagen)) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			echo $this->upload->display_errors();
			return;
		} else {
			$data['uploadSuccess'] = $this->upload->data();
			$file_info = $this->upload->data();
			$archivo = $file_info['file_name'];
			$data  = array(
				'avatar' => "assets/images/usuarios/" . $archivo,
				'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
			);
			if ($this->Usuarios_model->update($id, $data)) {
				redirect(base_url() . "admin/usuarios");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "admin/usuarios/add");
			}
		}
	}
	public function nickUpdate()
	{
		$idusuario = $this->input->post("idusuario");
		$nick = $this->input->post("nick");
		$this->form_validation->set_rules("nick", "Nick de usuario", "required");
		if ($this->form_validation->run()) {
			$data  = array(
				'username' => $nick,
			);
			if ($this->Usuarios_model->update($idusuario, $data)) {
				redirect(base_url() . "auth/logout");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "administrador/usuarios/configuracion" . $idusuario);
			}
		} else {
			$this->edit($idusuario);
		}
	}
	public function password($id)
	{
		$data  = array(			
			'usuario' => $this->Usuarios_model->getUsuario($id)		
		);
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/usuarios/password", $data);
		$this->load->view("admin/layouts/footer");
	}
	public function passwordUpdate($id)
	{
		$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
		$data  = array(
			'password' => $password
		);

		if ($this->Usuarios_model->update($id, $data)) {
			redirect(base_url() . "admin/auth/logout");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "admin/usuarios/password" . $id);
		}
	
	}
	public function passwordreset($id)
	{
		$password = password_hash("integra", PASSWORD_DEFAULT);
		$data  = array(
			'password' => $password
		);

		if ($this->Usuarios_model->update($id, $data)) {
			redirect(base_url() . "admin/usuarios");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "admin/usuarios/password" . $id);
		}
	
	}
}
