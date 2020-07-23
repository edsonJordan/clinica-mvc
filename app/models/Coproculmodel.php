<?php 
    class Coproculmodel{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }
        public function obtenercoprocultivo(){
            $this->db->query("SELECT e.cod_examen_heces, c.name_cliente, c.apellido_paterno, c.dni, e.cod_atencion, 
            e.fecha_ingresado, e.fecha_reportado FROM tb_examen_heces e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente");
            return $this->db->registros();
        }

        public function buscarcoprocultivo($dato){
            $this->db->query("SELECT e.cod_examen_heces, c.name_cliente, c.apellido_paterno, c.dni, e.cod_atencion, 
            e.fecha_ingresado, e.fecha_reportado FROM tb_examen_heces e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente and e.cod_cliente= '$dato' ");
            return $this->db->registros();
        }
        public function vercoprocultivo($codigo){
            $this->db->query("SELECT e.cod_examen_heces, c.cod_cliente, c.name_cliente, c.apellido_paterno, c.apellido_materno, c.dni, e.cod_atencion, e.fecha_ingresado, e.fecha_reportado, 
            e.consistencia, e.color, e.moco, e.sangre_macroscopica, e.reaccion_ph, e.celulas_vegetales, 
            e.almidones, e.fibras_musculares, e.grasas_neutras, e.jabones, e.acidos_grasos, 
            e.levaduras, e.eritrocitos, e.leucocitos, e.celulas_epiteliales, e.inv_parasitos, e.resultado, 
            e.sangre_oculta, e.transferrina 
            FROM tb_examen_heces e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente and e.cod_examen_heces = '$codigo'");
            return $this->db->registro();
        }
        public function agregarcoprocultivo($datos){
            $this->db->query('INSERT INTO tb_examen_heces
            (cod_cliente, cod_atencion, fecha_ingresado, fecha_reportado, consistencia, color, 
            moco, sangre_macroscopica, reaccion_ph, celulas_vegetales, almidones, fibras_musculares, grasas_neutras, jabones, acidos_grasos, 
            levaduras, eritrocitos, leucocitos, celulas_epiteliales, inv_parasitos, resultado, 
            sangre_oculta, transferrina) 
            VALUES (:cod_cliente, :cod_atencion, :fecha_ingresado, :fecha_reportado, :consistencia, :color, 
            :moco, :sangre_macroscopica, :reaccion_ph, :celulas_vegetales, :almidones, :fibras_musculares, :grasas_neutras, :jabones, :acidos_grasos, 
            :levaduras, :eritrocitos, :leucocitos, :celulas_epiteliales, :inv_parasitos, :resultado, 
            :sangre_oculta, :transferrina)');
            //vincular valores
            $this->db->bind(':cod_cliente', $datos['cliente']);
            $this->db->bind(':cod_atencion', $datos['codigo']);
            $this->db->bind(':fecha_ingresado', $datos['fecha_ingreso']);
            $this->db->bind(':fecha_reportado', $datos['fecha_reporte']);
            $this->db->bind(':consistencia', $datos['consistencia']);
            $this->db->bind(':color', $datos['color']);
            $this->db->bind(':moco', $datos['moco']);
            $this->db->bind(':sangre_macroscopica', $datos['sangre_macroscopica']);
            $this->db->bind(':reaccion_ph', $datos['reaccion_ph']);
            $this->db->bind(':celulas_vegetales', $datos['celulas_vegetales']);
            $this->db->bind(':almidones', $datos['almidones']);
            $this->db->bind(':fibras_musculares', $datos['fibras_musculares']);
            $this->db->bind(':grasas_neutras', $datos['grasas_neutras']);
            $this->db->bind(':jabones', $datos['jabones']);
            $this->db->bind(':acidos_grasos', $datos['acidos_grasos']); 
            $this->db->bind(':levaduras', $datos['levaduras']);//Año en que obtuvo el bachiller
            $this->db->bind(':eritrocitos', $datos['eritrocitos']);  //¿Tiene Titulo professional? *
            $this->db->bind(':leucocitos', $datos['leucocitos']); //Año en que obtuvo el título profesional
            $this->db->bind(':celulas_epiteliales', $datos['celulas_epiteliales']);  //Estudios de maestría *
            $this->db->bind(':inv_parasitos', $datos['inv_parasitos']);  //Si estudió una maestría, ¿dónde lo hizo?
            $this->db->bind(':resultado', $datos['resultado']); //De tener grado de maestro, ¿en qué año lo obtuvo?
            $this->db->bind(':sangre_oculta', $datos['sangre_oculta']);  //Estudios de doctorado *
            $this->db->bind(':transferrina', $datos['transferrina']);  
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function editarcoprocultivo($datos){
            $this->db->query('UPDATE tb_examen_heces 
            set cod_cliente = :cod_cliente, cod_atencion = :cod_atencion, fecha_ingresado = :fecha_ingresado,
             fecha_reportado = :fecha_reportado, consistencia = :consistencia, color = :color, 
             moco = :moco, sangre_macroscopica = :sangre_macroscopica, reaccion_ph = :reaccion_ph, 
             celulas_vegetales = :celulas_vegetales, almidones = :almidones, fibras_musculares = :fibras_musculares, grasas_neutras = :grasas_neutras,
             jabones = :jabones, acidos_grasos = :acidos_grasos, 
             levaduras = :levaduras, eritrocitos = :eritrocitos, leucocitos = :leucocitos, celulas_epiteliales = :celulas_epiteliales, 
             inv_parasitos = :inv_parasitos, resultado = :resultado, 
             sangre_oculta = :sangre_oculta, transferrina = :transferrina 
             WHERE cod_examen_heces = :cod_examen_heces');
            //vincular valores
            $this->db->bind(':cod_examen_heces', $datos['cod_examen_heces']);
            $this->db->bind(':cod_cliente', $datos['cliente']);
            $this->db->bind(':cod_atencion', $datos['codigo']);
            $this->db->bind(':fecha_ingresado', $datos['fecha_ingreso']);
            $this->db->bind(':fecha_reportado', $datos['fecha_reporte']);
            $this->db->bind(':consistencia', $datos['consistencia']);
            $this->db->bind(':color', $datos['color']);
            $this->db->bind(':moco', $datos['moco']);
            $this->db->bind(':sangre_macroscopica', $datos['sangre_macroscopica']);
            $this->db->bind(':reaccion_ph', $datos['reaccion_ph']);
            $this->db->bind(':celulas_vegetales', $datos['celulas_vegetales']);
            $this->db->bind(':almidones', $datos['almidones']);
            $this->db->bind(':fibras_musculares', $datos['fibras_musculares']);
            $this->db->bind(':grasas_neutras', $datos['grasas_neutras']);
            $this->db->bind(':jabones', $datos['jabones']);
            $this->db->bind(':acidos_grasos', $datos['acidos_grasos']); 
            $this->db->bind(':levaduras', $datos['levaduras']);//Año en que obtuvo el bachiller
            $this->db->bind(':eritrocitos', $datos['eritrocitos']);  //¿Tiene Titulo professional? *
            $this->db->bind(':leucocitos', $datos['leucocitos']); //Año en que obtuvo el título profesional
            $this->db->bind(':celulas_epiteliales', $datos['celulas_epiteliales']);  //Estudios de maestría *
            $this->db->bind(':inv_parasitos', $datos['inv_parasitos']);  //Si estudió una maestría, ¿dónde lo hizo?
            $this->db->bind(':resultado', $datos['resultado']); //De tener grado de maestro, ¿en qué año lo obtuvo?
            $this->db->bind(':sangre_oculta', $datos['sangre_oculta']);  //Estudios de doctorado *
            $this->db->bind(':transferrina', $datos['transferrina']);  
            //ejecutar
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
            }

            public function eliminacoprocultivo($codigo){
                $this->db->query("delete from tb_examen_heces where cod_examen_heces= '$codigo'");              
                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
                }





    }
?>