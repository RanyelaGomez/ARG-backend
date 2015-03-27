<?php


	class Logueo extends CI_Model{
		var $nombre 	= "";
		var $apellido 	= "";
		var $email 		= "";
		var $repetir_email= "";
		var $telefono   = "";
		var $contrasena = "";
		var $documento  = "";

		function __construct(){
			parent::__construct();
		}
		function valido($email, $clave){
			$result = $this->db->get_where('persona',$arrayName = array('email' => $email, 'contrasena' => $clave));
			if($result->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		function obtener($email){
			return $this->db->get_where('persona',$arrayName = array('email' => $email))->row_array();
		}
	}