<?php 
    class Hemogramodel{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }
        public function obtenerhemograma(){
            $this->db->query("SELECT e.cod_examen_hemograma, c.name_cliente, c.apellido_paterno, c.dni, e.cod_atencion, 
            e.fecha_ingresado, e.fecha_reportado FROM tb_examen_hemograma e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente");
            return $this->db->registros();
        }

        public function buscarhemograma($dato){
            $this->db->query("SELECT e.cod_examen_hemograma, c.name_cliente, c.apellido_paterno, c.dni, e.cod_atencion, 
            e.fecha_ingresado, e.fecha_reportado FROM tb_examen_hemograma e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente and e.cod_cliente= '$dato' ");
            return $this->db->registros();
        }

        public function buscarhemog($codigo){
            $this->db->query("SELECT e.cod_examen_hemograma, e.cod_cliente, c.name_cliente, c.dni, e.cod_atencion, e.fecha_ingresado, e.fecha_reportado, e.hematocrito, e.hemoglobina, e.recuento_leucocitos, e.vsg, e.metamielocitos, e.abastonados, e.segmentados, e.neutrofilos, e.eosinofilos, e.basofilos, e.monocitos, e.linfocitos, e.linfocitos_activos, e.hipocromia, e.microcitosis, e.anisocitosis, e.macrocitosis, e.crenocitos, e.poiquilocitosis, e.policromatofilia, e.normoblastos, e.normoblastos_detalle, e.serie_plaquetaria FROM tb_examen_hemograma e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente AND e.cod_examen_hemograma = '$codigo' ");
            return $this->db->registro();
        }

        public function verhemograma($codigo){
            $this->db->query("SELECT c.cod_cliente, c.name_cliente, c.apellido_paterno, c.apellido_materno, c.sexo, 
            e.cod_atencion, e.fecha_ingresado, e.fecha_reportado, e.hematocrito, e.hemoglobina, 
            e.recuento_leucocitos, e.vsg, e.metamielocitos, e.abastonados, e.segmentados, e.neutrofilos, e.eosinofilos, e.basofilos, e.monocitos, 
            e.linfocitos, e.linfocitos_activos, e.hipocromia, e.microcitosis, e.anisocitosis, e.macrocitosis, 
            e.crenocitos, e.poiquilocitosis, e.policromatofilia, e.normoblastos, e.normoblastos_detalle, e.serie_plaquetaria
            FROM tb_examen_hemograma e, tb_cliente c WHERE e.cod_cliente = c.cod_cliente and e.cod_examen_hemograma = '$codigo'");
            return $this->db->registro();
        }


        public function agregarhemograma($datos){
            $this->db->query('INSERT INTO tb_examen_hemograma
            (cod_cliente, cod_atencion, fecha_ingresado, fecha_reportado, hematocrito, hemoglobina, 
            recuento_leucocitos, vsg, metamielocitos, abastonados, segmentados, neutrofilos, eosinofilos, basofilos, monocitos, 
            linfocitos, linfocitos_activos, hipocromia, microcitosis, anisocitosis, macrocitosis, 
            crenocitos, poiquilocitosis, policromatofilia, normoblastos, normoblastos_detalle, serie_plaquetaria) 
            VALUES (:cod_cliente, :cod_atencion, :fecha_ingresado, :fecha_reportado, :hematocrito, :hemoglobina, 
            :recuento_leucocitos, :vsg, :metamielocitos, :abastonados, :segmentados, :neutrofilos, :eosinofilos, :basofilos, :monocitos, 
            :linfocitos, :linfocitos_activos, :hipocromia, :microcitosis, :anisocitosis, :macrocitosis, 
            :crenocitos, :poiquilocitosis, :policromatofilia, :normoblastos, :normoblastos_detalle, :serie_plaquetaria)');
            //vincular valores
            $this->db->bind(':cod_cliente', $datos['cliente']);
            $this->db->bind(':cod_atencion', $datos['codigo']);
            $this->db->bind(':fecha_ingresado', $datos['fecha_ingreso']);
            $this->db->bind(':fecha_reportado', $datos['fecha_reporte']);
            $this->db->bind(':hematocrito', $datos['hematocrito']);
            $this->db->bind(':hemoglobina', $datos['hemoglobina']);
            $this->db->bind(':recuento_leucocitos', $datos['lecucocitos']);
            $this->db->bind(':vsg', $datos['vsg']);
            $this->db->bind(':metamielocitos', $datos['metamielocitos']);
            $this->db->bind(':abastonados', $datos['abastonados']);
            $this->db->bind(':segmentados', $datos['segmentados']);
            $this->db->bind(':neutrofilos', $datos['neotrofilos']);
            $this->db->bind(':eosinofilos', $datos['eosinofilos']);
            $this->db->bind(':basofilos', $datos['basofilos']);
            $this->db->bind(':monocitos', $datos['monocitos']); 
            $this->db->bind(':linfocitos', $datos['linfocitos']);//Año en que obtuvo el bachiller
            $this->db->bind(':linfocitos_activos', $datos['linfocitos_activados']);  //¿Tiene Titulo professional? *
            $this->db->bind(':hipocromia', $datos['hipocromia']); //Año en que obtuvo el título profesional
            $this->db->bind(':microcitosis', $datos['microcitosis']);  //Estudios de maestría *
            $this->db->bind(':anisocitosis', $datos['anisocitosis']);  //Si estudió una maestría, ¿dónde lo hizo?
            $this->db->bind(':macrocitosis', $datos['macrocitosis']); //De tener grado de maestro, ¿en qué año lo obtuvo?
            $this->db->bind(':crenocitos', $datos['crenocitosis']);  //Estudios de doctorado *
            $this->db->bind(':poiquilocitosis', $datos['poliquilocitosis']);   //Si estudió un doctorado, ¿dónde lo hizo?
            $this->db->bind(':policromatofilia', $datos['policromatofilia']); //De tener grado de doctor, ¿en qué año lo obtuvo?
            $this->db->bind(':normoblastos', $datos['normoblastos']);  // ¿Se ha capacitado en los últimos 3 años? *
            $this->db->bind(':normoblastos_detalle', $datos['detalle_nomoblastos']);    //¿Las capacitaciones han sido de su especialidad?
            $this->db->bind(':serie_plaquetaria', $datos['serie_plaquetaria']);   // ¿A qué se dedica actualmente? *
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function editarhemograma($datos){
            $this->db->query('UPDATE tb_examen_hemograma set cod_cliente = :cod_cliente, cod_atencion = :cod_atencion, fecha_ingresado = :fecha_ingresado,
             fecha_reportado = :fecha_reportado, hematocrito = :hematocrito, hemoglobina = :hemoglobina, 
            recuento_leucocitos = :recuento_leucocitos, vsg = :vsg, metamielocitos = :metamielocitos, 
            abastonados = :abastonados, segmentados = :segmentados, neutrofilos = :neutrofilos, eosinofilos = :eosinofilos,
             basofilos = :basofilos, monocitos = :monocitos, 
            linfocitos = :linfocitos, linfocitos_activos = :linfocitos_activos, hipocromia = :hipocromia, microcitosis = :microcitosis, 
            anisocitosis = :anisocitosis, macrocitosis = :macrocitosis, 
            crenocitos = :crenocitos, poiquilocitosis = :poiquilocitosis, policromatofilia = :policromatofilia, normoblastos = :normoblastos, 
            normoblastos_detalle = :normoblastos_detalle, serie_plaquetaria = :serie_plaquetaria 
            WHERE cod_examen_hemograma = :cod_examen_hemograma');
            //vincular valores
            $this->db->bind(':cod_examen_hemograma', $datos['cod_examen_hemograma']);//1
            $this->db->bind(':cod_cliente', $datos['cliente']);//2
            $this->db->bind(':cod_atencion', $datos['codigo']);//3
            $this->db->bind(':fecha_ingresado', $datos['fecha_ingreso']);//4
            $this->db->bind(':fecha_reportado', $datos['fecha_reporte']);//5
            $this->db->bind(':hematocrito', $datos['hematocrito']);//6
            $this->db->bind(':hemoglobina', $datos['hemoglobina']);//7
            $this->db->bind(':recuento_leucocitos', $datos['lecucocitos']);//8
            $this->db->bind(':vsg', $datos['vsg']);//9
            $this->db->bind(':metamielocitos', $datos['metamielocitos']);//10
            $this->db->bind(':abastonados', $datos['abastonados']);//11
            $this->db->bind(':segmentados', $datos['segmentados']);//12
            $this->db->bind(':neutrofilos', $datos['neotrofilos']);//13
            $this->db->bind(':eosinofilos', $datos['eosinofilos']);//14
            $this->db->bind(':basofilos', $datos['basofilos']);//15
            $this->db->bind(':monocitos', $datos['monocitos']);//16
            $this->db->bind(':linfocitos', $datos['linfocitos']);//16
            $this->db->bind(':linfocitos_activos', $datos['linfocitos_activados']);  //18
            $this->db->bind(':hipocromia', $datos['hipocromia']); //19
            $this->db->bind(':microcitosis', $datos['microcitosis']);  //20
            $this->db->bind(':anisocitosis', $datos['anisocitosis']);  //21
            $this->db->bind(':macrocitosis', $datos['macrocitosis']); //22
            $this->db->bind(':crenocitos', $datos['crenocitosis']);  //23
            $this->db->bind(':poiquilocitosis', $datos['poliquilocitosis']);   //24
            $this->db->bind(':policromatofilia', $datos['policromatofilia']); //25
            $this->db->bind(':normoblastos', $datos['normoblastos']);  // 26
            $this->db->bind(':normoblastos_detalle', $datos['detalle_nomoblastos']);    //27
            $this->db->bind(':serie_plaquetaria', $datos['serie_plaquetaria']);  //28
            //ejecutar
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
            }

            public function eliminahemograma($codigo){
                $this->db->query("delete from tb_examen_hemograma where cod_examen_hemograma= '$codigo'");              
                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
                }






    }
?>