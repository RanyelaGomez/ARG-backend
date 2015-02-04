<?php

	class Persona extends CI_Model{
		var $nombre 	= "";
		var $apellido 	= "";
		var $email 		= "";
		var $repetir_email= "";
		var $telefono   = "";
		var $contrasena = "";
		var $documento  = "";
		
		

		function __contruct(){
			parent::__contruct();
		}
		function registrar(){
			$this->nombre     = $_POST['nombre'];
			$this->apellido   = $_POST['apellido'];
			$this->email      = $_POST['email'];
			$this->repetir_email      = $_POST['email1'];
			$this->telefono   = $_POST['phone'];
			$this->contrasena = $_POST['password'];
			$this->documento  = $_POST['doc'].$_POST['doc2'].$_POST['documento-identidad'];
			$this->db->insert('persona',$this);
		}

	}

