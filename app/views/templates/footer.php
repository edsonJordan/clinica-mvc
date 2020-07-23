</section>


<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="<?php  echo RUTA_URL; ?>/public/js/jquery.dataTables.js"></script>



<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/bootstrap-input-spinner.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/select2.min.js"></script>	
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/ripples.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/sweetalert2.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/main.js"></script>
	<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/material.min.js"></script>
    
	
	<script>

$(document).ready(function() {
    $('#table_id').DataTable({
		"language": {
               "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ninguna coincidencia",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
            }
	});
} );

$(document).ready(function() {
    $('#table_id2').DataTable({
		"language": {
               "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ninguna coincidencia",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
            }
	});
} );

$(document).ready(function() {
    $('#table_id3').DataTable({
		"language": {
               "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ninguna coincidencia",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
            }
	});
} );
			$.material.init();
	</script>
</body>
</html>