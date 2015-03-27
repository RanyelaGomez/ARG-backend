<?php

	class  contacto extends CI_Model{
		var $nombre 	= "";
		var $asunto 	= "";
		var $email 		= "";
		var $mensaje= "";

		
		

		function __contruct(){
			parent::__contruct();
		}
		function subir(){
			$this->nombre     		= $_POST['nombre'];
			$this->asunto   		= $_POST['asunto'];
			$this->email      		= $_POST['email'];
			$this->mensaje      	= $_POST['mensaje'];

			$this->db->insert('contacto',$this);
			
			
		}

	}
