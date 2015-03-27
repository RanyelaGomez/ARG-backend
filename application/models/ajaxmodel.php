<?php

	class ajaxmodel extends CI_Model{

		function eliminar(){
			$this->db->select('*');
			$this->db->where('idproducto =',$_POST['idproducto']);
			$this->db->where('usuario =',$_POST['email']);
			$query=$this->db->get("personaproducto");
			$row = $query->row();

			$this->db->select('*');
			$this->db->where('codigo = ', $_POST['idproducto']);
			$query1 = $this->db->get('producto'); 
			$row1 = $query1->row();

			$data = array(
               'tipo' 		=> $row1->tipo,
               'temporada' 	=> $row1->temporada,
               'codigo' 	=> $row1->codigo,
               'cantidad'	=> $row1->cantidad + $row->cantidad,
               'precio'		=> $row1->precio,
               'imagen'		=> $row1->imagen,
            );

            $this->db->where('codigo', $_POST['idproducto']);
				$this->db->update('producto', $data); 

			$this->db->delete('personaproducto', array('idproducto' => $_POST['idproducto'],'usuario'=> $_POST['email'])); 
			


			
		}
	}

	/*
	

			


			
			

			
				
				
				*/