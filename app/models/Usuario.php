<?php 
    class Usuario{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }
        public function obtenerUsuarios(){
            $this->db->query("SELECT * FROM tb_cliente");
            return $this->db->registros();
        }

        public function obtenerUsuariosId($id){
            $this->db->query('SELECT * FROM tb_cliente WHERE cod_cliente = :id');
            $this->db->bind(':id', $id);
            return $this->db->registro();
            }

            public function consultaUsuario($correo){
                $this->db->query("SELECT * FROM tb_cliente where correo = '$correo'");
                return $this->db->registro();
            }




            // Reservado para ver cantidades de analisis de un paciente
            public function vercantidadanalisis($codigo){
                $this->db->query("SELECT cod_cliente, (SELECT COUNT(c.cod_cliente) from tb_cliente c, tb_examen_hemograma h WHERE c.cod_cliente=h.cod_cliente and c.cod_cliente = '$codigo') AS 'hemograma', (SELECT COUNT(c.cod_cliente) from tb_cliente c, tb_examen_heces e WHERE c.cod_cliente=e.cod_cliente and c.cod_cliente = '$codigo') AS 'heces', (SELECT COUNT(c.cod_cliente) from tb_cliente c, tb_examen_orina o WHERE c.cod_cliente=o.cod_cliente and c.cod_cliente = '$codigo') AS 'orina' from tb_cliente WHERE cod_cliente = '$codigo' ");
                return $this->db->registro();
            }


            public function verificapaciente($codigo){
                $this->db->query("SELECT COUNT(c.cod_cliente) as 'conteo' from tb_cliente c, tb_examen_hemograma h WHERE c.cod_cliente=h.cod_cliente and c.cod_cliente = '$codigo'");
                return $this->db->registros();
            }
            public function verificapermiso($codigo){
                $this->db->query("SELECT p.cod_permiso from tb_cliente c, tb_detalle_cliente d, tb_permiso p WHERE p.cod_permiso = d.cod_permiso and c.cod_cliente = d.cod_cliente and c.cod_cliente = '$codigo' ");
                return $this->db->registro();
            }
           
        public function agregarUsuario($datos){
            $this->db->query('call inserta_tbcliente(:name_cliente, :apellido_paterno, :apellido_materno, :pass, :dni, :domicilio, :pais, :telefono, :correo, :sexo)');
            //vincular valores
            $this->db->bind(':name_cliente', $datos['name_cliente']);
            $this->db->bind(':apellido_paterno', $datos['apellido_paterno']);
            $this->db->bind(':apellido_materno', $datos['apellido_materno']);
            $this->db->bind(':pass', $datos['pass']);
            $this->db->bind(':dni', $datos['dni']);
            $this->db->bind(':domicilio', $datos['domicilio']);
            $this->db->bind(':pais', $datos['pais']);
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':correo', $datos['correo']);
            $this->db->bind(':sexo', $datos['sexo']);
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        

    }
?>