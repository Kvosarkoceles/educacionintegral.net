<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nosotros extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("pagina/Nosotros_model");
	}
	public function index()
	{
		$data  = array(
			'nosotros' => $this->Nosotros_model->getLista(),
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/nosotros/list', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function add()
	{
		$data  = array(
			'menu_status' => $this->Nosotros_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/nosotros/add',$data);
		$this->load->view('admin/layouts/footer');
	}
	public function edit($id)
	{
		$data  = array(
			'nosotros' => $this->Nosotros_model->getNosotros($id),
			'menu_status' => $this->Nosotros_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/nosotros/edit', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function view($id)
	{
		$data  = array(
			'nosotros' => $this->Nosotros_model->getNosotros($id),
			'menu_status' => $this->Nosotros_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/nosotros/view', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function store()
	{
		$nombre = $this->input->post("nombre");
		
		$status = $this->input->post("status");
		$descripcion = $this->input->post("descripcion");


		$mi_archivo = 'mi_archivo';
		$config['upload_path'] = 'assets/images/nosotros';
		$config['allowed_types'] = 'gif|jpg|png|svg';
		$config['file_name'] = $nombre;
		$config['max_size'] = "50000"; //tamaño en kilobytes
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)) {
			redirect(base_url() . "admin/pagina/nosotros/add");
			echo '<script type="text/javascript">
								alert("Agrege un Avatar");
							</script>';
		} else {
			$file_info = $this->upload->data();
			$archivo = $file_info['file_name'];
			$data  = array(
				'nombre' => $nombre,
				'texto' => $descripcion,
				'idStatus' => $status,				
				'imagen' => "assets/images/nosotros/" . $archivo,
				'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
				'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
			);
			if ($this->Nosotros_model->save($data)) {
				redirect(base_url() . "admin/pagina/nosotros");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "admin/pagina/nosotros/add");
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
		$config['upload_path'] = "assets/images/nosotros";
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
                'imagen' => "assets/images/nosotros/" . $archivo,
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
            );
            if ($this->Nosotros_model->update($id, $data)) {
                unlink($imagenold);
                redirect(base_url() . "admin/pagina/nosotros");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/pagina/nosotros/add");
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
		if ($this->Nosotros_model->update($id, $data)) {
			redirect(base_url() . "admin/pagina/nosotros/");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "admin/pagina/nosotros/edit/" . $id);
		}
	}
	public function cabiarfoto($id)
    {
        $data  = array(
			'nosotros' => $this->Nosotros_model->getNosotros($id)
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/nosotros/editfoto', $data);
        $this->load->view('admin/layouts/footer');
	}
	public function portada()
    {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/nosotros/portada');
        $this->load->view('admin/layouts/footer');
	}
	
	public function portadaupdate()
    {
      
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/nosotros";
        $config['overwrite'] = TRUE;
        $config['file_name'] = "background";
        $config['allowed_types'] = "jpg";
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
        redirect(base_url() . "admin/pagina/nosotros/portada");
    }
}
