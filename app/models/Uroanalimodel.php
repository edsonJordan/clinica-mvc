
<?php 
    class Uroanalimodel{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }
        public function obeteneruroanalisis(){
            $this->db->query("SELECT e.cod_examen_orina, c.name_cliente, c.apellido_paterno, c.dni, e.cod_atencion, 
            e.fecha_ingresado, e.fecha_reportado FROM tb_examen_orina e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente");
            return $this->db->registros();
        }

        public function buscaruroanalisis($dato){
            $this->db->query("SELECT e.cod_examen_orina, c.name_cliente, c.apellido_paterno, c.dni, e.cod_atencion, 
            e.fecha_ingresado, e.fecha_reportado FROM tb_examen_orina e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente and e.cod_cliente= '$dato' ");
            return $this->db->registros();
        }
    
        public function buscaruro($codigo){
            $this->db->query("SELECT e.cod_examen_orina, e.cod_cliente, c.name_cliente, c.dni, e.cod_atencion, e.fecha_ingresado, e.fecha_reportado, e.colesterol, e.hdl_colesterol, e.vldl_colesterol, e.trigliceridos, e.color, e.aspecto, e.densidad, e.ph, e.glucosa, e.bilirrubina, e.cuerpos_cetonicos, e.proteinas, e.urobilinogeno, e.nitritos, e.hemoglobina, e.sangre, e.leucocitos_bioqui, e.leucocitos_micro, e.hematies, e.celulas, e.germenes, e.glucosa_basal 
            FROM tb_cliente c, tb_examen_orina e WHERE c.cod_cliente = e.cod_cliente AND e.cod_examen_orina = '$codigo' ");
            return $this->db->registro();
        }



        public function veruroanalisis($codigo){
            $this->db->query("SELECT c.cod_cliente, c.name_cliente, c.apellido_paterno, c.apellido_materno, c.sexo, 
            e.cod_atencion, e.fecha_ingresado, e.fecha_reportado, 
            e.colesterol, e.hdl_colesterol, e.vldl_colesterol, e.trigliceridos, e.color, e.aspecto,
             e.densidad, e.ph, e.glucosa, e.bilirrubina, e.cuerpos_cetonicos, 
            e.proteinas, e.urobilinogeno, e.nitritos, e.hemoglobina, e.sangre, e.leucocitos_bioqui, 
            e.leucocitos_micro, e.hematies, e.celulas, e.germenes, e.glucosa_basal 
            FROM tb_examen_orina e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente and e.cod_examen_orina = '$codigo'");
            return $this->db->registro();
        }
        public function agregaruroanalisis($datos){
            $this->db->query('INSERT INTO tb_examen_orina
            (cod_cliente, cod_atencion, fecha_ingresado, fecha_reportado, colesterol, hdl_colesterol, 
            vldl_colesterol, trigliceridos, color, aspecto, densidad, ph, glucosa, bilirrubina, cuerpos_cetonicos, 
            proteinas, urobilinogeno, nitritos, hemoglobina, sangre, leucocitos_bioqui, 
            leucocitos_micro, hematies, celulas, germenes, glucosa_basal) 
            VALUES (:cod_cliente, :cod_atencion, :fecha_ingresado, :fecha_reportado, :colesterol, :hdl_colesterol, 
            :vldl_colesterol, :trigliceridos, :color, :aspecto, :densidad, :ph, :glucosa, :bilirrubina, 
            :cuerpos_cetonicos, :proteinas, :urobilinogeno, :nitritos, :hemoglobina, :sangre, 
            :leucocitos_bioqui, :leucocitos_micro, :hematies, :celulas, :germenes, :glucosa_basal)');
            //vincular valores
            $this->db->bind(':cod_cliente', $datos['cod_cliente']);
            $this->db->bind(':cod_atencion', $datos['cod_atencion']);
            $this->db->bind(':fecha_ingresado', $datos['fecha_ingresado']);
            $this->db->bind(':fecha_reportado', $datos['fecha_reportado']);
            $this->db->bind(':colesterol', $datos['colesterol']);
            $this->db->bind(':hdl_colesterol', $datos['vldl_colesterol']);
            $this->db->bind(':vldl_colesterol', $datos['vldl_colesterol']);
            $this->db->bind(':trigliceridos', $datos['trigliceridos']);
            $this->db->bind(':color', $datos['color']);
            $this->db->bind(':aspecto', $datos['aspecto']);
            $this->db->bind(':densidad', $datos['densidad']);
            $this->db->bind(':ph', $datos['ph']);
            $this->db->bind(':glucosa', $datos['glucosa']);
            $this->db->bind(':bilirrubina', $datos['bilirrubina']);
            $this->db->bind(':cuerpos_cetonicos', $datos['cuerpos_cetonicos']); 
            $this->db->bind(':proteinas', $datos['proteinas']);//Año en que obtuvo el bachiller
            $this->db->bind(':urobilinogeno', $datos['urobilinogeno']);  //¿Tiene Titulo professional? *
            $this->db->bind(':nitritos', $datos['nitritos']); //Año en que obtuvo el título profesional
            $this->db->bind(':hemoglobina', $datos['hemoglobina']);  //Estudios de maestría *
            $this->db->bind(':sangre', $datos['sangre']);  //Si estudió una maestría, ¿dónde lo hizo?
            $this->db->bind(':leucocitos_bioqui', $datos['leucocitos_bioqui']); //De tener grado de maestro, ¿en qué año lo obtuvo?
            $this->db->bind(':leucocitos_micro', $datos['leucocitos_micro']);  //Estudios de doctorado *
            $this->db->bind(':hematies', $datos['hematies']);   //Si estudió un doctorado, ¿dónde lo hizo?
            $this->db->bind(':celulas', $datos['celulas']);
            $this->db->bind(':germenes', $datos['germenes']); //De tener grado de doctor, ¿en qué año lo obtuvo?
            $this->db->bind(':glucosa_basal', $datos['glucosa_basal']);  // ¿Se ha capacitado en los últimos 3 años? *
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function editaruroanalisis($datos){
            $this->db->query('UPDATE tb_examen_orina 
            set cod_cliente = :cod_cliente, cod_atencion = :cod_atencion, fecha_ingresado = :fecha_ingresado,
             fecha_reportado = :fecha_reportado, colesterol = :colesterol, hdl_colesterol = :hdl_colesterol, 
             vldl_colesterol = :vldl_colesterol, trigliceridos = :trigliceridos, color = :color, 
             aspecto = :aspecto, densidad = :densidad, ph = :ph, glucosa = :glucosa,
             bilirrubina = :bilirrubina, cuerpos_cetonicos = :cuerpos_cetonicos, 
             proteinas = :proteinas, urobilinogeno = :urobilinogeno, nitritos = :nitritos, hemoglobina = :hemoglobina, 
             sangre = :sangre, leucocitos_bioqui = :leucocitos_bioqui, 
             leucocitos_micro = :leucocitos_micro, hematies = :hematies, celulas = :celulas,
             germenes = :germenes, glucosa_basal = :glucosa_basal WHERE cod_examen_orina = :cod_examen_orina');
            //vincular valores
            $this->db->bind(':cod_examen_orina', $datos['cod_examen_orina']);
            $this->db->bind(':cod_cliente', $datos['cod_cliente']);
            $this->db->bind(':cod_atencion', $datos['cod_atencion']);
            $this->db->bind(':fecha_ingresado', $datos['fecha_ingresado']);
            $this->db->bind(':fecha_reportado', $datos['fecha_reportado']);
            $this->db->bind(':colesterol', $datos['colesterol']);
            $this->db->bind(':hdl_colesterol', $datos['vldl_colesterol']);
            $this->db->bind(':vldl_colesterol', $datos['vldl_colesterol']);
            $this->db->bind(':trigliceridos', $datos['trigliceridos']);
            $this->db->bind(':color', $datos['color']);
            $this->db->bind(':aspecto', $datos['aspecto']);
            $this->db->bind(':densidad', $datos['densidad']);
            $this->db->bind(':ph', $datos['ph']);
            $this->db->bind(':glucosa', $datos['glucosa']);
            $this->db->bind(':bilirrubina', $datos['bilirrubina']);
            $this->db->bind(':cuerpos_cetonicos', $datos['cuerpos_cetonicos']); 
            $this->db->bind(':proteinas', $datos['proteinas']);//Año en que obtuvo el bachiller
            $this->db->bind(':urobilinogeno', $datos['urobilinogeno']);  //¿Tiene Titulo professional? *
            $this->db->bind(':nitritos', $datos['nitritos']); //Año en que obtuvo el título profesional
            $this->db->bind(':hemoglobina', $datos['hemoglobina']);  //Estudios de maestría *
            $this->db->bind(':sangre', $datos['sangre']);  //Si estudió una maestría, ¿dónde lo hizo?
            $this->db->bind(':leucocitos_bioqui', $datos['leucocitos_bioqui']); //De tener grado de maestro, ¿en qué año lo obtuvo?
            $this->db->bind(':leucocitos_micro', $datos['leucocitos_micro']);  //Estudios de doctorado *
            $this->db->bind(':hematies', $datos['hematies']);   //Si estudió un doctorado, ¿dónde lo hizo?
            $this->db->bind(':celulas', $datos['celulas']);
            $this->db->bind(':germenes', $datos['germenes']); //De tener grado de doctor, ¿en qué año lo obtuvo?
            $this->db->bind(':glucosa_basal', $datos['glucosa_basal']);   //27
   
            //ejecutar
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
            }


            public function eliminauroanalisis($codigo){
                $this->db->query("delete from tb_examen_orina where cod_examen_orina= '$codigo'");              
                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
                }


    }
?>