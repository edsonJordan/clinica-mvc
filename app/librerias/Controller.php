<?php
        //clase controlaor principal 
        //se encarga de controlar los modelos y las vistas
        class Controller{
            //cargar modelo
            public function modelo($modelo){
                //carga modelo
                require_once '../app/models/' . $modelo . '.php';
                //Instanciar el modelo
                return new $modelo();
            }
             //cargar vista
            public function vista($vista, $datos = []){
                //chequear si vista existe
                if(file_exists('../app/views/' . $vista . '.php')){
                    //carga vista
                    require_once '../app/views/' . $vista . '.php';
                }else{
                    //si no existe
                    rediccionar('login/');
                }
            }
            public function seguridad(){
                session_unset();
                session_start();
                 if($_SESSION['datos']=='ok'){
                 }else{
                     rediccionar('login');
                 }
             }
             public function permiso($codigo){
                if(!$_SESSION['datos']=='ok'){
                    rediccionar('login/');
                }
                if($codigo == 4){
                }
                    else{
                        rediccionar('paginas/seguridad');
                   
                }       
             }
            public function cerrar()
            {    
                session_unset();
                session_destroy();
                rediccionar('login/');
            }

            public function permisocliente($vista, $user){
                if($vista != $user){
                    $this->permiso($_SESSION['codigo']);
                }
                
                if($vista = $user){
               
                }                                                                                                                
                }
            


        }
?>