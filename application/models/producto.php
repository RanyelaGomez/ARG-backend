<?php


	class Producto extends CI_Model{

		var $tipo; // hace referencia al tipo de producto. -> Gargantilla, Pulsera, ect.
		var $temporada; // el mes 
		var $codigo;
		var $cantidad;
		var $precio;
		var $imagen; //por los momentos se comportaran como un link. 

		function __construct(){
			parent::__construct();
		}

		function all(){
			$query = $this->db->get('producto');
			return $query;
		}
		function find($id){
			$this->db->select('*');
			$this->db->where('codigo = ', $id); 
			$query=$this->db->get("producto");			
			return $query->row();
		}
		function todaimagen($id){
			$this->db->select('*');
			$this->db->where('codigo = ', $id); 
			$query=$this->db->get("imagenproducto");			
			return $query;
		}



	}

