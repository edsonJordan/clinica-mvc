<?php 
    class Paginas extends Controller{

        public function __construct()
    {        
    }
        public function index()
    {
        $this->vista('404');
    }
    public function error()
    {
        $this->vista('404');
    }
    public function seguridad()
    {
        $this->vista('403');
    }
    }
?>