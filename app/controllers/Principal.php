<?php 
//controlador del sistema o pagina estatica
class Principal extends Controller{
    public function __construct()
    {
       $this->usuarioModelo = $this->modelo('Usuario');
               //echo 'constructor PAGINAS inciado';
    }
    public function index()
    {    
        $this->vista('principal/index');
        
    }
    public function salir()
    {
        $this->vista('cerrar');
        echo "eSTO SE CIERRA";
    }
    
   


}
?>