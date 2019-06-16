<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ProductosController extends CI_Controller {
		// Coontructor
		function __construct(){
			parent::__construct();
			$this->load->helper('helperPrueba');
			$this->load->helper('form');
			$this->load->model('Producto_model');

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

		function index(){
			
			$data['mi_menu'] = $this->menu->construirMenu();
			$data['productos'] = $this->Producto_model->obtenerProductos();

			if($data['productos']){
				$data['string'] = 'Sección de productos';
				$this->load->view('layouts/encabezado',$data);
				$this->load->view('productos/index');
				$this->load->view('layouts/pie');
			}else{
				$data['string'] = 'Sección de productos';
				$data['productos']=null;
				$this->load->view('layouts/encabezado',$data);
				$this->load->view('productos/index');
				$this->load->view('layouts/pie');
			}
			
		}

		function createView(){
			$data['mi_menu'] = $this->menu->construirMenu();

			// Vistas
			$this->load->view('layouts/encabezado', $data);
			$this->load->view('productos/create');
			$this->load->view('layouts/pie');
		}

		function create(){

			$data = array(
				'nombre' => $this->input->post('nombre'),
				'precio' => $this->input->post('precio'),
				'cantidad' => $this->input->post('cantidad'),
			);
			
			$this->Producto_model->crearProducto($data);

			redirect('Productos');
		}

		function updateView(){
			
			$data['mi_menu'] = $this->menu->construirMenu();

			$idProducto = $this->uri->segment(3);

			$data['producto'] = $this->Producto_model->obtenerProducto($idProducto);

			// Vistas
			$this->load->view('layouts/encabezado', $data);
			$this->load->view('productos/update');
			$this->load->view('layouts/pie');
		}

		function update(){

			$data = array(
				'nombre' => $this->input->post('nombre'),
				'precio' => $this->input->post('precio'),
				'cantidad' => $this->input->post('cantidad'),
			);

			$idProducto = $this->uri->segment(3);

			$this->Producto_model->actualizarProducto($idProducto, $data);

			redirect('Productos');
		}

		function delete(){
			$idProducto = $this->uri->segment(3);
			
			$this->Producto_model->eliminarProducto($idProducto);
			
			redirect('Productos');
		}

		function prueba(){

		}
	}