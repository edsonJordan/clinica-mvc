
<?php  require RUTA_APP . '/views/templates/header.php'; 
//col-md-3 offset-md-2
?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left" >
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; "  role="alert">
					<h4>HEMOGRAMA COMPLETO <i class="zmdi zmdi-invert-colors zmdi-hc-fw"></i></h4> 
					</div>
					
                </div>
				<div class="col-sm-12 "><hr></div>
				</div>
		<form class="form" action="<?php echo RUTA_URL; ?>hemograma/agregar"  method="post">
		<div class=" col-sm-12 text-center ">
					<h5>DATOS DEL PACIENTE</h5>
					</div>
					<div class="container-fluid text-center">
			<div class="text-center row col-md-12 offset--1" style="padding: 30px 10px;">
					<div class=" col-sm-3">
					<p style="" for=""><b>Paciente  <i style="color:red;">*</i></b></p>
						<div class="form-group row">
						<select name="cliente" style="	width: 100%; height: 100%; overflow: hidden; " class=" mdc-select__native-control" id="prove" required>
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
			<h5>HEMOGRAMA COMPLETO</h5>
			</div>
		
			<div class="col-sm-6 text-center " >
					<p class="text-center" for=""><b>Hematocrito<i style="color:red;">*</i></b></p>
                		<div class="form-group row "> 
							<input class="form-control  text-center"  style="width: 100%" name="hematocrito"   data-suffix="%"  data-decimals="1" min="0" max="100" step="1" type="number"  required>
                        </div>
					</div>

						<div class="col-sm-6 text-center " >
					<p class="text-center " for=""><b>Hemoglobina  <i style="color:red;">*</i></b></p>
                		<div class="form-group row "> 
							<input class="form-control  text-center" style="width: 100%" name="hemoglobina" data-suffix="gr/dl"  data-decimals="2" min="0" max="30" step="0.1" type="number" required>
                        </div>
					</div>

					
					<div class="col-sm-6 ">
					<p for=""><b>Recuento leucocitos <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="lecucocitos" data-suffix="ml/mmc" data-decimals="3" min="0" max="10" step="0.1" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>VSG<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="vsg" data-suffix="mm/h"  data-decimals="2" min="0" max="10" step="0.1" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-12 "><hr></div>
					<div class=" col-sm-12 text-center">
					<h5>FORMULA LEUCOCITARIA</h5>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>Metamielocitos <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="metamielocitos" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>Abastonados<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="abastonados" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>
					

					<div class="col-sm-6 ">
					<p for=""><b>Segmentados <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="segmentados" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>Neutrofilos<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="neotrofilos" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>

					

					<div class="col-sm-6 ">
					<p for=""><b>Eosinofilos <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="eosinofilos" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>Basofilos<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="basofilos" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>

					

					<div class="col-sm-6 ">
					<p for=""><b>Monocitos <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="monocitos" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>
					<div class="col-sm-6 ">
					<p for=""><b>Linfocitos<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="linfocitos" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>


					<div class="col-sm-6 ">
					<p for=""><b>Linfocitos activados <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" style="width: 100%" name="linfocitos_activados" data-suffix="%"  data-decimals="1" min="0" max="100" step="0.1" type="number" required >
                        		</div>
					</div>

			<div class="col-sm-12 "><hr></div>
			<div class=" col-sm-12">
			<h5>SERIE ROJA</h5>
			</div>


			<div class="col-sm-3 ">
		
					<div class=" form-group row custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="hipocromia" name="hipocromia"  value="1">
				<label class="custom-control-label" for="hipocromia">Hipocromia</label>
					</div>
					</div>
					

					<div class="col-sm-3 ">
				
				<div class=" form-group row custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="microcitosis" name="microcitosis" value="1" >
			<label class="custom-control-label" for="microcitosis">Microcitosis</label>
				</div>
				</div>


				<div class="col-sm-3 ">
				
				<div class=" form-group row custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="anisocitosis" name="anisocitosis" value="1" >
			<label class="custom-control-label" for="anisocitosis">Anisocitosis</label>
				</div>
				</div>

				<div class="col-sm-3 ">
				
				<div class=" form-group row custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="macrocitosis" name="macrocitosis"  value="1" >
			<label class="custom-control-label" for="macrocitosis">Macrocitosis</label>
				</div>
				</div>


				<div class="col-sm-3 ">
				
				<div class=" form-group row custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="crenocitosis" name="crenocitosis" value="1" >
			<label class="custom-control-label" for="crenocitosis">Crenocitosis</label>
				</div>
				</div>


				<div class="col-sm-3 ">
				
				<div class=" form-group row custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="poliquilocitosis" name="poliquilocitosis" value="1" >
			<label class="custom-control-label" for="poliquilocitosis">Poliquilocitosis</label>
				</div>
				</div>

				<div class="col-sm-3 ">
				<div class=" form-group row custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="policromatofilia" name="policromatofilia" value="1" >
			<label class="custom-control-label" for="policromatofilia">Policromatofilia</label>
				</div>
				</div>
				<div class="col-sm-12 "><br></div>

				<div class="col-sm-6 ">
					<p for=""><b>Normoblastos<i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input class="form-control  text-center" type="number" name="normoblastos" style="width: 100%" data-suffix="%" data-decimals="1" min="0" max="100" step="0.1"  required>
                          
                        		</div>
					</div>

				<div class="col-sm-6 ">
					<p for=""><b> Porcentaje de normoblastos <i style="color:red;">*</i></b></p>
                		<div class="form-group row">
						<input type="text" name="detalle_nomoblastos" class="form-control  text-center" maxlength="40" placeholder="Ingrese comentario" required>
                        		</div>
					</div>
					
					<div class="col-sm-12 "><hr></div>
							<div class=" col-sm-12 text-center">
							<h5>SERIE BLANCA</h5>
							</div>
							<div class=" col-sm-12 "><br></div>
					<div class=" col-sm-6 ">
					<p for=""><b> SERIE PLAQUETARIA <i style="color:red;">*</i></b></p>
                		<div class="form-group row text-center  ">
						<input class="form-control  text-center" name="serie_plaquetaria" style="width: 100%" data-suffix="%"  data-decimals="3" min="0" max="400" step="0.1" type="number" required >
                        		</div>
					</div>

					<div class=" col-sm-12 "><hr></div>

					<div class=" col-sm-12 text-center">
					<input type="submit" value="Agregar analisis " class="btn btn-raised btn-success btn-lg" style="background: #03658C;">
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





