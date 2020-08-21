<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tags extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }
        $this->load->model("pagina/Tags_model");
    }
    public function index()
    {
        $data  = array(
            'tags' => $this->Tags_model->getTags(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/tags/list', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function add()
    {
        $data  = array(
            'menu_status' => $this->Tags_model->getMenuStatus(),
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/tags/add', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function edit($id)
    {
        $data  = array(
            'tag' => $this->Tags_model->getTag($id),
            'menu_status' => $this->Tags_model->getMenuStatus()
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/tags/edit', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function view($id)
    {
        $data  = array(
            'tag' => $this->Tags_model->getTag($id),
            'menu_status' => $this->Tags_model->getMenuStatus()
        );
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/layouts/aside');
        $this->load->view('admin/pagina/noticias/tags/view', $data);
        $this->load->view('admin/layouts/footer');
    }
    public function update($id)
    {
        $nombre = $this->input->post("nombre");
        $status = $this->input->post("status");
        $data = array(
            'nombre' => $nombre,
            'idStatus' => $status,
            'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
        );
        if ($this->Tags_model->update($id, $data)) {
            redirect(base_url() . "admin/noticias/tags/");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "admin/cursos/cursos/edit/" . $id);
        }
    }
    public function store()
    {
        $nombre = $this->input->post("nombre");
        $status = $this->input->post("status");
        $data = array(
            'nombre' => $nombre,
            'idStatus' => $status,
            'fechaRegistro' => date("Y") . "-" . date("m") . "-" . date("d"),
            'fechaModificacion' => date("Y") . "-" . date("m") . "-" . date("d")
        );
        if ($this->Tags_model->save($data)) {
            redirect(base_url() . "admin/noticias/tags/");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "admin/noticias/tags/add");
        }
    }
}
