	<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
class update extends CI_Model
{
	private $table = 'items';

	function __construct()
	{
		parent::__construct();
	}



	function out_update($post, $op) {
		if($op){
	        $this->db->where('email', $post['email']);
	        $query = $this->db->get('persona');
	        $fila = $query->row();
	        return $fila;
	    }
     	else{
     		$this->db->where('email', $post['email']);
			$this->db->update('persona', $post); 
     	}
 }

  