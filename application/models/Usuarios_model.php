<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios_model extends CI_Model {
	public function getUsuarios(){
		$this->db->cache_on();
		$this->db->select("u.*,r.nombre as rol, s.nombre as status");
		$this->db->from("usuarios u");
		$this->db->join("roles r","u.id_rol = r.id");
		$this->db->join("menu_status s","u.id_estado = s.id");	
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getUsuario($id){
		$this->db->cache_on();
		$this->db->select("u.*,r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("roles r","u.id_rol = r.id");		
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getRoles(){
		$this->db->cache_on();
		$this->db->select("r.*");
		$this->db->from("roles r");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getMenuStatus()
	{
		$this->db->cache_on();
		$this->db->select("s.*");
		$this->db->from("menu_status s");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function save($data){
		$this->db->cache_delete_all();
		return $this->db->insert("usuarios",$data);
	}
	public function update($id,$data){
		$this->db->cache_delete_all();
		$this->db->where("id",$id);
		return $this->db->update("usuarios",$data);
	}
	public function login($username){
		$this->db->where("username", $username);
		$this->db->where("id_estado", 1);
		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
}
