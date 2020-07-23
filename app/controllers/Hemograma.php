<?php 
    class Hemograma extends Controller{
        public function __construct()
    {
        $this->usuarioModelo = $this->modelo('Usuario'); 
        $this->analisisModelo = $this->modelo('Hemogramodel'); 
        $this->seguridad();
    }
        public function index(){
        $this->permiso($_SESSION['codigo']);
        $hemograma = $this->analisisModelo->obtenerhemograma();
        $datos = $this->usuarioModelo->obtenerUsuarios();
        $usuarios = ['usuarios' => $datos, 'hemograma' => $hemograma];
        $this->vista('hemograma/index', $usuarios);
    }
    public function ver($codigo){
        $hemograma = $this->analisisModelo->verhemograma($codigo); 
        $this->permisocliente($hemograma->cod_cliente, $_SESSION['user']);
        $datos = ['hemograma' => $hemograma];
        $this->vista('hemograma/ver', $datos);
    }
    public function agregar(){
        $this->permiso($_SESSION['codigo']);
        $usuario = $this->usuarioModelo->obtenerUsuarios();
        $hipocromia=isset($_POST['hipocromia']);
        $microcitosis=isset($_POST['microcitosis']);
        $anisocitosis=isset($_POST['anisocitosis']);
        $macrocitosis=isset($_POST['macrocitosis']);
        $crenocitosis=isset($_POST['crenocitosis']);
        $poliquilocitosis=isset($_POST['poliquilocitosis']);
        $policromatofilia=isset($_POST['policromatofilia']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [ 
            'cliente' => ($_POST['cliente']),
            'codigo' => ($_POST['codigo']),
            'fecha_ingreso' => ($_POST['fecha_ingreso']),
            'fecha_reporte' => ($_POST['fecha_reporte']),
            'hematocrito' => ($_POST['hematocrito']),
            'hemoglobina' => ($_POST['hemoglobina']),
            'lecucocitos' => ($_POST['lecucocitos']),
            'vsg' => ($_POST['vsg']),
            'metamielocitos' => ($_POST['metamielocitos']),
            'abastonados' => ($_POST['abastonados']),
            'segmentados' => ($_POST['segmentados']),
            'neotrofilos' => ($_POST['neotrofilos']),
            'eosinofilos' => ($_POST['eosinofilos']),
            'basofilos' => ($_POST['basofilos']),
            'monocitos' => ($_POST['monocitos']),
            'linfocitos' => ($_POST['linfocitos']),
            'linfocitos_activados' => ($_POST['linfocitos_activados']),
            'hipocromia' => $hipocromia,
            'microcitosis' => $microcitosis,
            'anisocitosis' => $anisocitosis,
            'macrocitosis' => $macrocitosis,
            'crenocitosis' => $crenocitosis,
            'poliquilocitosis' => $poliquilocitosis,
            'policromatofilia' => $policromatofilia,
            'normoblastos' => ($_POST['normoblastos']),
            'detalle_nomoblastos' => ($_POST['detalle_nomoblastos']),
            'serie_plaquetaria' => ($_POST['serie_plaquetaria'])];
            if($this->analisisModelo->agregarhemograma($datos)){
                unset($datos);
                rediccionar('hemograma/');
            }
            else{
                die('algo salio mal');
            }
        }
        $usuarios = ['usuarios' => $usuario];
        $this->vista('hemograma/agregar', $usuarios);
    }
    public function editar($codigo)
    {
        $this->permiso($_SESSION['codigo']);
        $hemograma = $this->analisisModelo->buscarhemog($codigo);
        $usuario = $this->usuarioModelo->obtenerUsuarios();
        $hipocromia=isset($_POST['hipocromia']);
        $microcitosis=isset($_POST['microcitosis']);
        $anisocitosis=isset($_POST['anisocitosis']);
        $macrocitosis=isset($_POST['macrocitosis']);
        $crenocitosis=isset($_POST['crenocitosis']);
        $poliquilocitosis=isset($_POST['poliquilocitosis']);
        $policromatofilia=isset($_POST['policromatofilia']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [ 
                'cod_examen_hemograma' => trim($codigo),
                'cliente' => ($_POST['cliente']),
                'codigo' => ($_POST['codigo']),
                'fecha_ingreso' => ($_POST['fecha_ingreso']),
                'fecha_reporte' => ($_POST['fecha_reporte']),
                'hematocrito' => ($_POST['hematocrito']),
                'hemoglobina' => ($_POST['hemoglobina']),
                'lecucocitos' => ($_POST['lecucocitos']),
                'vsg' => ($_POST['vsg']),
                'metamielocitos' => ($_POST['metamielocitos']),
                'abastonados' => ($_POST['abastonados']),
                'segmentados' => ($_POST['segmentados']),
                'neotrofilos' => ($_POST['neotrofilos']),
                'eosinofilos' => ($_POST['eosinofilos']),
                'basofilos' => ($_POST['basofilos']),
                'monocitos' => ($_POST['monocitos']),
                'linfocitos' => ($_POST['linfocitos']),
                'linfocitos_activados' => ($_POST['linfocitos_activados']),
                'hipocromia' => $hipocromia,
                'microcitosis' => $microcitosis,
                'anisocitosis' => $anisocitosis,
                'macrocitosis' => $macrocitosis,
                'crenocitosis' => $crenocitosis,
                'poliquilocitosis' => $poliquilocitosis,
                'policromatofilia' => $policromatofilia,
                'normoblastos' => ($_POST['normoblastos']),
                'detalle_nomoblastos' => ($_POST['detalle_nomoblastos']),
                'serie_plaquetaria' => ($_POST['serie_plaquetaria'])];
                if($this->analisisModelo->editarhemograma($datos)){
                    unset($datos);
                    rediccionar('hemograma/');
                }
                else{
                    die('algo salio mal');
                }
        }
        $datos = ['hemograma' => $hemograma, 'usuario' => $usuario];
        $this->vista('hemograma/editar', $datos);
    }

    public function eliminar($codigo){
        $rest = substr($codigo, -6); 
        if($_SESSION['codigo'] == 4){
        if($rest == "asd123"){
                $conteo2 = strlen($rest);
                $resultado = substr($codigo, 0,-$conteo2);
        if($this->analisisModelo->eliminahemograma($resultado)){
                    rediccionar('hemograma/');
                }
            }
        }
        else{
            $this->permiso($_SESSION['codigo']);
        }  
          
        $datos = ['codigo' => $codigo];
        $this->vista('hemograma/eliminar', $datos);




    }
 
    }
?>


