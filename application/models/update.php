	<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
class update extends CI_Model
{
	var $nombre 	= "";
	var $apellido 	= "";
	var $email 		= "";
	var $repetir_email= "";
	var $telefono   = "";
	var $contrasena = "";
	var $documento  = "";
	

	function __construct()
	{
		parent::__construct();
	}



	function update() {
		if($_POST){
			$data = array(
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'email'=> $this->session->userdata['email'],
		    'telefono'=> $_POST['phone'],
			'contrasena' => $_POST['password'],
			'documento' => $_POST['doc'].$_POST['doc2'].$_POST['documento-identidad'],
			);
			

			$this->db->where('email', $this->session->userdata['email']);
			$this->db->update('persona', $data); 
			
			redirect(site_url('principal/index'), 'refresh');

			
	      
	   	}
	    else{
	    	$query = $this->db->get_where('persona',array('email' => $this->session->userdata['email']));
     		
	        $fila = $query->row();
	        return $fila; 
     	}
     }
 }

