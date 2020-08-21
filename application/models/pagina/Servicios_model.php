	<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Servicios_model extends CI_Model
{
	public function getLista()
	{
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("servicios s");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getServicios($id)
	{
		$this->db->select("s.*");
		$this->db->from("servicios s");
		$this->db->where("s.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("servicios", $data);
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
		$this->db->cache_delete_all();
		$this->db->where("id", $id);
		return $this->db->update("servicios", $data);
	}
}
