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
        $this->load->view('admin/pagina/profesores/profesores/add');
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
    public function view($id)
    {
        $data  = array(
            'profesor' => $this->Profesores_model->getProfesor($id),
            'menu_status' => $this->Profesores_model->getMenuStatus()
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/profesores/profesores/view', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function store()
    {
        $nombre = $this->input->post("nombre");
        $segundoNombre = $this->input->post("segundoNombre");
        $primerApellido = $this->input->post("primerApellido");
        $segundoApellido = $this->input->post("segundoApellido");
        $carrera = $this->input->post("carrera");
        $curriculum = $this->input->post("curriculum");
        $status = $this->input->post("status");
        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = 'assets/images/profesores';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = "50000"; //tamaño en kilobytes
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            echo '<script type="text/javascript">
								alert("Agrege una imagen");
                            </script>';
            redirect(base_url() . "admin/profesores/profesores/add");
        } else {
            $file_info = $this->upload->data();
            $archivo = $file_info['file_name'];
            $data  = array(
                'nombre' => $nombre,
                'segundoNombre' => $segundoNombre,
                'primerApellido' => $primerApellido,
                'segundoApellido' => $segundoApellido,
                'carrera' => $carrera,
                'curriculum' => $curriculum,
                'imagen' => "assets/images/profesores/" . $archivo,
                'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d"),
                'idStatus' => $status
            );
            if ($this->Profesores_model->save($data)) {
                redirect(base_url() . "admin/profesores/profesores");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/profesores/profesores/add");
            }
        }
        //	$file_info = $this->upload->data();
        //$archivo = $file_info['file_name'];




    }
    public function imagenupdate()
    {
        $imagenold = $this->input->post("imagenold");
        $nombre = $this->input->post("nombre");
        $primerApellido = $this->input->post("primerApellido");
        $id = $this->input->post("id");
       
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/profesores";
        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;
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
                'imagen' => "assets/images/profesores/" . $archivo,
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
            );
            if ($this->Profesores_model->update($id, $data)) {
                unlink($imagenold);
                redirect(base_url() . "admin/profesores/profesores");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/profesores/profesores/add");
            }
        }
    }
    public function update($id)
    {
        $nombre = $this->input->post("nombre");
        $segundoNombre = $this->input->post("segundoNombre");
        $primerApellido = $this->input->post("primerApellido");
        $segundoApellido = $this->input->post("segundoApellido");
        $carrera = $this->input->post("carrera");
        $curriculum = $this->input->post("curriculum");
        $status = $this->input->post("status");

        $data = array(
            'nombre' => $nombre,
            'segundoNombre' => $segundoNombre,
            'primerApellido' => $primerApellido,
            'segundoApellido' => $segundoApellido,
            'carrera' => $carrera,
            'curriculum' => $curriculum,
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
    public function cabiarfoto($id)
    {
        $data  = array(
            'profesor' => $this->Profesores_model->getProfesor($id)
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/profesores/profesores/editfoto', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function portada()
    {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/profesores/portada/edit');
        $this->load->view('admin/layouts/footer');
    }

    public function portadaupdate()
    {
        unlink('assets/images/profesores/background.jpg');
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/profesores";
        $config['overwrite'] = "TRUE";
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
        redirect(base_url() . "admin/profesores/profesores/portada");
    }
}
