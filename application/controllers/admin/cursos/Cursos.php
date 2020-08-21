<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cursos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }
        $this->load->model("pagina/Cursos_model");
    }
    public function index()
    {
        $data  = array(
            'cursos' => $this->Cursos_model->getCursos(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/cursos/cursos/list', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function add()
    {
        $data  = array(
           
            'menu_profesores' => $this->Cursos_model->getMenuProfesores()
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/cursos/cursos/add', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function edit($id)
    {
        $data  = array(
            'curso' => $this->Cursos_model->getCurso($id),
            'menu_status' => $this->Cursos_model->getMenuStatus(),
            'menu_profesores' => $this->Cursos_model->getMenuProfesores(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/cursos/cursos/edit', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function view($id)
    {
        $data  = array(
            'curso' => $this->Cursos_model->getCurso($id),
            'menu_status' => $this->Cursos_model->getMenuStatus(),
            'menu_profesores' => $this->Cursos_model->getMenuProfesores(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/cursos/cursos/view', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function store()
    {
        $nombre = $this->input->post("nombre");
        $subtitulo = $this->input->post("subtitulo");
        $descripcion = $this->input->post("descripcion");    
        $popular = $this->input->post("popular");  
        $status = $this->input->post("status");
        $profesor = $this->input->post("profesor");

        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = 'assets/images/cursos';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $nombre.date("Y") . "-" . date("m") . "-" . date("d");
        $config['max_size'] = "50000"; //tamaño en kilobytes
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            redirect(base_url() . "admin/cursos/cursos/add");
            echo '<script type="text/javascript">
								alert("Agrege una imagen");
							</script>';
        } else {
            $file_info = $this->upload->data();
            $archivo = $file_info['file_name'];
            $data  = array(
                'nombre' => $nombre,
                'subtitulo' => $subtitulo,   
                'descripcion' => $descripcion,   
                'popular' => $popular, 
                'id_profesor' => $profesor,               
                'imagen' => "assets/images/cursos/" . $archivo,
                'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d"),
                'idStatus' => $status
            );
            if ($this->Cursos_model->save($data)) {
                redirect(base_url() . "admin/cursos/cursos");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/cursos/cursos/add");
            }
        }
        //	$file_info = $this->upload->data();
        //$archivo = $file_info['file_name'];




    }
    public function imagenupdate()
    {
        $imagenold = $this->input->post("imagenold");
        $nombre = $this->input->post("nombre");        
        $id = $this->input->post("id");
        unlink($imagenold);
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/cursos";
        $config['overwrite'] = "TRUE";
        $config['file_name'] = $nombre.date("Y") . "-" . date("m") . "-" . date("d");
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
                'imagen' => "assets/images/cursos/" . $archivo,
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
            );
            if ($this->Cursos_model->update($id, $data)) {
                redirect(base_url() . "admin/cursos/cursos");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/cursos/cursos/add");
            }
        }
    }
    public function update($id)
    {
        $nombre = $this->input->post("nombre");
        $subtitulo = $this->input->post("subtitulo");
        $descripcion = $this->input->post("descripcion");    
        $popular = $this->input->post("popular");   
        $status = $this->input->post("status");
        $profesor = $this->input->post("profesor");

        $data = array(
            'nombre' => $nombre,
            'subtitulo' => $subtitulo, 
            'descripcion' => $descripcion,         
            'popular' => $popular,
            'idStatus' => $status,
            'id_profesor' => $profesor,
            'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
        );
        if ($this->Cursos_model->update($id, $data)) {
            redirect(base_url() . "admin/cursos/cursos/");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "admin/cursos/cursos/edit/" . $id);
        }
    }
    public function cabiarfoto($id)
    {
        $data  = array(
            'curso' => $this->Cursos_model->getCurso($id)
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/cursos/cursos/editfoto', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function portada()
    {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/cursos/portada/edit');
        $this->load->view('admin/layouts/footer');
    }

    public function portadaupdate()
    {
        unlink('assets/images/cursos/background.jpg');
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/cursos";
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
        redirect(base_url() . "admin/cursos/cursos/portada");
    }
}
