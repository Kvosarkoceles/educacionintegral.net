<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Noticias_model extends CI_Model
{
	public function getNoticias()
	{
		$this->db->cache_on();
		$this->db->select("n.*, tg.nombre as tag");
		$this->db->from("noticias n");
		$this->db->join("tags tg", "n.id_tag = tg.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getList()
	{
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("profesores s");
		$this->db->where("idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getNoticia($id)
	{
		/* $this->db->cache_on(); */
		$this->db->select("n.*, tg.nombre as tag, tg.id as tagvalue ");
		$this->db->from("noticias n");
		$this->db->join("tags tg", "n.id_tag = tg.id");
		$this->db->where("n.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("noticias", $data);
	}
	public function getMenuStatus()
	{
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("menu_status s");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getTags()
	{
		$this->db->cache_on();
		$this->db->select("tg.nombre, tg.id");
		$this->db->from("tags tg");
		$this->db->where("tg.idStatus", 1);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function update($id, $data)
	{
		$this->db->cache_delete_all();
		$this->db->where("id", $id);
		return $this->db->update("noticias", $data);
	}
}
