	<br><br>

	<?= form_open('/productosController/update/'.$producto->result()[0]->idProducto) ?>
		
		<?php
			$nombre = array(
				'name' => 'nombre',
				'placeholder' => 'Nombre del Producto',
				'required' => 'required',
				'value' => $producto->result()[0]->nombre
			);

			$precio = array(
				'name' => 'precio',
				'placeholder' => 'Precio del Producto',
				'required' => 'required',
				'value' => $producto->result()[0]->precio
			);
			
			$cantidad = array(
				'name' => 'cantidad',
				'placeholder' => 'Cantidad de Productos',
				'required' => 'required',
				'value' => $producto->result()[0]->cantidad
			);
		?>

		<?= form_label('Nombre','nombre') ?>
		<?= form_input($nombre) ?>
		
		<br><br>
		<?= form_label('Precio','precio') ?>
		<?= form_input($precio) ?>
		
		<br><br>
		<?= form_label('Cantidad','cantidad') ?>
		<?= form_input($cantidad) ?>
		
		<br><br>
		<?= form_submit('', 'Actualizar') ?>
	<?= form_close()?>