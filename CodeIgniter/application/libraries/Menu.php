<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu{

		private $arr_menu;
		private $arr_enlaces;
		public function __construct($menu){
			$this->arr_menu = $menu['pestanas'];
			$this->arr_enlaces = $menu['enlaces'];
		}

		public function construirMenu(){
			$i=0;
			$ret_menu = "<ul>";
			foreach ($this->arr_menu as $opcion) {
				$ret_menu .= "<li><a href='" . $this->arr_enlaces[$i] . "'>" . $opcion . "</a></li>";
				$i++;
			}
			$ret_menu .= "</ul>";
			return $ret_menu;
		}
	}

?>