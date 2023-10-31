<?php
    require_once 'controladores/Controlador.php';
    require_once 'vistas/Vista.php';
    require_once 'modelos/M_Usuarios.php';
    
    class C_Usuarios extends Controlador{
        private $modelo;
        public function __construct(){
            parent::__construct();
            $this->modelo = new M_Usuarios();
        }

        public function validarUsuario($filtros){
            $valido='N';
            // if($usuario=='javier' && $pass=='123'){
            //     $_SESSION['usuario']=$usuario;
            //     $valido='S';   
            // }
            $usuario = $this->modelo->buscarUsuarios($filtros);
            if (!empty($usuario)) {
                $valido = 'S';
                $_SESSION['usuario']=$usuario[0]['login'];
            }
            return $valido;
        }

        public function getVistaUsuario(){
            Vista::render('vistas/Usuarios/V_Usuarios.php');
        }

        public function buscarUsuarios($filtros=array()){
            $usuario = $this->modelo->buscarUsuarios($filtros);
            
            Vista::render('vistas/Usuarios/V_Usuarios_Listado.php',
                            array('usuarios' => $usuario));
        }

    }
?>