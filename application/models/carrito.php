<?php


	class carrito extends CI_Model{
		var $idproducto;
		var $cantidad;
		var $usuario;
		function __construct(){
			parent::__construct();
		}

		function insertar($data){
			$this->idproducto = $data['producto'];
			$this->cantidad = $data['cantidad'];
			$this->usuario = $this->session->userdata['email'];

			$query = $this->db->get_where('producto', array('codigo' => $data['producto']));
			$row = $query->row();

			if($row->cantidad < $this->cantidad){
				redirect('principal/error');
			}
			else{
				$this->db->insert('personaproducto', $this); 
				
				$up = array(              
               		'cantidad' => $row->cantidad - $this->cantidad
            	);

				$this->db->where('codigo', $data['producto']);
				$this->db->update('producto',$up ); 
			}

		
		}

		function mostrar(){
			
			$this->db->select('a.idproducto , a.cantidad, b.tipo, b.temporada, b.imagen, b.precio');
			$this->db->from('personaproducto  a');
			$this->db->join('producto b', 'a.idproducto = b.codigo');
			$this->db->join('persona c','a.usuario = c.email');
			$this->db->where('c.email',$this->session->userdata['email']);
			
			 
			$query = $this->db->get();
			return $query;


		}

		function suma(){
			$this->db->select('SUM(b.precio*a.cantidad)');
			$this->db->from('personaproducto  a');
			$this->db->join('producto b', 'a.idproducto = b.codigo');
			$this->db->join('persona c','a.usuario = c.email');
			$this->db->where('c.email',$this->session->userdata['email']);
			
			 
			$query = $this->db->get();
			return $query->row();
		}
		function contar(){
			$this->db->select('*');
			$this->db->from('personaproducto  a');
			$this->db->join('producto b', 'a.idproducto = b.codigo');
			$this->db->join('persona c','a.usuario = c.email');
			$this->db->where('c.email',$this->session->userdata['email']);
			$query = $this->db->get();
			return $query->num_rows();
		}

		
	}