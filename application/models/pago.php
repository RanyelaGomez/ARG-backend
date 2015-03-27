<?php

	class Pago extends CI_Model{
		var $monto 	= "";
		var $serial_op 	= "";
		var $direc_env 		= "";
		var $fecha= "";
		var $entidad_b   = "";

		
		

		function __contruct(){
			parent::__contruct();
		}



		function datos_pago(){
			$this->entidad_b     = $_POST['doc'];
			$this->monto   = $_POST['monto'];
			$this->serial_op      = $_POST['serial'];
			$this->fecha      = $_POST['date'];
			$this->direc_env   = $_POST['mensaje'];
		
			$this->db->insert('pago',$this);

			$this->db->where('usuario =',$this->session->userdata['email']);
			$this->db->delete('personaproducto'); 

			redirect(site_url('principal/exito'),'refresh');
		}




	}