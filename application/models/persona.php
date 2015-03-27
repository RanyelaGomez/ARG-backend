<?php

	class Persona extends CI_Model{
		var $nombre 	= "";
		var $apellido 	= "";
		var $email 		= "";
		var $repetir_email= "";
		var $telefono   = "";
		var $contrasena = "";
		var $repetir_contrasena = "";
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
			$this->repetir_email      		= $_POST['email1'];
			$this->telefono   		= $_POST['phone'];
			$this->contrasena 		= $_POST['password'];
			$this->repetir_contrasena 		= $_POST['password1'];
			$this->doc3  			= $_POST['doc'];
			$this->doc2				= $_POST['doc2'];
			$this->doc1				= $_POST['documento-identidad'];
			$this->db->insert('persona',$this);
			
			redirect(site_url('principal/index'),'refresh');
		}

	}

