<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("pagina/Slider_model");
	}
	public function index()
	{
		$data  = array(
			'sliders' => $this->Slider_model->getSliders(),
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/list', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function add()
	{
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/add');
		$this->load->view('admin/layouts/footer');
	}

	public function edit($id)
	{
		$data  = array(
			'slider' => $this->Slider_model->getSlider($id),
			'menu_status' => $this->Slider_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/edit', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function view($id)
	{
		$data  = array(
			'slider' => $this->Slider_model->getSlider($id),
			'menu_status' => $this->Slider_model->getMenuStatus()
		);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/layouts/aside');
		$this->load->view('admin/pagina/slider/view', $data);
		$this->load->view('admin/layouts/footer');
	}
	public function store()
	{
		$nombre = $this->input->post("nombre");
		$slogan = $this->input->post("slogan");
		$status = $this->input->post("status");
		$descripcion = $this->input->post("descripcion");


		$mi_archivo = 'mi_archivo';
		$config['upload_path'] = 'assets/images/sliders';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nombre;
		$config['max_size'] = "50000"; //tamaño en kilobytes
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)) {
			redirect(base_url() . "admin/pagina/slider/add");
			echo '<script type="text/javascript">
								alert("Agrege un Avatar");
							</script>';
		} else {
			$file_info = $this->upload->data();
			$archivo = $file_info['file_name'];
			$data  = array(
				'nombre' => $nombre,
				'slogan' => $slogan,
				'idStatus' => $status,
				'descripcion' => $descripcion,
				'imagen' => "assets/images/sliders/" . $archivo,
				'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
				'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
			);
			if ($this->Slider_model->save($data)) {
				redirect(base_url() . "admin/pagina/slider");
			} else {
				$this->session->set_flashdata("error", "No se pudo guardar la informacion");
				redirect(base_url() . "admin/pagina/slider/add");
			}
		}
		//	$file_info = $this->upload->data();
		//$archivo = $file_info['file_name'];




	}

	public function cabiarfoto($id)
    {
        $data  = array(
            'noticia' => $this->Slider_model->getSlider($id)
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/slider/editfoto', $data);
        $this->load->view('admin/layouts/footer');
    }
	
	public function imagenupdate()
    {
        $imagenold = $this->input->post("imagenold");        
        $id = $this->input->post("id");       
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/sliders";
        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = "50000";
        $config['max_width'] = "1920";
        $config['max_height'] = "1067";
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
                'imagen' => "assets/images/sliders/" . $archivo,
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
            );
            if ($this->Slider_model->update($id, $data)) {
                unlink($imagenold);
                redirect(base_url() . "admin/pagina/slider/");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/pagina/slider/add");
            }
        }
    }
	public function update($id)
	{
		$nombre = $this->input->post("nombre");
		$slogan = $this->input->post("slogan");
		$status = $this->input->post("status");
		$descripcion = $this->input->post("descripcion");
		$data = array(
			'nombre' => $nombre,
			'slogan' => $slogan,
			'idStatus' => $status,
			'descripcion' => $descripcion,			
			'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")			
		);
		if ($this->Slider_model->update($id, $data)) {
			redirect(base_url() . "admin/pagina/slider/");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "admin/pagina/slider/edit/" . $id);
		}
	}
}
