<?php  require RUTA_APP . '/views/templates/header.php'; 
?>
			<div class="page-header">
                <br>
				<div class=" col-sm-12 text-center">
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; "  role="alert">
					<h4>HEMOGRAMA COMPLETO <i class="zmdi zmdi-invert-colors zmdi-hc-fw"></i></h4> 
					</div>
                </div>
			<div  class=" col-sm-12 text-center" >
			<a href="<?php  echo RUTA_URL; ?>hemograma/agregar" class=" btn btn-raised btn-success btn-lg" style="background:  #2EA38F; ">Crear</a>
			</div>
			<form class="form" action="post" >
		<div class=" col-sm-12 text-center  table-responsive "  >
		<?php  
		?>
		<table id="table_id" class="table table-striped"  >
		<thead class="text-center">   
   <tr >   
	   			<th class="text-center">codigo</th>
			   <th class="text-center">Cliente</th>
			   <th class="text-center">Codigo de atencion</th>
			   <th class="text-center">Fecha de ingreso</th>
			   <th class="text-center">Fecha de reporte</th>
			   <th  class="text-center">Actividad</th>
			
   </tr>
   </thead>

   <tbody class="text-center"> 
   <?php foreach($datos['hemograma'] as $hemograma) : ?>  
		<tr >
		<td class="text-center"><?php echo $hemograma->cod_examen_hemograma; ?></td>
			   <td class="text-center"><?php echo $hemograma->name_cliente." ". $hemograma->apellido_paterno; ?></td>
			   <td class="text-center"><?php echo $hemograma->cod_atencion; ?></td>
			   <td class="text-center"><?php echo $hemograma->fecha_ingresado; ?></td>
			   <td class="text-center"><?php echo $hemograma->fecha_reportado; ?></td>
				<td  > 
				<a  href="<?php echo RUTA_URL;?>hemograma/ver/<?php echo $hemograma->cod_examen_hemograma; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #2EA38F; " >Ver</a> 
				<a  href="<?php echo RUTA_URL;?>hemograma/editar/<?php echo $hemograma->cod_examen_hemograma; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #03658C; " >editar</a> 
				<button value="<?php echo $hemograma->cod_examen_hemograma; ?>" class=" btn btn-raised btn-primary btn-sm bt-eliminar" style="background:  #FF5722; " type="button">Eliminar</button>
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
			window.location.href=url+"hemograma/eliminar/"+valor+pass+"";
		});
	});
});
</script>
	</body>   
	</html>



