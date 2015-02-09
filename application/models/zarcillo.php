<?php


	class Zarcillo extends CI_Model{
		var $tipo; // hace referencia al tipo de producto. -> Gargantilla, Pulsera, ect.
		var $temporada; // el mes 
		var $codigo;
		var $cantidad;
		var $precio;
		var $imagen; //por los momentos se comportaran como un link. 

		function __construct(){
			parent::__construct();
		}

		function all($tipo,$temporada, $precio){
			$this->db->select('*');
			if($tipo != null)
				$this->db->like('tipo',ucwords(strtolower($tipo)));
			if($temporada != null)
				$this->db->like('temporada',$temporada);
			if($precio!= null)
				$this->db->where('precio > ', $precio); 
			$query=$this->db->get("producto");			
			return $query;
		}
		

		

	}