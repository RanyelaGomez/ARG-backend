<?php


	class Pulsera extends CI_Model{
		var $tipo; // hace referencia al tipo de producto. -> Gargantilla, Pulsera, ect.
		var $temporada; // el mes 
		var $codigo;
		var $cantidad;
		var $precio;
		var $imagen; //por los momentos se comportaran como un link. 

		function __construct(){
			parent::__construct();
		}

		function all($tipo,$temporada, $preciomin, $preciomax){
			$this->db->select('*');
			if($tipo != null)
				$this->db->like('tipo',ucwords(strtolower($tipo)));
			
			if($temporada != null)
				$this->db->like('temporada',$temporada);

			if(($preciomin!= null)&&($preciomax==null))
				$this->db->where('precio <= ', $preciomin); 

			if(($preciomin!= null)&&($preciomax!=null)){
				$this->db->where('precio >= ', $preciomin); 
				$this->db->where('precio <= ', $preciomax);
			}
			$query=$this->db->get("producto");			
			return $query;
		}
		

		

	}