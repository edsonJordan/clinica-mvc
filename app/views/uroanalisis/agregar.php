
<?php  require RUTA_APP . '/views/templates/header.php'; 
//col-md-3 offset-md-2
?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left" >
				<div  class="alert alert-raised alert-primary text-left"  style ="background : #2E838C;     color: white; " style="border: 1px solid #2E838C;" role="alert">
					<h4>UROANÁLISIS  COMPLETA <i class="zmdi zmdi-drink zmdi-hc-fw"></i></h4> 
					</div>
                </div>
				<div class="col-sm-12 "><hr></div>
				</div>
		<form class="form" action="<?php echo RUTA_URL; ?>uroanalisis/agregar"  method="post">
		<div class=" col-sm-12 text-center ">
					<h5>DATOS DEL PACIENTE</h5>
					</div>
					<div class="container-fluid text-center">
			<div class="text-center row col-md-12 offset--1" style="padding: 30px 10px;">
					<div class=" col-sm-3">
					<p style="" for=""><b>Paciente  <i style="color:red;">*</i></b></p>
						<div class="form-group row">
						<select name="cliente" style="	width: 100%; height: 100%; overflow: hidden; " class=" custom-select" id="prove" required>
							<option  value=""   >Seleccione un Paciente</option>
							<?php foreach($datos['usuarios'] as $paquete) : ?>	
							<option value="<?php echo $paquete->cod_cliente; ?>"  > <?php echo $paquete->name_cliente." ".$paquete->dni; ?></option>
							<?php endforeach; ?>
						</select>	
							</div>
					</div>					
					<div class="col-sm-3 ">
					<p for="">Codigo de atencion<i style="color:red;">*</i></p>
                		<div class="form-group label-floating row">
                                    <input type="text" name="codigo" class="form-control  text-center" maxlength="40" placeholder="Ingrese codigo de atención" required>
                        		</div>
					</div>

					<div class="col-sm-3 text-center " >
					<p class="text-center" for=""><b>Fecha de ingreso  <i style="color:red;">*</i></b></p>
                		<div class="form-group "> 							
						<input id="datepicker"  class="form-control text-center" name="fecha_ingreso" width="100%" style=""  required>
					</div>

					</div>
					<div class="col-sm-3 text-center " >
					<p class="text-center" for=""><b>Fecha de reporte  <i style="color:red;">*</i></b></p>
                		<div class="form-group "> 							
						<input id="datepicker2"  class="form-control text-center" name="fecha_reporte" width="100%" style="" required >
					</div>
					</div>
			<div class="col-sm-12 "><hr></div>
			<div class=" col-sm-12 text-center">




            
			<h5>PERFIL LIPIDICO</h5>
			</div>
		
			<div class="col-sm-6 text-center " >
					<p class="text-center" for=""><b>Colesterol total<i style="color:red;">*</i></b></p>
                		<div class="form-group row "> 
							<input class="form-control  text-center"  style="width: 100%" name="colesterol"   data-suffix="mg/dL"  min="0" max="300" step="1" type="number"  required>
                        </div>
					</div>

						<div class="col-sm-6 text-center " >
					<p class="text-center " for=""><b>HDL Colesterol  <i style="color:red;">*</i></b></p>
                		<div class="form-group row "> 
							<input class="form-control  text-center" style="width: 100%" name="hdl_colesterol" data-suffix="mg/dL"  min="0" max="80"  type="number" required>
                        </div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>VLDL Colesterol <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="vldl_colesterol" data-suffix="mg/dL"  min="0" max="140" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>Trigliceridos<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="trigliceridos" data-suffix="mg/dl"  min="0" max="150" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-12 "><hr></div>
					<div class=" col-sm-12 text-center">
					<h5>EXAMEN MACROSCOPICO</h5>
                    </div>      
                    <div class="col-sm-6 ">
					<p for="">Color<i style="color:red;">*</i></p>
                		<div class="form-group label-floating row">
                                    <input type="text" name="color" class="form-control  text-center" maxlength="50" placeholder="Ingrese detalle fisico" required>
                        		</div>
                    </div>
                    <div class="col-sm-6 ">
					<p for="">Aspecto<i style="color:red;">*</i></p>
                		<div class="form-group label-floating row">
                                    <input type="text" name="aspecto" class="form-control  text-center" maxlength="30" placeholder="Ingrese detalle fisico" required>
                        		</div>
                    </div>
                    

                    <div class="col-sm-12 "><hr></div>
					<div class=" col-sm-12 text-center">
					<h5>EXAMEN BIOQUIMICO</h5>
                    </div>
					

					<div class="col-sm-6 ">
					<p for=""><b>Densidad <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="densidad"  data-decimals="3" min="0" max="100" step="0.01" type="number" required >
                        		</div>
					</div>
				    <div class="col-sm-6 ">
					<p for="">PH<i style="color:red;">*</i></p>
                		<div class="form-group label-floating row">
                                    <input type="text" name="ph" class="form-control  text-center" maxlength="30" placeholder="Ingrese detalle" required>
                        		</div>
                    </div>
                    <div class="col-sm-4 ">
		
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="glucosa" name="glucosa"  value="1">
                    <label class="custom-control-label float-left" for="glucosa">Glucosa</label>
                        </div>
                        </div>
                        <div class="col-sm-4  ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="bilirrubina" name="bilirrubina"  value="1">
                    <label class="custom-control-label float-left" for="bilirrubina">Bilirrubina</label>
                        </div>
                        </div>
						<div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cuerpo" name="cuerpo"  value="1">
                    <label class="custom-control-label float-left" for="cuerpo">Cuerpo Cetonico</label>
                        </div>
                        </div>
                        <div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="proteinas" name="proteinas"  value="1">
                    <label class="custom-control-label float-left" for="proteinas">Proteinas</label>
                        </div>
                        </div>
                        <div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="urobilinogeno" name="urobilinogeno"  value="1">
                    <label class="custom-control-label float-left" for="urobilinogeno">Urobilinogeno</label>
                        </div>
                        </div>
                        <div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="nitritos" name="nitritos"  value="1">
                    <label class="custom-control-label float-left" for="nitritos">Nitritos</label>
                        </div>
                        </div>
                        <div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="hemoglobina" name="hemoglobina"  value="1">
                    <label class="custom-control-label float-left" for="hemoglobina">Hemoglobina</label>
                        </div>
                        </div>
                        <div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="sangre" name="sangre"  value="1">
                    <label class="custom-control-label float-left" for="sangre">Sangre</label>
                        </div>
                        </div>
                        <div class="col-sm-4 ">
                        
                        <div class=" form-group row custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="leucocitos" name="leucocitos_bioqui"  value="1">
                    <label class="custom-control-label float-left" for="leucocitos">Leucocitos</label>
                        </div>
                        </div>
                    
					

			<div class="col-sm-12 "><hr></div>
			<div class=" col-sm-12">
			<h5>EXAMEN MICROSCIPICO</h5>
			</div>


				
					<div class=" col-sm-6 ">
					<p for=""><b> LEUCOCITOS <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<input class="form-control  text-center" name="leucocitos_micro" style="width: 100%"  type="text" required >
                        		</div>
					</div>



					<div class=" col-sm-6 ">
					<p for=""><b> HEMATIES <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<input class="form-control  text-center" name="hematies" style="width: 100%"  type="text" required >
                        		</div>
					</div>


					
					<div class=" col-sm-4 ">
					<p for=""><b> CELULAS <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select style="color: #2E838C;" name="celulas" class="custom-select">
						<option selected>Seleccione una opción</option>
						<option value="ESCASOS">ESCASOS</option>
						<option value="REGULAR">REGULAR</option>
						<option value="ABUNDANTE">ABUNDANTE</option>
						</select>
                        		</div>
					</div>

					
					<div class=" col-sm-4 ">
					<p for=""><b> GERMENES <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<select name="germenes" class="custom-select" style="color: #2E838C;" required>
						<option value="" selected>Seleccione una opción</option>
						<option value="ESCASOS">ESCASOS</option>
						<option value="REGULAR">REGULAR</option>
						<option value="ABUNDANTE">ABUNDANTE</option>
						</select>
                        		</div>
					</div>

					<div class="col-sm-4 ">
					<p for=""><b>GLUCOSA BASAL <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="glucosa_colesterol" data-suffix="mg/dL"  min="0" max="140" type="number" required >
                        		</div>
					</div>	
					<div class=" col-sm-12 "><hr></div>

					<div class=" col-sm-12 text-center">
					<input type="submit" value="Agregar analisis " class="btn btn-raised btn-success" style="background: #03658C;" >
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





