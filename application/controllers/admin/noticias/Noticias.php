<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Noticias extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }
        $this->load->model("pagina/Noticias_model");
    }
    public function index()
    {
        $data  = array(
            'noticias' => $this->Noticias_model->getNoticias(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/noticias/list', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function add()
    {
        $data  = array(
            'tags' => $this->Noticias_model->getTags(),
            'menu_status' => $this->Noticias_model->getMenuStatus(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/noticias/add', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function edit($id)
    {
        $data  = array(
            'noticia' => $this->Noticias_model->getNoticia($id),
            'tags' => $this->Noticias_model->getTags(),
            'menu_status' => $this->Noticias_model->getMenuStatus(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/noticias/edit', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function store()
    {
        $titulo = $this->input->post("titulo");
        $autor = $this->input->post("autor");
        $noticia = $this->input->post("noticia");
        $descripcion = $this->input->post("descripcion");
        $imagen = $this->input->post("imagen");
        $fecha = $this->input->post("fecha");
        $tag = $this->input->post("tag");
        $status = $this->input->post("status");

        $mi_archivo = 'mi_archivo';
        $config['upload_path'] = 'assets/images/noticias';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $titulo . date("Y") . "-" . date("m") . "-" . date("d");
        $config['max_size'] = "50000"; //tamaño en kilobytes
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            redirect(base_url() . "admin/noticias/noticias/add");
            echo '<script type="text/javascript">
								alert("Agrege una imagen");
							</script>';
        } else {
            $file_info = $this->upload->data();
            $archivo = $file_info['file_name'];
            $data  = array(
                'titulo' => $titulo,
                'autor' => $autor,
                'descripcion' => $descripcion,
                'texto' => $noticia,
                'imagen' => "assets/images/noticias/" . $archivo,
                'fecha' => $fecha,
                'id_tag' => $tag,
                'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d"),
                'idStatus' => $status
            );
            if ($this->Noticias_model->save($data)) {
                redirect(base_url() . "admin/noticias/noticias");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/noticias/noticias/add");
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

        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/noticias";
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
                'imagen' => "assets/images/noticias/" . $archivo,
                'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
            );
            if ($this->Noticias_model->update($id, $data)) {
                unlink($imagenold);
                redirect(base_url() . "admin/noticias/noticias");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url() . "admin/noticias/noticias/add");
            }
        }
    }
    public function update($id)
    {
        $titulo = $this->input->post("titulo");
        $autor = $this->input->post("autor");
        $noticia = $this->input->post("noticia");
        $descripcion = $this->input->post("descripcion");
        $fecha = $this->input->post("fecha");
        $tag = $this->input->post("tag");
        $status = $this->input->post("status");
        $data = array(
            'titulo' => $titulo,
            'autor' => $autor,
            'descripcion' => $descripcion,
            'texto' => $noticia,
            'fecha' => $fecha,
            'id_tag' => $tag,
            'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d"),
            'idStatus' => $status
        );
        if ($this->Noticias_model->update($id, $data)) {
            redirect(base_url() . "admin/noticias/noticias/");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "admin/noticias/noticias/add/");
        }
    }
    public function cabiarfoto($id)
    {
        $data  = array(
            'noticia' => $this->Noticias_model->getNoticia($id)
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/noticias/editfoto', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function portada()
    {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/portada/edit');
        $this->load->view('admin/layouts/footer');
    }

    public function portadaupdate()
    {
        unlink('assets/images/noticias/background.jpg');
        $mi_imagen = 'mi_archivo';
        $config['upload_path'] = "assets/images/noticias";
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
        redirect(base_url() . "admin/noticias/noticias/portada");
    }
}
