
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
			   <th >Apellido Paterno</th>
			   <th >Apellido Materno</th>
			 
   </tr>
   </thead>
   <tbody class="text-left" > 
		<tr >
			   <td ><?php  echo $datos['usuario']->name_cliente; ?></td>
			   <td ><?php echo $datos['usuario']->apellido_paterno; ?></td>
			   <td ><?php echo $datos['usuario']->apellido_materno; ?></td>			
		  </tr>
			   <?php ?>
		</tbody>
    </table>
	</div>
	
	<table  class="table table-striped" style="border: 1px solid #DEE2E6;" >
		<thead class="text-left" style="color:#2EA38F;">   
   <tr >

   <th >Documento de identidad</th>	  
			   <th >Domicilio</th>	  
			   <th> Correo</th>
			   <th> Sexo</th>
   </tr>
   </thead>
   <tbody class="text-left" > 
		<tr >
		<td ><?php  echo $datos['usuario']->dni; ?></td>
			   <td ><?php  echo $datos['usuario']->domicilio; ?></td>
			   <td ><?php echo $datos['usuario']->correo; ?></td>
			   <td ><?php
			 		if ($datos['usuario']->sexo ==1 ){
						 echo "Masculino";
					 }else{
					echo "Femenino";
					}
					 ?></td>			
		  </tr>
			   <?php ?>
		</tbody>
    </table>
	</div>
    
           
	<?php  require RUTA_APP . '/views/templates/footer.php'; ?>		
	</body>   
	</html>





