
<?php  require RUTA_APP . '/views/templates/header.php'; 

?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left" >
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; " style="border: 1px solid #2E838C;" role="alert">
					<h4>COPROCULTIVO <i class="zmdi zmdi-eyedropper zmdi-hc-fw"></i></h4> 
					</div>
                </div>
				<div class="col-sm-12 "><hr></div>
				</div>
                <form class="form" action="<?php echo RUTA_URL; ?>coprocultivo/editar/<?php echo $datos['coprocultivo']->cod_examen_heces; ?>"  method="post">
		<div class=" col-sm-12 text-center ">
					<h5>DATOS DEL PACIENTE</h5>
					</div>
					<div class="container-fluid text-center">
			<div class="text-center row col-md-12 offset--1" style="padding: 30px 10px;">
					<div class=" col-sm-3">
					<p style="" for=""><b>Paciente  <i style="color:red;">*</i></b></p>
						<div class="form-group row">
						<select name="cliente" style="	width: 100%; height: 100%; overflow: hidden; " class=" mdc-select__native-control" id="prove" required>
							<option  value="<?php echo $datos['coprocultivo']->cod_cliente ?>" selected><?php echo $datos['coprocultivo']->name_cliente.' '.$datos['coprocultivo']->dni; ?>   seleccionado</option>
							<?php foreach($datos['usuarios'] as $paquete) : ?>	
							<option value="<?php echo $paquete->cod_cliente; ?>"  > <?php echo $paquete->name_cliente." ".$paquete->dni; ?></option>
							<?php endforeach; ?>
						</select>	
							</div>
					</div>					
					<div class="col-sm-3 ">
					<p for="">Codigo de atencion<i style="color:red;">*</i></p>
                		<div class="form-group label-floating row">
                                    <input type="text" name="codigo" value="<?php echo $datos['coprocultivo']->cod_atencion; ?>" class="form-control  text-center" maxlength="40" placeholder="Ingrese codigo de atención" required>
                        		</div>
					</div>

					<div class="col-sm-3 text-center " >
					<p class="text-center" for=""><b>Fecha de ingreso  <i style="color:red;">*</i></b></p>
                		<div class="form-group "> 							
						<input id="datepicker"  class="form-control text-center" name="fecha_ingreso" value="<?php echo $datos['coprocultivo']->fecha_ingresado; ?>" width="100%" style=""  required>
					</div>

					</div>
					<div class="col-sm-3 text-center " >
					<p class="text-center" for=""><b>Fecha de reporte  <i style="color:red;">*</i></b></p>
                		<div class="form-group "> 							
						<input id="datepicker2"  class="form-control text-center" name="fecha_reporte" value="<?php echo $datos['coprocultivo']->fecha_reportado; ?>" width="100%" style="" required >
					</div>
					</div>
			<div class="col-sm-12 "><hr></div>
			<div class=" col-sm-12 text-center">
			<h5>COPROCULTIVO COMPLETO</h5>
			</div>	
			<div class="col-sm-4 ">
					<p for=""><b> Consistencia <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input type="text" name="consistencia" value="<?php echo $datos['coprocultivo']->consistencia; ?>" class="form-control  text-center" maxlength="40" placeholder="Ingrese comentario" required>
                        		</div>
					</div>

					<div class="col-sm-4 ">
					<p for=""><b> Color <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input type="text" name="color" value="<?php echo $datos['coprocultivo']->color; ?>" class="form-control  text-center" maxlength="40" placeholder="Ingrese comentario" required>
                        		</div>
					</div>

					<div class="col-sm-4 ">
					<p for=""><b> Reaccion(ph) <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input type="text" name="reaccion_ph" value="<?php echo $datos['coprocultivo']->reaccion_ph; ?>" class="form-control  text-center" maxlength="40" placeholder="Ingrese comentario" required>
                        		</div>
					</div>

					
						<div class="col-sm-6 ">
							<div class=" form-group row custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input " id="moco" name="moco"  value="1" <?php if($datos['coprocultivo']->moco == 1){echo "checked"; } ?>>
						<label class="custom-control-label " for="moco">Moco</label>
							</div>
							</div>

							<div class="col-sm-6 ">
							<div class=" form-group row custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input " id="sangre_macroscopica" name="sangre_macroscopica"  value="1" <?php if($datos['coprocultivo']->sangre_macroscopica == 1){echo "checked"; } ?> >
						<label class="custom-control-label " for="sangre_macroscopica">Sangre macroscopica</label>
							</div>
							</div>

					<div class="col-sm-12 "><hr></div>
					<div class=" col-sm-12 text-center">
					<h5>DIGESTIBILIDAD</h5>
					</div>
					
						
					<div class=" col-sm-6 ">
					<p for=""><b> CELULAS VEGETALES <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="celulas_vegetales" class="custom-select" required>
						<option style="color:blue" value="<?php echo $datos['coprocultivo']->celulas_vegetales; ?>" selected><?php echo $datos['coprocultivo']->celulas_vegetales; ?> seleccionado </option>
                        <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>

					<div class=" col-sm-6 ">
					<p for=""><b> ALMIDONES <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="almidones" class="custom-select" required>
						<option style="color:blue" value="<?php echo $datos['coprocultivo']->almidones; ?>" selected><?php echo $datos['coprocultivo']->almidones; ?> seleccionado </option>
					    <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>

					<div class=" col-sm-6 ">
					<p for=""><b> FIBRAS MUSCULARES <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="fibras_musculares" class="custom-select" required>
                        <option style="color:blue" value="<?php echo $datos['coprocultivo']->fibras_musculares; ?>" selected><?php echo $datos['coprocultivo']->fibras_musculares; ?> seleccionado </option>
					    <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>
					<div class=" col-sm-6 ">
					<p for=""><b> GRASAS NEUTRAS <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="grasas_neutras" class="custom-select" required>
                        <option style="color:blue" value="<?php echo $datos['coprocultivo']->grasas_neutras; ?>" selected><?php echo $datos['coprocultivo']->grasas_neutras; ?> Seleccionado </option>
                        <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>
					<div class=" col-sm-6 ">
					<p for=""><b> JABONES <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="jabones" class="custom-select" required>
                        <option style="color:blue" value="<?php echo $datos['coprocultivo']->jabones; ?>" selected><?php echo $datos['coprocultivo']->jabones; ?> seleccionado </option>
                        <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>
					<div class=" col-sm-6 ">
					<p for=""><b> ACIDOS GRASOS <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="acidos_grasos" class="custom-select" required >
                        <option style="color:blue" value="<?php echo $datos['coprocultivo']->acidos_grasos; ?>" selected><?php echo $datos['coprocultivo']->acidos_grasos; ?> seleccionado </option>
					    <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>
					<div class=" col-sm-6 ">
					<p for=""><b> LEVADURAS <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="levaduras" class="custom-select" required >
                        <option style="color:blue" value="<?php echo $datos['coprocultivo']->levaduras; ?>" selected><?php echo $datos['coprocultivo']->levaduras; ?> seleccionado </option>
					    <option value="NEGATIVO"> NEGATIVO</option>
                        <option value="ESCASOS"> ESCASOS</option>
						<option value="REGULAR"> REGULAR</option>
						<option value="ABUNDANTE"> ABUNDANTE</option>
						</select>
                        		</div>
					</div>
					<div class="col-sm-12 "><hr></div>
					<div class=" col-sm-12 text-center">
					<h5>EXAMEN CITOLOGICO</h5>
					</div>
					<div class="col-sm-3 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="eritrocitos" name="eritrocitos"  value="1"   <?php if($datos['coprocultivo']->eritrocitos == 1){echo "checked"; } ?> >
				<label class="custom-control-label " for="eritrocitos">Eritrocitos</label>
					</div>
					</div>
					<div class="col-sm-3 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="leucocitos" name="leucocitos"  value="1" <?php if($datos['coprocultivo']->leucocitos == 1){echo "checked"; } ?>>
				<label class="custom-control-label " for="leucocitos">Leucocitos</label>
					</div>
					</div>
					<div class="col-sm-3 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="celulas_epiteliales" name="celulas_epiteliales"  value="1" <?php if($datos['coprocultivo']->celulas_epiteliales == 1){echo "checked"; } ?>>
				<label class="custom-control-label " for="celulas_epiteliales">Celulas epiteliales</label>
					</div>
					</div>
					<div class="col-sm-3 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="inv_parasitos" name="inv_parasitos"  value="1" <?php if($datos['coprocultivo']->inv_parasitos == 1){echo "checked"; } ?> >
				<label class="custom-control-label " for="inv_parasitos">Investigación de paracitos</label>
					</div>
					</div>

			<div class="col-sm-12 "><hr></div>
			<div class=" col-sm-12">
			<h5>MICROSCOPICA</h5>
			</div>

			<div class="col-sm-4 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="resultado" name="resultado"  value="1" <?php if($datos['coprocultivo']->resultado == 1){echo "checked"; } ?> >
				<label class="custom-control-label " for="resultado">Helicobacter Pylori</label>
					</div>
					</div>



					<div class="col-sm-4 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="sangre_oculta" name="sangre_oculta"  value="1" <?php if($datos['coprocultivo']->sangre_oculta == 1){echo "checked"; } ?> >
				<label class="custom-control-label " for="sangre_oculta">Sangre oculta</label>
					</div>
					</div>


					<div class="col-sm-4 ">
					
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input " id="transferrina" name="transferrina"  value="1" <?php if($datos['coprocultivo']->transferrina == 1){echo "checked"; } ?> >
				<label class="custom-control-label " for="transferrina">Transferrina</label>
					</div>
					</div>


					<div class=" col-sm-12 "><hr></div>

					<div class=" col-sm-12 text-center">
                    <input type="submit" value="Editar analisis " class="btn btn-raised btn-success" style="background: #03658C;" >
                    
							</div>
			</div>
		
	</form>		
			</div>
			</div>
			</div>
			</div>

			<script>	
	$('#datepicker').datetimepicker({
		format: 'yyyy-mm-dd  hh:MM:ss',
		autoclose: true
		});
		
		
	</script>
		<script>	
	$('#datepicker2').datetimepicker({
		format: 'yyyy-mm-dd  hh:MM:ss',
		autoclose: true
		});
    </script>



	
	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>	

	
	 <script>

			
	 var config = {
    decrementButton: "<i class='zmdi zmdi-long-arrow-down'></i>", // button text
    incrementButton: "<i class='zmdi zmdi-long-arrow-up'></i>", // ..
    groupClass: "", // css class of the resulting input-group
    buttonsClass: " btn-primary",
    buttonsWidth: "1.5rem",
	textAlign: "center",

    autoDelay: 500, // ms holding before auto value change
    autoInterval: 100, // speed of auto value change
    boostThreshold: 1, // boost after these steps
    boostMultiplier: "auto", // you can also set a constant number as multiplier
    locale: 1 // the locale for number rendering; if null, the browsers language is used
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





