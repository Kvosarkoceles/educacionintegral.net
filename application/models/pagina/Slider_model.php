<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Slider_model extends CI_Model {
	public function getSliders(){
		$this->db->select("s.*");
		$this->db->from("sliders s");	
		$resultados = $this->db->get();
		return $resultados ->result();
	}
}
