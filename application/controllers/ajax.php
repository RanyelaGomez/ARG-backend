<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax extends CI_Controller{
	

	public function __construct() {
		parent::__construct();
		
	}

	public function eliminar(){
		$this->load->model('ajaxmodel');
		$this->ajaxmodel->eliminar();

			
		

	}


}