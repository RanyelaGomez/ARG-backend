<?php

	class Persona extends CI_Model{
		var $nombre 	= "";
		var $apellido 	= "";
		var $email 		= "";
		var $repetir_email= "";
		var $telefono   = "";
		var $contrasena = "";
		var $doc1  = "";
		var $doc2  = "";
		var $doc3  = "";
		
		

		function __contruct(){
			parent::__contruct();
		}
		function registrar(){
			$this->nombre     		= $_POST['nombre'];
			$this->apellido   		= $_POST['apellido'];
			$this->email      		= $_POST['email'];
			$this->telefono   		= $_POST['phone'];
			$this->contrasena 		= $_POST['password'];
			$this->doc1  			= $_POST['doc'];
			$this->doc2				= $_POST['doc2'];
			$this->doc3				= $_POST['documento-identidad'];
			$this->db->insert('persona',$this);
			
		}

	}

