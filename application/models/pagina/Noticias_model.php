<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profesores_model extends CI_Model
{
	public function getProfesores()
	{
		$this->db->cache_on();
		$this->db->select("p.*");
		$this->db->from("profesores p");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getList()
	{
		$this->db->cache_on();
		 $this->db->select("s.*");
		$this->db->from("profesores s");
		$this->db->where("idStatus",1);
		$resultados = $this->db->get();
		return $resultados->result(); 
	}
	public function getProfesor($id)
	{
		$this->db->cache_on();
		$this->db->select("p.*");
		$this->db->from("profesores p");
		$this->db->where("p.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
	public function save($data)
	{
		$this->db->cache_delete_all();
		return $this->db->insert("profesores", $data);
	}
	public function getMenuStatus(){
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("menu_status s");
		$resultados = $this->db->get();
		return $resultados ->result();
	}

	public function update($id,$data){
		$this->db->cache_delete_all();
		$this->db->where("id",$id);
		return $this->db->update("profesores",$data);
	}
}
