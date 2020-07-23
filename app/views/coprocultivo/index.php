
<?php  require RUTA_APP . '/views/templates/header.php'; 
?>
			<div class="page-header">
                <br>
				<div class=" col-sm-12 text-center">
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; " style="border: 1px solid #2E838C;" role="alert">
					<h4>COPROCULTIVO <i class="zmdi zmdi-eyedropper zmdi-hc-fw"></i></h4> 
					</div>
                </div>
			<div  class=" col-sm-12 text-center" >
			<a href="<?php  echo RUTA_URL; ?>coprocultivo/agregar" class=" btn btn-raised btn-success btn-lg" style="background:  #2EA38F; ">Crear</a>
			</div>
			<form class="form"  >
		<div class=" col-sm-12 text-center  table-responsive " >
		<?php  
		?>
		<table id="table_id3" class="table table-striped" >
		<thead class="text-center">   
   <tr >
			   <th class="text-center">Cliente</th>
			   <th class="text-center">Codigo de atencion</th>
			   <th class="text-center">Fecha de ingreso</th>
			   <th class="text-center">Fecha de reporte</th>
			   <th  class="text-center">Actividad</th>
			
   </tr>
   </thead>

   <tbody class="text-center"> 
   <?php foreach($datos['coprocultivo'] as $coprocultivos) : ?>  
		<tr >
		<td class="text-center"><?php echo $coprocultivos->name_cliente." ". $coprocultivos->apellido_paterno; ?></td>
			   <td class="text-center"><?php echo $coprocultivos->cod_atencion; ?></td>
			   <td class="text-center"><?php echo $coprocultivos->fecha_ingresado; ?></td>
			   <td class="text-center"><?php echo $coprocultivos->fecha_reportado; ?></td>
				<td  > 
				<a  href="<?php echo RUTA_URL;?>coprocultivo/ver/<?php echo $coprocultivos->cod_examen_heces; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #2EA38F; " >Ver</a> 
				<a  href="<?php echo RUTA_URL;?>coprocultivo/editar/<?php echo $coprocultivos->cod_examen_heces; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #03658C; " >Editar</a> 
				<button value="<?php echo $coprocultivos->cod_examen_heces; ?>" class=" btn btn-raised btn-primary btn-sm bt-eliminar" style="background:  #FF5722; " type="button">Eliminar</button>
				</td>
		  </tr>
			   <?php endforeach; ?>
		</tbody>
	</table>
					</div>
				
	</form>		
			
			
			</div>
	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>
	<script type="text/javascript">

var url = <?= json_encode(RUTA_URL) ?>;
	$(document).ready(function(){
	$('.bt-eliminar').on('click', function(){	
		var valor = $(this).val();
		swal({
		  	title: 'Estás seguro de eliminar?',
		  	text: "Los datos se eliminaran permanentemente",
			  type: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#03658C',
		  	cancelButtonColor: '#FF5722',
		  	confirmButtonText: '<i class="zmdi zmdi-delete"></i> Si, Eliminar!',
		  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then(function () {
			var pass = "asd123";
			window.location.href=url+"coprocultivo/eliminar/"+valor+pass+"";
		});
	});
});
</script>



	
	</body>   
	</html>





