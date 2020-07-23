<?php 
    class Articulo{
        private $db;
        
        public function __construct(){
            $this->db = new Base;
        }
        public function obtenerArticulos(){
            $this->db->query("SELECT * FROM tb_ocupacion");
            return $this->db->registros();
        }
    }
?>