<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		function __construct(){
			parent::__construct();

			$menu['pestanas'] = array(
				'Inicio',
				'Productos',
				'acerca de'
			);
			$menu['enlaces'] = array(
				'Inicio',
				'Productos',
				'#'
			);
			$this->load->library('menu', $menu);
			
		}

		public function index(){
			
			$data['mi_menu'] = $this->menu->construirMenu();

			$data['mensaje'] = 'Hola mundo desde el controlador welcome';

			// Vistas
			$this->load->view('layouts/encabezado', $data);
			$this->load->view('welcome_message', $data);
			$this->load->view('layouts/pie');
		}
	}