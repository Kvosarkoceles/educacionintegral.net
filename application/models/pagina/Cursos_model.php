<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cursos_model extends CI_Model
{
	public function getCursos()
	{
		$this->db->select("c.*");
		$this->db->from("cursos c");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getList()
	{
		 $this->db->select("c.*");
		$this->db->from("cursos c");
		$this->db->where("idStatus",1);
		$resultados = $this->db->get();
		return $resultados->result(); 
	}
	public function getCurso($id)
	{
		$this->db->select("c.*");
		$this->db->from("cursos c");
		$this->db->where("c.id", $id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
	public function save($data)
	{
		return $this->db->insert("cursos", $data);
	}
	public function getMenuStatus(){
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("menu_status s");
		$resultados = $this->db->get();
		return $resultados ->result();
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cursos",$data);
	}
}
