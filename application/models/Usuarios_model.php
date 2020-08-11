<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuarios_model extends CI_Model {
	public function getUsuarios(){
		$this->db->select("u.*,r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("roles r","u.id_rol = r.id");
		$this->db->where("u.id_estado","1");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getUsuario($id){
		$this->db->select("u.*,r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("roles r","u.id_rol = r.id");
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getRoles(){
		$this->db->select("r.*");
		$this->db->from("roles r");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function save($data){
		return $this->db->insert("usuarios",$data);
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("usuarios",$data);
	}
	public function login($username){
		$this->db->where("username", $username);
		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
}
