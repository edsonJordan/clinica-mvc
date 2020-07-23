<?php 
    class Usuarios extends Controller{
        public function __construct()
    {
       $this->articuloModelo = $this->modelo('Usuario');   
       $this->seguridad(); 
    }
        public function index()
    {
        $usuarios = $this->articuloModelo->obtenerUsuarios();
        $datos = ['usuarios' => $usuarios];
        $this->vista('usuarios/inicio', $datos);
    }
    public function ver($codigo)
    {
        $this->permiso($_SESSION['codigo']);
        $usuario = $this->articuloModelo->obtenerUsuariosId($codigo);
        $datos = ['usuario' => $usuario];
        $this->vista('usuarios/ver' , $datos);
    }
     
   



    }
?>