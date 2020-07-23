
<?php 
    class Uroanalisis extends Controller{

        public function __construct()
    {
        $this->usuarioModelo = $this->modelo('Usuario'); 
        $this->analisisModelo = $this->modelo('Uroanalimodel'); 
        $this->seguridad();
       
    }
        public function index()
    {
        $this->permiso($_SESSION['codigo']);
        $uroanalisis = $this->analisisModelo->obeteneruroanalisis();
        $datos = $this->usuarioModelo->obtenerUsuarios();
        $usuarios = ['usuarios' => $datos, 'uroanalis' => $uroanalisis];
        $this->vista('uroanalisis/index', $usuarios);
    }
    public function crear()
    {
        $this->vista('uroanalisis/inicio');
    }
    public function ver($codigo)
    {   
        $uroanalisis = $this->analisisModelo->veruroanalisis($codigo);
        $this->permisocliente($uroanalisis->cod_cliente, $_SESSION['user']);
        $datos = ['uroanalisis' => $uroanalisis];
        $this->vista('uroanalisis/ver', $datos);
    }
    /* public function prueba()
    {
        $uroanalisis = $this->analisisModelo->veruroanalisis();
        $datos = ['uroanalisis' => $uroanalisis];
        $this->vista('uroanalisis/', $datos);
    } */
    public function agregar()
    {
        $this->permiso($_SESSION['codigo']);
        $usuario = $this->usuarioModelo->obtenerUsuarios();
        $glucosa=isset($_POST['glucosa']);
        $bilirrubina=isset($_POST['bilirrubina']);
        $cuerpos_cetonicos=isset($_POST['cuerpo']);
        $proteinas=isset($_POST['proteinas']);
        $urobilinogeno=isset($_POST['urobilinogeno']);
        $nitritos=isset($_POST['nitritos']);
        $hemoglobina=isset($_POST['hemoglobina']);
        $sangre=isset($_POST['sangre']);
        $leucocitos_bioqui=isset($_POST['leucocitos_bioqui']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [ 
            'cod_cliente' => ($_POST['cliente']),
            'cod_atencion' => ($_POST['codigo']),
            'fecha_ingresado' => ($_POST['fecha_ingreso']),
            'fecha_reportado' => ($_POST['fecha_reporte']),
            'colesterol' => ($_POST['colesterol']),
            'hdl_colesterol' => ($_POST['hdl_colesterol']),
            'vldl_colesterol' => ($_POST['vldl_colesterol']),
            'trigliceridos' => ($_POST['trigliceridos']),
            'color' => ($_POST['color']),
            'aspecto' => ($_POST['aspecto']),
            'densidad' => ($_POST['densidad']),
            'ph' => ($_POST['ph']),
            'glucosa' => $glucosa,
            'bilirrubina' => $bilirrubina,
            'cuerpos_cetonicos' => $cuerpos_cetonicos,
            'proteinas' => $proteinas,
            'urobilinogeno' => $urobilinogeno,
            'nitritos' => $nitritos,
            'hemoglobina' => $hemoglobina,
            'sangre' => $sangre,
            'leucocitos_bioqui' => $leucocitos_bioqui,
            'leucocitos_micro' => ($_POST['leucocitos_micro']),
            'hematies' => ($_POST['hematies']),
            'celulas' => ($_POST['celulas']),
            'germenes' => ($_POST['germenes']),
            'glucosa_basal' => ($_POST['glucosa_colesterol'])];
            if($this->analisisModelo->agregaruroanalisis($datos)){
                unset($datos);
                rediccionar('uroanalisis/');
            }
            else{
                die('algo salio mal');
            }
        }
        $usuarios = ['usuarios' => $usuario];
        $this->vista('uroanalisis/agregar', $usuarios);
    }
    public function editar($codigo)
    {
        $this->permiso($_SESSION['codigo']);
        $usuario = $this->usuarioModelo->obtenerUsuarios();
        $uroanalisis = $this->analisisModelo->buscaruro($codigo);
        $glucosa=isset($_POST['glucosa']);
        $bilirrubina=isset($_POST['bilirrubina']);
        $cuerpos_cetonicos=isset($_POST['cuerpo']);
        $proteinas=isset($_POST['proteinas']);
        $urobilinogeno=isset($_POST['urobilinogeno']);
        $nitritos=isset($_POST['nitritos']);
        $hemoglobina=isset($_POST['hemoglobina']);
        $sangre=isset($_POST['sangre']);
        $leucocitos_bioqui=isset($_POST['leucocitos_bioqui']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [ 
            'cod_examen_orina' => $codigo,
            'cod_cliente' => ($_POST['cliente']),
            'cod_atencion' => ($_POST['codigo']),
            'fecha_ingresado' => ($_POST['fecha_ingreso']),
            'fecha_reportado' => ($_POST['fecha_reporte']),
            'colesterol' => ($_POST['colesterol']),
            'hdl_colesterol' => ($_POST['hdl_colesterol']),
            'vldl_colesterol' => ($_POST['vldl_colesterol']),
            'trigliceridos' => ($_POST['trigliceridos']),
            'color' => ($_POST['color']),
            'aspecto' => ($_POST['aspecto']),
            'densidad' => ($_POST['densidad']),
            'ph' => ($_POST['ph']),
            'glucosa' => $glucosa,
            'bilirrubina' => $bilirrubina,
            'cuerpos_cetonicos' => $cuerpos_cetonicos,
            'proteinas' => $proteinas,
            'urobilinogeno' => $urobilinogeno,
            'nitritos' => $nitritos,
            'hemoglobina' => $hemoglobina,
            'sangre' => $sangre,
            'leucocitos_bioqui' => $leucocitos_bioqui,
            'leucocitos_micro' => ($_POST['leucocitos_micro']),
            'hematies' => ($_POST['hematies']),
            'celulas' => ($_POST['celulas']),
            'germenes' => ($_POST['germenes']),
            'glucosa_basal' => ($_POST['glucosa_colesterol'])];
            if($this->analisisModelo->editaruroanalisis($datos)){
                unset($datos);
                rediccionar('uroanalisis/');
            }
            else{
                die('algo salio mal');
            }
        }
        $usuarios = ['usuarios' => $usuario, 'uroanalisis' => $uroanalisis];
        $this->vista('uroanalisis/editar', $usuarios);
    }

    public function eliminar($codigo){
        $rest = substr($codigo, -6); 
        if($rest == "asd123"){
            $conteo2 = strlen($rest);
            $resultado = substr($codigo, 0,-$conteo2);
        if($this->analisisModelo->eliminauroanalisis($resultado)){
                rediccionar('uroanalisis/');
            }
            
        }
        else{
            $this->permiso($_SESSION['codigo']);
        }         
        $datos = ['codigo' => $codigo];
        $this->vista('uroanalisis/eliminar', $datos);
    }
  
    }
?>