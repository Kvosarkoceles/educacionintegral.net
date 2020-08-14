<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profesores extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }
        $this->load->model("pagina/Profesores_model");
    }
    public function index()
    {
        $data  = array(
            'profesores' => $this->Profesores_model->getProfesores(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/profesores/profesores/list', $data);
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
            'profesor' => $this->Profesores_model->getProfesor($id),
            'menu_status' => $this->Profesores_model->getMenuStatus()
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/profesores/profesores/edit', $data);
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

    public function update($id)
    {
        $nombre = $this->input->post("nombre");
        $segundoNombre = $this->input->post("segundoNombre");
        $primerApellido = $this->input->post("primerApellido");
        $segundoApellido = $this->input->post("segundoApellido");
        $carrera = $this->input->post("carrera");
        $status = $this->input->post("status");
      
        $data = array(
            'nombre' => $nombre, 
            'segundoNombre' => $segundoNombre,
            'primerApellido' => $primerApellido,  
            'segundoApellido' => $segundoApellido,      
            'carrera' => $carrera,      
            'idStatus' => $status,       
            'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
        );
        if ($this->Profesores_model->update($id, $data)) {
            redirect(base_url() . "admin/profesores/profesores/");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "admin/profesores/profesores/edit/" . $id);
        }
    }
}
