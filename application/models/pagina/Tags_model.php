<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tags_model extends CI_Model
{
	public function getTags()
	{
		$this->db->cache_on();
		$this->db->select("t.*");
		$this->db->from("tags t");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getTag($id)
	{
		$this->db->cache_on();
		$this->db->select("t.*");
		$this->db->from("tags t");
		$this->db->where("t.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
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
		return $this->db->update("tags", $data);
	}

	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("tags", $data);
	}
}
