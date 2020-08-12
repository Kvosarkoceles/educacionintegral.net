<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Slider_model extends CI_Model {
	public function getSliders(){
		$this->db->select("s.*");
		$this->db->from("sliders s");	
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getSlider($id){
		$this->db->select("s.*");
		$this->db->from("sliders s");		
		$this->db->where("s.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();;
	}
}
