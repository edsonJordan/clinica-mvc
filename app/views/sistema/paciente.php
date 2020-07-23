
<?php  require RUTA_APP . '/views/templates/header.php'; 
?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left"  >
				<div  class="alert alert-raised alert-primary text-center"  style ="background :#2E838C; color: white; " style="border: 1px solid #2E838C;" role="alert">
					<h4>Usuarios registrados</h4>
					</div>
                </div>	
				</div>
		<form class="form"  >
		<div class=" col-sm-12 text-center  table-responsive " >
		<?php  
		?>
		<table id="table_id" class="table table-striped" >
		<thead class="text-center">   
   <tr >
			   <th class="text-center">Cliente</th>
			   <th class="text-center">Apellido paterno</th>
			   <th class="text-center">Apellido materno</th>
			   <th class="text-center">Estado</th>
			   <th class="text-center">DNI</th>
			   <th  class="text-center">Actividad</th>		
   </tr>
   </thead>
   <tbody class="text-center"> 
   <?php foreach($datos['usuarios'] as $usuario) : ?>  
		<tr >
			   <td ><?php echo $usuario->name_cliente; ?></td>
			   <td ><?php echo $usuario->apellido_paterno; ?></td>
			   <td ><?php echo $usuario->apellido_materno;?></td>
			   <td ><?php 
			$dato =  $this->usuarioModelo->vercantidadanalisis($usuario->cod_cliente);		
			if($dato->hemograma <> 0 or $dato->orina <> 0 or $dato->heces <> 0 ){
				echo " <p style='color:green;'> paciente<p>";
			}
			else{
				echo " <p style='color:blue;'> cliente<p>";
			}			 	
			 ?></td>
			   <td ><?php echo $usuario->dni; ?></td>
				<td colspan=""> 
				<a href="<?php echo RUTA_URL;?>usuarios/ver/<?php echo $usuario->cod_cliente; ?>" class=" btn btn-raised btn-primary btn-sm" style="background :#2E838C;" >Ver</a> </td>
				</td>
		  </tr>
			   <?php endforeach; ?>
		</tbody>
	</table>
					</div>
				
	</form>		
			
			
			</div>

	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>	

	</body>   
	</html>





