<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pagina_model extends CI_Model
{

	public function getSliders()
	{
		$this->db->select("s.*");
		$this->db->from("sliders s");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getCursosPopulares()
	{
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
}
