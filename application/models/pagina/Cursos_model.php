<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cursos_model extends CI_Model
{
	public function getCursos()
	{
		$this->db->cache_on();
		$this->db->select("c.*,ms.nombre as profesor");
		$this->db->from("cursos c");
		$this->db->join("profesores ms", "c.id_profesor = ms.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getList()
	{
		$this->db->cache_on();
		$this->db->select("c.*,
		 	ms.nombre as profesor,
			ms.primerApellido as profesorApellido,
			ms.imagen as profesorImagen,
			ms.carrera as profesorCarrera
		");
		$this->db->from("cursos c");
		$this->db->join("profesores ms", "c.id_profesor = ms.id");
		$this->db->where("c.idStatus", 1);
		$this->db->where("ms.idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getCurso($id)
	{
		
		$this->db->select("c.*,
						   p.nombre as profesorNombre,
						   p.primerApellido as profesorApellido,
						   p.primerApellido as profesorApellido,
						   ms.nombre as status,
						   ms2.nombre as estadoPopular,
						 ");
		$this->db->from("cursos c");
		$this->db->join("profesores p", "c.id_profesor = p.id");
		$this->db->join("menu_status ms", "c.idStatus = ms.id");
		$this->db->join("menu_status ms2", "c.popular = ms2.id");
		$this->db->where("c.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("cursos", $data);
	}
	public function getMenuStatus()
	{
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("menu_status s");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getMenuProfesores()
	{
		$this->db->cache_on();
		$this->db->select("p.id, p.nombre, p.segundoNombre, p.primerApellido, p.segundoApellido");
		$this->db->from("profesores p");
		$this->db->where("idStatus",1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function update($id, $data)
	{
		$this->db->cache_delete_all();
		$this->db->where("id", $id);
		return $this->db->update("cursos", $data);
	}
}
