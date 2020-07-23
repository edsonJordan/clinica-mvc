<?php 
class Sistema extends Controller
{
    public function __construct()
    {
        $this->usuarioModelo = $this->modelo('Usuario'); 
        $this->hemograModel = $this->modelo('Hemogramodel'); 
        $this->uroanaliModel = $this->modelo('Uroanalimodel'); 
        $this->coproculModelo = $this->modelo('Coproculmodel'); 
        $this->seguridad();
    }
    public function index()
    {
        $this->vista('/sistema/home');
    }
    public function admin()
    {
        $this->vista('/sistema/admin');
    }
    public function paciente()
    {
        $this->permiso($_SESSION['codigo']);
        $datos = $this->usuarioModelo->obtenerUsuarios();
        $usuarios = ['usuarios' => $datos];
        $this->vista('/sistema/paciente', $usuarios);  
    }
    public function doctores()
    {
        $this->vista('/sistema/doctores');
    }
    public function analisis(){
        $hemograma = $this->hemograModel->obtenerhemograma();
        $buscarhemogramama = $this->hemograModel->buscarhemograma($_SESSION['user']);
        $buscaruroanalisis = $this->uroanaliModel->buscaruroanalisis($_SESSION['user']);
        $buscarcoprocultivo = $this->coproculModelo->buscarcoprocultivo($_SESSION['user']);
        $uroanalisis = $this->uroanaliModel->obeteneruroanalisis();
        $coproanalisis = $this->coproculModelo->obtenercoprocultivo();
        $datos = $this->usuarioModelo->obtenerUsuarios();
        $usuarios = ['usuarios' => $datos, 'hemograma' => $hemograma,
         'uroanalis' => $uroanalisis, 'coprocultivo' => $coproanalisis,
          'buscar' => $buscarhemogramama, 'buscar2' => $buscaruroanalisis, 'buscar3' => $buscarcoprocultivo];
        $this->vista('/sistema/analisis', $usuarios);
    }
}
?>