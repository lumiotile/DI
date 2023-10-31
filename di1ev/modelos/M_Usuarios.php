<?php
    require_once'modelos/Modelo.php';
    require_once 'modelos/DAO.php';
    class M_Usuarios extends Modelo{

        public $DAO;
        public function __construct()
        {
            parent::__construct(); //ejecuta el cosntructor padre
            $this->DAO = new DAO();
        }

        public function buscarUsuarios($filtros = array()){
            $b_texto = '';
            $usuario = '';
            $pass = '';
             //from de busqueda usuarios
            $nombreInput = '';
            $apellidosInput = '';
            $emailInput = '';
            $movilInput = '';
            extract($filtros);
            $SQL = "SELECT * FROM usuarios WHERE 1=1";

            if ($nombreInput != '') {
                $SQL.= " AND (1=2 ";
                $SQL.= " OR nombre LIKE '%$nombreInput%') ";
            }

            if ($apellidosInput != '') {
                $SQL.= " AND (1=2 ";
                $SQL.= " OR apellido_1 LIKE '%$apellidosInput%'";
                $SQL.= " OR apellido_2 LIKE '%$apellidosInput%') ";
            }

            if ($emailInput != '') {
                $SQL.= " AND (1=2 ";
                $SQL.= " OR mail LIKE '%$emailInput%') ";
            }

            if ($movilInput != '') {
               $SQL.= " AND (1=2 ";
               $SQL.= " OR movil LIKE '%$movilInput%') ";
            }

             if ($usuario != '' && $pass != '' ) {
                 $usuario = addslashes($usuario);  //añade \ delante de caracteres especiales
                 $pass = addslashes($pass);  //como la ', "" para que pierdan funcionalidad 
                 $SQL.= " AND login = '$usuario' AND pass= MD5('$pass') ";  //MD5 codifica el texto plano de la contraseña para buscarlo en los datos codificados de la base de datos
             }
            
            $usuarios = $this->DAO->consultar($SQL);
            return $usuarios;
        }

        
    }

?>