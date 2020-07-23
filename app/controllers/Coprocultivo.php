
<?php 
    class Coprocultivo extends Controller{

        public function __construct()
    {
        $this->usuarioModelo = $this->modelo('Usuario'); 
        $this->coproculModelo = $this->modelo('Coproculmodel'); 
        $this->seguridad();
       
    }
        public function index()
    {
        $this->permiso($_SESSION['codigo']);
        $coproanalisis = $this->coproculModelo->obtenercoprocultivo();
        $datos = $this->usuarioModelo->obtenerUsuarios();
        $usuarios = ['usuarios' => $datos, 'coprocultivo' => $coproanalisis];
        $this->vista('coprocultivo/index', $usuarios);
    }
    public function crear()
    {
        $this->vista('coprocultivo/inicio');
    }

    public function ver($codigo)
    {
        $coprocultivo = $this->coproculModelo->vercoprocultivo($codigo);
        $this->permisocliente($coprocultivo->cod_cliente, $_SESSION['user']);
        $datos = ['coprocultivo' => $coprocultivo];
        $this->vista('coprocultivo/ver', $datos);
    }
    public function agregar()
    {
        $this->permiso($_SESSION['codigo']);
        $usuario = $this->usuarioModelo->obtenerUsuarios();
        $moco=isset($_POST['moco']);
        $sangre_macroscopica=isset($_POST['sangre_macroscopica']);
        $eritrocitos=isset($_POST['eritrocitos']);
        $leucocitos=isset($_POST['leucocitos']);
        $celulas_epiteliales=isset($_POST['celulas_epiteliales']);
        $inv_parasitos=isset($_POST['inv_parasitos']);
        $sangre_oculta=isset($_POST['sangre_oculta']);
        $transferrina=isset($_POST['transferrina']);
        $resultado=isset($_POST['resultado']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [ 
            'cliente' => ($_POST['cliente']),
            'codigo' => ($_POST['codigo']),
            'fecha_ingreso' => ($_POST['fecha_ingreso']),
            'fecha_reporte' => ($_POST['fecha_reporte']),
            'consistencia' => ($_POST['consistencia']),
            'color' => ($_POST['color']),
            'moco' => $moco,
            'sangre_macroscopica' => $sangre_macroscopica,
            'reaccion_ph' => ($_POST['reaccion_ph']),
            'celulas_vegetales' => ($_POST['celulas_vegetales']),
            'almidones' => ($_POST['almidones']),
            'fibras_musculares' => ($_POST['fibras_musculares']),
            'grasas_neutras' => ($_POST['grasas_neutras']),
            'jabones' => ($_POST['jabones']),
            'acidos_grasos' => ($_POST['acidos_grasos']),
            'levaduras' => ($_POST['levaduras']),
            'eritrocitos' => $eritrocitos,
            'leucocitos' => $leucocitos,
            'celulas_epiteliales' => $celulas_epiteliales,
            'inv_parasitos' => $inv_parasitos,
            'resultado' => $resultado,
            'sangre_oculta' => $sangre_oculta,
            'transferrina' => $transferrina];

            if($this->coproculModelo->agregarcoprocultivo($datos)){
                unset($datos);
                rediccionar('coprocultivo/');
            }
            else{
                die('algo salio mal');
            }
        }
        $usuarios = ['usuarios' => $usuario];
        $this->vista('coprocultivo/agregar', $usuarios);
    }

    public function editar($codigo)
    {
        $this->permiso($_SESSION['codigo']);
        $coprocultivo = $this->coproculModelo->vercoprocultivo($codigo);
        $usuario = $this->usuarioModelo->obtenerUsuarios();
        $moco=isset($_POST['moco']);
        $sangre_macroscopica=isset($_POST['sangre_macroscopica']);
        $eritrocitos=isset($_POST['eritrocitos']);
        $leucocitos=isset($_POST['leucocitos']);
        $celulas_epiteliales=isset($_POST['celulas_epiteliales']);
        $inv_parasitos=isset($_POST['inv_parasitos']);
        $sangre_oculta=isset($_POST['sangre_oculta']);
        $transferrina=isset($_POST['transferrina']);
        $resultado=isset($_POST['resultado']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [ 
            'cod_examen_heces' => trim($codigo),
            'cliente' => ($_POST['cliente']),
            'codigo' => ($_POST['codigo']),
            'fecha_ingreso' => ($_POST['fecha_ingreso']),
            'fecha_reporte' => ($_POST['fecha_reporte']),
            'consistencia' => ($_POST['consistencia']),
            'color' => ($_POST['color']),
            'moco' => $moco,
            'sangre_macroscopica' => $sangre_macroscopica,
            'reaccion_ph' => ($_POST['reaccion_ph']),
            'celulas_vegetales' => ($_POST['celulas_vegetales']),
            'almidones' => ($_POST['almidones']),
            'fibras_musculares' => ($_POST['fibras_musculares']),
            'grasas_neutras' => ($_POST['grasas_neutras']),
            'jabones' => ($_POST['jabones']),
            'acidos_grasos' => ($_POST['acidos_grasos']),
            'levaduras' => ($_POST['levaduras']),
            'eritrocitos' => $eritrocitos,
            'leucocitos' => $leucocitos,
            'celulas_epiteliales' => $celulas_epiteliales,
            'inv_parasitos' => $inv_parasitos,
            'resultado' => $resultado,
            'sangre_oculta' => $sangre_oculta,
            'transferrina' => $transferrina];
            if($this->coproculModelo->editarcoprocultivo($datos)){
                unset($datos);
                rediccionar('coprocultivo/');
            }
            else{
                die('algo salio mal');
            }
        }
        $usuarios = ['usuarios' => $usuario, 'coprocultivo' => $coprocultivo];
        $this->vista('coprocultivo/editar', $usuarios);
    }
    public function eliminar($codigo){
        $rest = substr($codigo, -6); 
        if($_SESSION['codigo'] == 4){
        if($rest == "asd123"){
                $conteo2 = strlen($rest);
                $resultado = substr($codigo, 0,-$conteo2);
        if($this->coproculModelo->eliminacoprocultivo($resultado)){
                    rediccionar('coprocultivo/');
                }
            }
        }
        else{
            $this->permiso($_SESSION['codigo']);
        }  
          
        $datos = ['codigo' => $codigo];
        $this->vista('coprocultivo/eliminar', $datos);
    }
    }
?>