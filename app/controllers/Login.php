<?php 
class Login extends Controller{
    public function __construct()
    {
    $this->articuloModelo = $this->modelo('Usuario');  
       $this->usuarioModelo = $this->modelo('Usuario');
       session_start(); 
    //echo 'constructor PAGINAS inciado';
    }
    public function index()
    {    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $a=$_POST['correo'];
                $b=$_POST['pass'];
                $cantidad=0;
                $busqueda=$this->usuarioModelo->consultaUsuario($a);
                if(password_verify($b, $busqueda->pass)){
                        $cantidad++;
                        var_dump($busqueda);
                }
                if($cantidad>0){
                    $permiso = $this->usuarioModelo->verificapermiso($busqueda->cod_cliente);
                    $_SESSION['nameuser'] = $busqueda->name_cliente.' '.$busqueda->apellido_paterno;
                    $_SESSION['user'] =$busqueda->cod_cliente;
                    $_SESSION['codigo'] = $permiso->cod_permiso;
                    $_SESSION['datos']='ok';
                    rediccionar('sistema/');
                }
                else{
                   session_destroy();
                   rediccionar('login');  
               }
        }
        $this->vista('login');
    }
    public function agregar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $f=$_POST['pass'];
        $dni=$_POST['dni'];
        $domicilio=$_POST['domicilio'];
        if($dni==null){
            $dni = "sin corporacion";
        }
        if($domicilio==null){
            $domicilio = 0;
        }
            $cifrado=password_hash($f, PASSWORD_DEFAULT);
            $datos = [
                'name_cliente' => trim($_POST['name_cliente']),
                'apellido_paterno' => trim($_POST['apellido_paterno']),
                'apellido_materno' => trim($_POST['apellido_materno']),
                'correo' => trim($_POST['correo']),
                'pass' => trim($cifrado),
                'dni' => trim($dni),
                'domicilio' => trim($domicilio),
                'pais' => trim($_POST['pais']),
                'telefono' => trim($_POST['telefono']),
                'sexo' => trim($_POST['sexo'])
            ];
            if($this->usuarioModelo->agregarUsuario($datos)){
                unset($datos);
                rediccionar('login');
                
                
            }
            else{
                die('algo salio mal');
            }
            }else{
                $datos = [
                    'name_cliente' => '',
                    'apellido_paterno' => '',
                    'apellido_materno' => '',
                    'pass' => '',
                    'dni' => '',
                    'domicilio' => '',
                    'pais' => '',
                    'telefono' => '',
                    'correo' => '',
                    'sexo' => ''
                ];
                $this->vista('/agregar', $datos);
            
        }
        
    }
    public function salir()
    {
    
        $this->vista('cerrar');
      
    }
   
    
   


}
?>