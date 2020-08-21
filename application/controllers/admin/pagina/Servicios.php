<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("pagina/Servicios_model");
	}
	public function index()
	{
		$data  = array(
			'servicios' => $this->Servicios_model->getLista(),
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/servicios/list', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function add()
	{
		$data  = array(
			'menu_status' => $this->Servicios_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/servicios/add',$data);
		$this->load->view('admin/layouts/footer');
	}
	public function edit($id)
	{
		$data  = array(
			'servicios' => $this->Servicios_model->getServicios($id),
			'menu_status' => $this->Servicios_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/servicios/edit', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function view($id)
	{
		$data  = array(
			'servicios' => $this->Servicios_model->getServicios($id),
			'menu_status' => $this->Servicios_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/servicios/view', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function store()
	{
		$nombre = $this->input->post("nombre");
		
		$status = $this->input->post("status");
		$descripcion = $this->input->post("descripcion");

		$mi_archivo = 'mi_archivo';
		$config['upload_path'] = 'assets/images/servicios';
		$config['allowed_types'] = 'gif|jpg|png|svg';
		$config['file_name'] = $nombre;
		$config['max_size'] = "50000"; //tamaño en kilobytes
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)) {
			redirect(base_url() . "admin/pagina/servicios/add");
			echo '<script type="text/javascript">
								alert("Agrege un Avatar");
							</script>';
		} else {
			$file_info = $this->upload->data();
			$archivo = $file_info['file_name'];
			$data  = array(
				'nombre' => $nombre,
				'texto' => $descripcion,
				'imagen' => "assets/images/servicios/" . $archivo,
				'idStatus' => $status,							
				'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
				'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
			);
			if ($this->Servicios_model->save($data)) {
				redirect(base_url() . "admin/pagina/servicios");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "admin/pagina/servicios/add");
			}
		}
		//	$file_info = $this->upload->data();
		//$archivo = $file_info['file_name'];




	}
	public function imagenupdate()
    {
        $imagenold = $this->input->post("imagenold");       
        $id = $this->input->post("id");
        $mi_imagen = 'mi_archivo';
		$config['upload_path'] = "assets/images/servicios";
		$config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;
        $config['allowed_types'] = "svg";
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
                'imagen' => "assets/images/servicios/" . $archivo,
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
            );
            if ($this->Servicios_model->update($id, $data)) {
                unlink($imagenold);
                redirect(base_url() . "admin/pagina/servicios");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/pagina/servicios/add");
            }
        }
    }
	public function update($id)
	{
		$nombre = $this->input->post("nombre");	
		$status = $this->input->post("status");
		$descripcion = $this->input->post("descripcion");
		$data = array(
			'nombre' => $nombre,
			'texto' => $descripcion,
			'idStatus' => $status,					
			'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")			
		);
		if ($this->Servicios_model->update($id, $data)) {
			redirect(base_url() . "admin/pagina/servicios/");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "admin/pagina/servicios/edit/" . $id);
		}
	}
	public function cabiarfoto($id)
    {
        $data  = array(
			'nosotros' => $this->Servicios_model->getServicios($id)
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/servicios/editfoto', $data);
        $this->load->view('admin/layouts/footer');
	}
	
	
	
}
