
<?php  require RUTA_APP . '/views/templates/header.php'; 
//col-md-3 offset-md-2
?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left" >
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; "  role="alert">
					<h4>UROANÁLISIS COMPLETO <i class="zmdi zmdi-eye"></i></h4> 
                    </div>
                 
		<div class="text-center  table-responsive " >
        <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Datos del paciente </h6> 
                    </div>
		<table  class="table table-striped  col-sm-12" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left"  style="color:#2EA38F;">   
   <tr >
			   <th class="">Paciente          </th>
			   <th class="">Codigo de atención</th>
			   <th class="">Fecha de ingreso  </th>
			   <th class="">Fecha de reporte  </th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
		<tr >
			   <td class=" "><?php  echo $datos['uroanalisis']->name_cliente.' '.$datos['uroanalisis']->apellido_paterno.' '.$datos['uroanalisis']->apellido_materno; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->cod_atencion; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->fecha_ingresado; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->fecha_reportado; ?></td>
				
		  </tr>
			   <?php ?>
		</tbody>
    </table>

		</div>
    <div class="text-center  table-responsive " >
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Perfil lipidico </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left"  style="color:#2EA38F;">   
   <tr >
			   <th class="">colesterol     </th>
			   <th class="">HDL Colesterol </th>
			   <th class="">VLDL Colesterol</th>
			   <th class="">Trigliceridos</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
			   <td class=""><?php  echo $datos['uroanalisis']->colesterol.' mg/dL'; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->hdl_colesterol.' MG/dL'; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->vldl_colesterol.' mg/dL'; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->trigliceridos.' mg/dl'; ?></td>
				
		  </tr>
			   <?php ?>
		</tbody>
	</table>
				
				
		
                </div>
			
                <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Examen macroscopico </h6> 
                    </div>
    <table  class="table table-striped  col-sm-12" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left"  style="color:#2EA38F;">   
   <tr >
			   <th class="">Color</th>
			   <th class="">Aspecto</th>
	  
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
			   <td class=""><?php echo $datos['uroanalisis']->color; ?></td>
			   <td class=""><?php echo $datos['uroanalisis']->aspecto; ?></td>

				
		  </tr>
			   <?php ?>
		</tbody>
    </table>

    <div class="text-center  table-responsive " >
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem; width: 100%; "  role="alert">
					<h6>Examen bioquimico </h6> 
                    </div>

    <table  class="table table-striped " style="border: 1px solid #DEE2E6; " >
		<thead class="text-left"  style="color:#2EA38F;">   
   <tr >
			   <th >PH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			   <th >Glucosa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      </th>
			   <th >Bilirrubina&nbsp;&nbsp;  </th>
               <th >Cetonicos&nbsp;&nbsp;&nbsp;&nbsp;    </th>	  
               <th >Proteinas&nbsp;&nbsp;&nbsp;&nbsp;    </th>	
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
               <td class=""><?php echo $datos['uroanalisis']->ph; ?></td>
               <td  ><?php 
                if($datos['uroanalisis']->glucosa == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
               <td ><?php 
                if($datos['uroanalisis']->bilirrubina == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
               <td  ><?php 
                if($datos['uroanalisis']->cuerpos_cetonicos == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
                <td ><?php 
                if($datos['uroanalisis']->proteinas == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
	
				
		  </tr>
			   <?php ?>
		</tbody>
    </table>

    </div>
    <div class="text-center  table-responsive " >	
        	
    <table  class="table table-striped " style="border: 1px solid #DEE2E6; width:100%" >
		<thead class="text-left"  style="color:#2EA38F;">   
   <tr >
			   
           
               <th class="">Urobilinogeno</th>
               <th class="">Nitritos     </th>
               <th class="">Hemoglobina  </th> 
               <th class="">Sangre       </th>	 
               <th class="">Lecucocitos  </th>
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >

        <td class=""><?php 
                if($datos['uroanalisis']->urobilinogeno == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
               <td  ><?php 
                if($datos['uroanalisis']->nitritos == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
                 <td  class=""><?php 
                if($datos['uroanalisis']->hemoglobina == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
                <td  class=""><?php 
                if($datos['uroanalisis']->sangre == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
               <td  class=""><?php 
                if($datos['uroanalisis']->leucocitos_bioqui == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
 
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" >   
   <tr >
			  
         
   </tr>
   </thead>
   <tbody class="text-left" > 
 
		<tr >

       
		  </tr>
			   <?php ?>
		</tbody>
    </table>
               
    
    <div class="text-center  table-responsive " >	

                
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem; width: 100%;"  role="alert">
					<h6>Examen microscopico </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left"  style="color:#2EA38F;">   
   <tr >
			   <th>Lecucocitos</th>
			   <th>Hematies</th>
			   <th>Celulas</th>
               <th>Germenes</th>
               <th> <b >Glucosa basal</b> </th>

   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
        <td ><?php echo $datos['uroanalisis']->leucocitos_micro; ?></td>
        <td ><?php echo $datos['uroanalisis']->hematies; ?></td>
        <td ><?php echo $datos['uroanalisis']->celulas; ?></td>
        <td ><?php echo $datos['uroanalisis']->germenes; ?></td>   
        <td ><?php echo $datos['uroanalisis']->glucosa_basal. ' mg/dL'; ?></td>   
		  </tr>
			   <?php ?>
		</tbody>
    </table>


    </div>






		
                </div>
			
		
			</div>
                
            



            



            













            </div>
            

            


	
	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>		
	</body>   
	</html>





