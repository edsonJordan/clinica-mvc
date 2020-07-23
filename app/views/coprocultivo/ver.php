
<?php  require RUTA_APP . '/views/templates/header.php'; 
//col-md-3 offset-md-2
?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left" >
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; "  role="alert">
					<h4>COPROCULTIVO COMPLETO <i class="zmdi zmdi-eye"></i></h4> 
                    </div>
                 
		<div class="text-center  table-responsive " >
        <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Datos del paciente </h6> 
                    </div>
		<table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Paciente</th>
			   <th >Codigo de atención</th>
			   <th >Fecha de ingreso</th>
			   <th >Fecha de reporte</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
		<tr >
			   <td ><?php  echo $datos['coprocultivo']->name_cliente.' '.$datos['coprocultivo']->apellido_paterno.' '.$datos['coprocultivo']->apellido_materno; ?></td>
			   <td ><?php echo $datos['coprocultivo']->cod_atencion; ?></td>
			   <td ><?php echo $datos['coprocultivo']->fecha_ingresado; ?></td>
			   <td ><?php echo $datos['coprocultivo']->fecha_reportado; ?></td>
				
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    </div>
    <div class="text-center  table-responsive " >
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Examen macrocospico </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Consistencia </th>
			   <th >Color</th>
			   <th >Moco</th>
			   <th >Sangre macroscopica</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
		<tr >
			   <td ><?php  echo $datos['coprocultivo']->consistencia; ?></td>
               <td ><?php echo $datos['coprocultivo']->color; ?></td>
               <td ><?php 
                if($datos['coprocultivo']->moco == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
                <td ><?php 
                if($datos['coprocultivo']->sangre_macroscopica == 0){
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
                <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Digestibilidad </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Celulas vegetales</th>
			   <th >Almidones</th>
			   <th >Fibras musculares</th>
			   <th >Grasas neutras</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
        <td ><?php 
                echo $datos['coprocultivo']->celulas_vegetales;
               ?></td>
      <td ><?php 
               echo $datos['coprocultivo']->almidones;
               ?></td>
                 <td ><?php 
                echo $datos['coprocultivo']->fibras_musculares;
               ?></td>
                     <td ><?php 
               echo $datos['coprocultivo']->grasas_neutras;
               ?></td>
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    </div>
    <div class="text-center  table-responsive " >
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >        <th>Reaccion PH</th>
			   <th >Jabones</th>
			   <th >Acidos grasos</th>
			   <th >Levaduras</th>
            	  
                
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
        <td ><?php 
               echo $datos['coprocultivo']->reaccion_ph;
               ?></td>
	
        <td ><?php 
               echo $datos['coprocultivo']->jabones;
               ?></td>
	<td ><?php 
               echo $datos['coprocultivo']->acidos_grasos;
               ?></td>
               
				<td ><?php 
                echo $datos['coprocultivo']->levaduras;
               ?></td> 
			
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    
    </div>


    
    <div class="text-center  table-responsive " >
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Examen citologico </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Eritrocitos</th>
			   <th >Lecucocitos</th>
			   <th >Celulas epiteliales</th>
               <th >Parasitos</th>

   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
        <td ><?php 
                if($datos['coprocultivo']->eritrocitos == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>

                <td ><?php 
                if($datos['coprocultivo']->leucocitos == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
            
            <td ><?php 
                if($datos['coprocultivo']->celulas_epiteliales == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>

                <td ><?php 
                if($datos['coprocultivo']->inv_parasitos == 0){
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
<div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
                <h6>HELICOBACTER PYLORI EN HECES </h6> 
    </div>
    <div class="text-center  table-responsive " >
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-center" style="color:#2EA38F;">   
   <tr >
               <th >Resultado</th>	    	
   </tr>
   </thead>
   <tbody class="text-center" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
		
        <td ><?php 
                if($datos['coprocultivo']->resultado == 0){
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
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>SANGRE OCULTA + TRANSFERRINA </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-center" style="color:#2EA38F;">   
   <tr >
               <th >Sangre ocultas</th>	
               <th >Transferrina</th>	
   </tr>
   </thead>
   <tbody class="text-center" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >  
        <td ><?php 
                if($datos['coprocultivo']->sangre_oculta == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>   
             <td ><?php 
                if($datos['coprocultivo']->transferrina == 0){
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
			</div>            
            </div>
	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>		
	</body>   
	</html>





