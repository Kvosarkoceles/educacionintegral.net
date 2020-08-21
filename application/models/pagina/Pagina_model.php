<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pagina_model extends CI_Model
{

	public function getSliders()
	{
		 $this->db->cache_on(); 
		$this->db->select("s.*");
		$this->db->from("sliders s");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getCursosPopulares()
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
		$this->db->where("c.popular", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getNoticias()
	{
		 $this->db->cache_on();
		$this->db->select("n.*");
		$this->db->from("noticias n");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUltimasNoticias()
	{
		 $this->db->cache_on();
		$this->db->select("n.*");
		$this->db->from("noticias n");
		$this->db->where("idStatus", 1);
		$this->db->limit(3); 
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getNoticiasTag($id)
	{
		/*  $this->db->cache_on(); */
		$this->db->select("n.*");
		$this->db->from("noticias n");
		$this->db->where("idStatus", 1);
		$this->db->where("id_tag", $id);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getTags()
	{
		 $this->db->cache_on(); 
		$this->db->select("t.*");
		$this->db->from("tags t");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getNoticia($id)
	{
		 $this->db->cache_on();
		$this->db->select("n.*");
		$this->db->from("noticias n");
		$this->db->where("idStatus", 1);
		$this->db->where("id", $id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	/* Index */
	public function slidersActivos()
	{
		 $this->db->cache_on(); 
		$this->db->select("s.*");
		$this->db->from("sliders s");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		$total = $resultados->num_rows();
		return $total; 


		
	}
	public function getNosotros()
	{
		 $this->db->cache_on();
		$this->db->select("n.*");
		$this->db->from("nosotros n");
		$this->db->where("idStatus", 1);
		$this->db->limit(3); 
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getServicios()
	{
		
		$this->db->cache_on(); 
		$this->db->select("s.*");
		$this->db->from("servicios s");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
