<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Principal extends CI_Controller{
	private  $Datos;
	public function __construct() {
		parent::__construct();

		$this->Datos['recursos'] = base_url('recursos');
		$this->Datos['user'] = $this->session->userdata;

		 $fb_config = array(
            'appId'  => '536311206510536',
            'secret' => '5b877512cd86b22da1b8ed7bfcd71ee4'
        );

        $this->load->library('facebook', $fb_config);
        $this->Datos['logout_url'] = $this->facebook->getLogoutUrl();
        $this->Datos['login_url'] = $this->facebook->getLoginUrl();
        
       		 
       				
	}
	public function index()
	{
		$this->load->model('carrito');
	    $user = $this->facebook->getUser();
        if ($user) {
            try {
                $data = $this->facebook->api('/me');
                $this->session->set_userdata(
						array('email'=>$data['email'],
							  'nombre'=>$data['first_name'],
							  'apellido'=>$data['last_name'],
							  'facebook' =>true,
						)
				);
				$this->Datos['user'] = $this->session->userdata;
            } catch (FacebookApiException $e) {
                $user = null;
                error_log($e);
            }
        }   
   


		if((isset($this->session->userdata['email'])))
		{	
			$this->load->model('producto');
			$this->Datos['productos'] = $this->producto->all();
			$this->Datos['contar'] = $this->carrito->contar();
			$this->load->view('header2',$this->Datos); 
			$this->load->view('index',$this->Datos); 
			$this->load->view('footer',$this->Datos); 
			$this->load->view('footer_common',$this->Datos);
		}
		else{
			if(!isset($_POST['email'])){
				$this->load->model('producto');
				$this->Datos['productos'] = $this->producto->all();
				$this->load->view('header',$this->Datos); 
				$this->load->view('index',$this->Datos); 
				$this->load->view('footer',$this->Datos); 
				$this->load->view('footer_common',$this->Datos);
			}
			else{
				$this->load->model('logueo');
				if($this->logueo->valido($_POST['email'],$_POST['password'])){
					$usuario = $this->logueo->obtener($_POST['email']);
					$this->session->set_userdata(
						array('email'=>$usuario['email'],
							  'nombre'=>$usuario['nombre'],
							  'apellido'=>$usuario['apellido'],
							  'standalone'=> true,
							)
					);
					$this->Datos['user'] = $this->session->userdata;
					redirect(site_url('principal/index'), 'refresh');
				}
				else{
					redirect('principal/error');
				}
			}
			
		}	
	}	
	

	public function inscribir(){

		if(isset($this->session->userdata['email']))
			$this->load->view('header2',$this->Datos); 
		else
			$this->load->view('header',$this->Datos); 

		$this->load->view('inscribete',$this->Datos);
		$this->load->view('footer',$this->Datos);
		$this->load->view('footer_common',$this->Datos);
		if($_POST){
			$this->load->model('persona');
			$this->persona->registrar();
		}
	}

	public function pagar(){
		

		
		if($_POST){
			$this->load->model('pago');
			$this->pago->datos_pago();

		}
		redirect('principal/carrito','refresh');
	}

	public function contacto(){
		$this->load->model('carrito');
		if(isset($this->session->userdata['email'])){
			$this->Datos['contar'] = $this->carrito->contar();
			$this->load->view('header2',$this->Datos);
		}
		else
			$this->load->view('header',$this->Datos); 
		
		$this->load->view('contacto',$this->Datos);
		$this->load->view('footer',$this->Datos);
		$this->load->view('footer_common',$this->Datos);
		if($_POST){
			$this->load->model('contactar');
			$this->contactar->registrar();
		}
	}

	public function carrito(){
		
		if(isset($this->session->userdata['email'])){
			$this->load->model('carrito');
			if($_POST){				
				$this->carrito->insertar($_POST);
			}
			
		    $this->Datos['contar'] = $this->carrito->contar();
			$this->load->view('header2',$this->Datos);

			$this->Datos['carritos'] = $this->carrito->mostrar();
			$this->Datos['suma'] = $this->carrito->suma();
			$this->load->view('carrito',$this->Datos);
			$this->load->view('footer',$this->Datos);
			$this->load->view('footer_common',$this->Datos); 
		}
		else
			redirect(site_url('principal/inscribir'),'refresh');
	}

	public function logout(){
		if(isset($this->session->userdata['standalone']))
			$this->session->sess_destroy();
		if(isset($this->session->userdata['facebook'])){
			$this->facebook->destroySession();
			$this->session->sess_destroy();
		}
		redirect(site_url('principal/index'),'refresh');
	}

		public function actualizar(){
			$this->load->model('carrito'); 
			$this->Datos['contar'] = $this->carrito->contar();
			$this->load->model('update');				
			$this->Datos['ex'] = $this->update->update();	
		    $this->load->view('header2',$this->Datos);
			$this->load->view('actualizar-datos',$this->Datos);
			$this->load->view('footer',$this->Datos);
			$this->load->view('footer_common',$this->Datos);
			if($_POST){
				$this->Datos['ex'] = $this->update->update();
			}
					
		}

		public function error(){
			
			$this->load->view('error_404',$this->Datos);
			
			$this->load->view('footer_common',$this->Datos);
		}

		public function categorias($tipo = null,$temporada = null,$preciomin = null,$preciomax = null){
			$this->load->model('carrito');
			
			if($tipo == null){
				redirect('principal/error');
			}
			else{
				if($tipo == "Gargantilla"){
					$this->load->model('gargantilla');
				    $this->Datos['productos'] = $this->gargantilla->all($tipo,$temporada,$preciomin,$preciomax);
				    if(isset($this->session->userdata['email'])){
				    	$this->Datos['contar'] = $this->carrito->contar();
						$this->load->view('header2',$this->Datos); 
						
				    }
					else
						$this->load->view('header',$this->Datos); 				   
					
					$this->load->view('categorias',$this->Datos);
					$this->load->view('footer',$this->Datos);
					$this->load->view('footer_common',$this->Datos);
				}
				if($tipo == "Pulsera"){
					$this->load->model('pulsera');
				    $this->Datos['productos'] = $this->pulsera->all($tipo,$temporada,$preciomin,$preciomax);				   
					 if(isset($this->session->userdata['email'])){
					 	$this->Datos['contar'] = $this->carrito->contar();
						$this->load->view('header2',$this->Datos); 
					}
					else
						$this->load->view('header',$this->Datos);
					$this->load->view('categorias',$this->Datos);
					$this->load->view('footer',$this->Datos);
					$this->load->view('footer_common',$this->Datos);
				}
				if($tipo == "Zarcillo"){
					$this->load->model('zarcillo');
				    $this->Datos['productos'] = $this->zarcillo->all($tipo,$temporada,$preciomin,$preciomax);				   
					if(isset($this->session->userdata['email'])){
						$this->Datos['contar'] = $this->carrito->contar();
						$this->load->view('header2',$this->Datos); 
					}
					else
						$this->load->view('header',$this->Datos);
					$this->load->view('categorias',$this->Datos);
					$this->load->view('footer',$this->Datos);
					$this->load->view('footer_common',$this->Datos);
				}
				//
			}
			
		}
		function producto($id){
			$this->load->model('carrito');
			
			$this->load->model('producto');
			$this->Datos['producto'] = $this->producto->find($id);
			$this->Datos['imagenes'] = $this->producto->todaimagen($id);
			$this->Datos['recomendados'] = $this->producto->all();
			 if(isset($this->session->userdata['email'])){
			 			$this->Datos['contar'] = $this->carrito->contar();
						$this->load->view('header2',$this->Datos);
			} 
					else
						$this->load->view('header',$this->Datos);
			$this->load->view('producto',$this->Datos);
			$this->load->view('footer',$this->Datos);
			$this->load->view('footer_common',$this->Datos);
		}

		

   


}

