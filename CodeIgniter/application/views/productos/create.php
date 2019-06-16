	<br><br>
	<?= form_open('Productos/Create') ?>
		
		<?php
			$nombre = array(
				'name' => 'nombre',
				'placeholder' => 'Nombre del Producto',
				'required' => 'required'
			);

			$precio = array(
				'name' => 'precio',
				'placeholder' => 'Precio del Producto',
				'required' => 'required'
			);
			
			$cantidad = array(
				'name' => 'cantidad',
				'placeholder' => 'Cantidad de Productos',
				'required' => 'required'
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
		<?= form_submit('', 'Agregar') ?>
	<?= form_close()?>