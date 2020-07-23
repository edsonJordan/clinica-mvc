
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
			</div>
			<form class="form"  >
		<div class=" col-sm-12 text-center  table-responsive " >
		<?php  

		?>
		<table id="table_id" class="table table-hover" >
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
   <?php foreach($datos['buscar'] as $hemograma) : ?>  
		<tr >
			   <td class="text-center"><?php echo $hemograma->name_cliente." ". $hemograma->apellido_paterno; ?></td>
			   <td class="text-center"><?php echo $hemograma->cod_atencion; ?></td>
			   <td class="text-center"><?php echo $hemograma->fecha_ingresado; ?></td>
			   <td class="text-center"><?php echo $hemograma->fecha_reportado; ?></td>
				<td  > 
				<a  href="<?php echo RUTA_URL;?>hemograma/ver/<?php echo $hemograma->cod_examen_hemograma; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #2EA38F; " >Ver</a> </td>	
				</td>
		  </tr>
			   <?php endforeach; ?>
		</tbody>
	</table>
					</div>
				
	</form>		
			
			
			</div>
			<div class="col-sm-12 "><hr></div>



			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>


			<div class="page-header">
                <br>
				<div class=" col-sm-12 text-center">
				<div  class="alert alert-raised alert-primary text-left"  style ="background : #2E838C;     color: white; " style="border: 1px solid #2E838C;" role="alert">
					<h4>UROANÁLISIS  COMPLETA <i class="zmdi zmdi-drink zmdi-hc-fw"></i></h4> 
					</div>
                </div>
			<div  class=" col-sm-12 text-center" >
			</div>
			<form class="form"  >
		<div class=" col-sm-12 text-center  table-responsive " >
		<?php  
		?>
		<table id="table_id2" class="table table-hover" >
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
   <?php foreach($datos['buscar2'] as $uroanali) : ?>  
		<tr >
			   <td class="text-center"><?php echo $uroanali->name_cliente." ".$uroanali->apellido_paterno; ?></td>
			   <td class="text-center"><?php echo $uroanali->cod_atencion; ?></td>
			   <td class="text-center"><?php echo $uroanali->fecha_ingresado; ?></td>
			   <td class="text-center"><?php echo $uroanali->fecha_reportado; ?></td>
				<td  > 
				<a  href="<?php echo RUTA_URL;?>uroanalisis/ver/<?php echo $uroanali->cod_examen_orina; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #2EA38F; ">Ver</a> </td>	
				</td>
		  </tr>
			   <?php endforeach; ?>
		</tbody>
	</table>
					</div>
				
	</form>		
	</div>
	<div class="col-sm-12 "><hr></div>
	<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			<div class="col-sm-12 "><br></div>
			
			<div class="page-header">
                <br>
				<div class=" col-sm-12 text-center">
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; " style="border: 1px solid #2E838C;" role="alert">
					<h4>COPROCULTIVO <i class="zmdi zmdi-eyedropper zmdi-hc-fw"></i></h4> 
					</div>
                </div>
			<div  class=" col-sm-12 text-center" >
			</div>
			<form class="form"  >
		<div class=" col-sm-12 text-center  table-responsive " >
		<?php  
		?>
		<table id="table_id3" class="table table-hover" >
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
   <?php foreach($datos['buscar3'] as $coprocultivos) : ?>  
		<tr >
		<td class="text-center"><?php echo $coprocultivos->name_cliente." ". $coprocultivos->apellido_paterno; ?></td>
			   <td class="text-center"><?php echo $coprocultivos->cod_atencion; ?></td>
			   <td class="text-center"><?php echo $coprocultivos->fecha_ingresado; ?></td>
			   <td class="text-center"><?php echo $coprocultivos->fecha_reportado; ?></td>
				<td  > 
				<a  href="<?php echo RUTA_URL;?>coprocultivo/ver/<?php echo $coprocultivos->cod_examen_heces; ?>" class=" btn btn-raised btn-primary btn-sm" style="background:  #2EA38F; " >Ver</a> </td>	
				</td>
		  </tr>
			   <?php endforeach; ?>
		</tbody>
	</table>
					</div>
				
	</form>		
			
			
			</div>

			<div class="col-sm-12 "><hr></div>
	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>


	 <script>
	 

	 var config = {
    decrementButton: "<strong>-</strong>", // button text
    incrementButton: "<strong>+</strong>", // ..
    groupClass: "", // css class of the resulting input-group
    buttonsClass: "btn-outline-secondary",
    buttonsWidth: "0.5rem",
    textAlign: "center",
    autoDelay: 500, // ms holding before auto value change
    autoInterval: 100, // speed of auto value change
    boostThreshold: 10, // boost after these steps
    boostMultiplier: "auto", // you can also set a constant number as multiplier
    locale: 3 // the locale for number rendering; if null, the browsers language is used
}

$("input[type='number']").inputSpinner(config);
	 </script>
	<script type="text/javascript">
				$('#prove').select2({    
				
				language: {
					noResults: function() {
					return "No hay resultado";        
					},
					searching: function() {
					return "Buscando..";
					}
				}
				});
	</script>
	
	</body>   
	</html>





