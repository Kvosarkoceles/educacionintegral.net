<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	
	
	
		/* Activos */
		public function slidersActivos()
		{
			 $this->db->cache_on(); 
			$this->db->select("s.*");
			$this->db->from("sliders s");
			$this->db->where("idStatus", 1);
			$resultados = $this->db->get();
			$total = $resultados->num_rows();
			return $total; 			
		}
	
		public function noticiasActivas()
		{
			 $this->db->cache_on(); 
			$this->db->select("s.*");
			$this->db->from("noticias s");
			$this->db->where("idStatus", 1);
			$resultados = $this->db->get();
			$total = $resultados->num_rows();
			return $total; 			
		}
		
		public function profesoresActivos()
		{
			 $this->db->cache_on(); 
			$this->db->select("s.*");
			$this->db->from("profesores s");
			$this->db->where("idStatus", 1);
			$resultados = $this->db->get();
			$total = $resultados->num_rows();
			return $total; 			
		}
	
		public function cursosActivos()
		{
			 $this->db->cache_on(); 
			$this->db->select("s.*");
			$this->db->from("cursos s");
			$this->db->where("idStatus", 1);
			$resultados = $this->db->get();
			$total = $resultados->num_rows();
			return $total; 			
		}
	
		public function usuariosActivos()
		{
			 $this->db->cache_on(); 
			$this->db->select("s.*");
			$this->db->from("usuarios s");
			$this->db->where("id_estado", 1);
			$resultados = $this->db->get();
			$total = $resultados->num_rows();
			return $total; 			
		}

		public function tagsActivos()
		{
			 $this->db->cache_on(); 
			$this->db->select("s.*");
			$this->db->from("tags s");
			$this->db->where("idStatus", 1);
			$resultados = $this->db->get();
			$total = $resultados->num_rows();
			return $total; 			
		}
	
			/* Desactivados */
			public function slidersDesactivados()
			{
				 $this->db->cache_on(); 
				$this->db->select("s.*");
				$this->db->from("sliders s");
				$this->db->where("idStatus", 2);
				$resultados = $this->db->get();
				$total = $resultados->num_rows();
				return $total; 			
			}
		
			public function noticiasDesactivadas()
			{
				 $this->db->cache_on(); 
				$this->db->select("s.*");
				$this->db->from("noticias s");
				$this->db->where("idStatus", 2);
				$resultados = $this->db->get();
				$total = $resultados->num_rows();
				return $total; 			
			}
			
			public function profesoresDesactivados()
			{
				 $this->db->cache_on(); 
				$this->db->select("s.*");
				$this->db->from("profesores s");
				$this->db->where("idStatus", 2);
				$resultados = $this->db->get();
				$total = $resultados->num_rows();
				return $total; 			
			}
		
			public function cursosDesactivados()
			{
				 $this->db->cache_on(); 
				$this->db->select("s.*");
				$this->db->from("cursos s");
				$this->db->where("idStatus", 2);
				$resultados = $this->db->get();
				$total = $resultados->num_rows();
				return $total; 			
			}
		
			public function usuariosDesactivados()
			{
				 $this->db->cache_on(); 
				$this->db->select("s.*");
				$this->db->from("usuarios s");
				$this->db->where("id_estado", 2);
				$resultados = $this->db->get();
				$total = $resultados->num_rows();
				return $total; 			
			}
	
			public function tagsDesactivados()
			{
				 $this->db->cache_on(); 
				$this->db->select("s.*");
				$this->db->from("tags s");
				$this->db->where("idStatus", 2);
				$resultados = $this->db->get();
				$total = $resultados->num_rows();
				return $total; 			
			}
}
