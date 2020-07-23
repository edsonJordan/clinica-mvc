
<?php  require RUTA_APP . '/views/templates/header.php'; 
//col-md-3 offset-md-2
?>
			<div class="page-header" >
                <br>
				<div class=" col-sm-12 text-left" >
				<div  class="alert alert-raised alert-primary text-left"  style ="background :#2E838C; color: white; "  role="alert">
					<h4>HEMOGRAMA COMPLETO <i class="zmdi zmdi-eye"></i></h4> 
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
			   <td ><?php  echo $datos['hemograma']->name_cliente.' '.$datos['hemograma']->apellido_paterno.' '.$datos['hemograma']->apellido_materno; ?></td>
			   <td ><?php echo $datos['hemograma']->cod_atencion; ?></td>
			   <td ><?php echo $datos['hemograma']->fecha_ingresado; ?></td>
			   <td ><?php echo $datos['hemograma']->fecha_reportado; ?></td>
				
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    </div>
    <div class="text-center  table-responsive " >
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Hemograma </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Hematocrito</th>
			   <th >Hemoglobina</th>
			   <th >Reecuento de leucocitos</th>
			   <th >VSG</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
			   <td ><?php  echo $datos['hemograma']->hematocrito.'%'; ?></td>
			   <td ><?php echo $datos['hemograma']->hemoglobina.' gr/dl'; ?></td>
			   <td ><?php echo $datos['hemograma']->recuento_leucocitos.' ml/mmc'; ?></td>
			   <td ><?php echo $datos['hemograma']->vsg.' mm/h'; ?></td>	
		  </tr>
			   <?php ?>
		</tbody>
	</table>
                </div>
				
    <div class="text-center  table-responsive " >
                <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Formula leucocitaria </h6> 
                    </div>
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Metamielocitos</th>
			   <th >abastonados</th>
			   <th >Segmentados</th>
			   <th >Neutrofilos</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
			   <td ><?php echo $datos['hemograma']->metamielocitos.'%'; ?></td>
			   <td ><?php echo $datos['hemograma']->abastonados.' %'; ?></td>
			   <td ><?php echo $datos['hemograma']->segmentados.' %'; ?></td>
			   <td ><?php echo $datos['hemograma']->neutrofilos.' %'; ?></td>
				
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    </div>
    <div class="text-center  table-responsive " >
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Eosinofilos</th>
			   <th >Basofilos</th>
			   <th >Monocitos</th>
               <th >Linfocitos</th>	  
               <th >Linfocitos activadoss</th>	  
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
			   <td ><?php  echo $datos['hemograma']->eosinofilos.'%'; ?></td>
			   <td ><?php echo $datos['hemograma']->basofilos.' %'; ?></td>
			   <td ><?php echo $datos['hemograma']->monocitos.' %'; ?></td>
               <td ><?php echo $datos['hemograma']->linfocitos.' %'; ?></td>
               <td ><?php echo $datos['hemograma']->linfocitos_activos.' %'; ?></td>
				
		  </tr>
			   <?php ?>
		</tbody>
    </table>
    
    </div>
    <div class="text-center  table-responsive " >
    <div  class="alert alert-raised alert-primary text-center"  style =" background :#2EA38F; color: white; height: 2.5rem;"  role="alert">
					<h6>Serie roja </h6> 
                    </div>


        

    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			   <th >Hipocromia</th>
			   <th >Microcitosis</th>
			   <th >Anisocitosis</th>
               <th >Macrocitosis</th>

   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
        <td ><?php 
                if($datos['hemograma']->hipocromia == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>

                <td ><?php 
                if($datos['hemograma']->microcitosis == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
            
            <td ><?php 
                if($datos['hemograma']->anisocitosis == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>

                <td ><?php 
                if($datos['hemograma']->macrocitosis == 0){
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
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			

               <th >crenocitos</th>	  
               <th >Poiquilocitosis</th>
               <th >Policromatofilia</th>	  
               <th >normoblastos</th>	
             
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
		
        <td ><?php 
                if($datos['hemograma']->crenocitos == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>

                <td ><?php 
                if($datos['hemograma']->poiquilocitosis == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
  <td ><?php 
                if($datos['hemograma']->policromatofilia == 0){
                    echo "<p style='color:red'>Negativo</p>";
                }
                else{
                    echo "<p style='color:green'>Positivo</p>";
                }
               ?></td>
               
               <td ><?php 
                if($datos['hemograma']->normoblastos == 0){
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
					<h6>Serie blanca </h6> 
                    </div>
    
    <table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >
			

               <th >Detalle de normoblastos</th>	
               <th >Serie plaquetaria</th>	
   </tr>
   </thead>
   <tbody class="text-left" > 
   <?php //$datos['operaciones']->fecha_visita ?>  
		<tr >
		
            
               
               <td ><?php echo $datos['hemograma']->normoblastos_detalle; ?></td>
               <td ><?php echo $datos['hemograma']->serie_plaquetaria.' mmc'; ?></td>
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





