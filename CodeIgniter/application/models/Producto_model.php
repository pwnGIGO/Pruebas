<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	// Tabla: producto
	// Columnas: idProducto nombre precio cantidad
	class Producto_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function crearProducto($producto){
			$nuevo = array(
				'nombre' => $producto['nombre'],
				'precio' => $producto['precio'],
				'cantidad' => $producto['cantidad'],
			);
			$this->db->insert('producto', $nuevo);
		}

		function obtenerProductos(){
			$query = $this->db->get('producto');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		function obtenerProducto($id){
			$this->db->where("idProducto", $id);
			$query = $this->db->get('producto');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		function actualizarProducto($id, $producto){
			$this->db->where('idProducto', $id);
			$query = $this->db->update('producto', $producto);
		}

		function eliminarProducto($id){
			$this->db->delete('producto', array('idProducto' => $id));
		}
	}
?>