<?php  require RUTA_APP . '/views/templates/header.php'; ?>
<div class="col-sm-10 col-sm-push-4">
	<h1>Ocupaciones</h1>
</div>
<div class="row ">
  <div class=" col-sm-8 col-sm-push-2" >
	<table class="table " >
	<thead>
	<tr>
		<th>Codigo</th>
		<th>Ocupacion</th>
		<th>Descripcion</th>
		<th>Acciones</th>
	</tr>
	</thead>
	<tbody>
	 	<?php foreach($datos['articulos'] as $articulo) : ?>
		 <tr>
			<td><?php echo $articulo->cod_ocupacion; ?></td>
			<td><?php echo $articulo->nombre_ocupacion; ?></td>
			<td><?php echo $articulo->descripcion; ?></td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
		 <?php endforeach; ?>
		 </tbody>
	</table>

  </div>
  
</div>

	
<?php  require RUTA_APP . '/views/templates/footer.php'; ?>