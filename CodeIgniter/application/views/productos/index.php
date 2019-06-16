		<style>
			table{
				width: 85%;
				background-color: #F0F8FF;
				margin: auto;
				border-collapse: collapse;
			}

			td tr{
				text-align: center;
				padding: 10px;
				border: 1px solid #000;
			}
		</style>
		<div align="center">
			<h2><?= $string?></h2>
			<?php  echo getNombre(); ?>
			<button><a href="Productos/Agregar">Agregar Producto</a></button>
			<br><br>
			<table>
				<thead>
					<td>Id</td>
					<td>Nombre</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td></td>
				</thead>
				<tbody>
					<!-- Dinamico -->
					<?php if($productos!=null):?>
						<?php foreach ($productos->result() as $producto) {?>
							<tr>
								<td><?= $producto->idProducto?></td>
								<td><?= $producto->nombre?></td>
								<td><?= $producto->precio?></td>
								<td><?= $producto->cantidad?></td>
								<td>
									<button>
										<a href="productosController/updateView/<?= $producto->idProducto?>">Editar</a>
									</button>
									<button>
										<a href="productosController/delete/<?= $producto->idProducto?>">Eliminar</a>
									</button>
								</td>
							</tr>
								
						<?php } ?>
					<?php endif?>
					
				</tbody>
			</table>
		</div>