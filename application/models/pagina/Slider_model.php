<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Slider_model extends CI_Model
{
	public function getSliders()
	{
		$this->db->select("s.*");
		$this->db->from("sliders s");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getSlider($id)
	{
		$this->db->select("s.*");
		$this->db->from("sliders s");
		$this->db->where("s.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
	public function save($data)
	{
		return $this->db->insert("sliders", $data);
	}
	public function getMenuStatus()
	{
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("menu_status s");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function update($id, $data)
	{
		$this->db->where("id", $id);
		return $this->db->update("sliders", $data);
	}
}
