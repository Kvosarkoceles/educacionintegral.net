<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pagina_model extends CI_Model {
	
	
	public function getLogo(){
		
		$resultados = $this->db->get();
		return $resultados ->result();
	}

}
