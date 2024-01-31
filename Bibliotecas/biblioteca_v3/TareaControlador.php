
<?php
include_once("models/Tarea.php");  // Modelos
include_once("models/Usuario.php");
include_once("models/Usuario_tarea.php");
include_once("View.php");          // Plantilla de vista


class TareaControlador {
        private $db;             // Conexión con la base de datos
        private $tarea, $usuario;// Modelos
        private $Usuarios_tarea;
        public function __construct() {
            $this->tarea = new Tarea();
            $this->usuario = new Usuario();
            $this->Usuarios_tarea = new Usuario_tarea();
            $this->db = new Db();
        }
        // --------------------------------- MOSTRAR LISTA DE Tareas ----------------------------------------
        public function mostrarListaTareas() {
            if (isset($_SESSION["idUsuario"])) {
                //$idTarea=$this->Usuario_tarea->getIdTarea($this->id);
            $data["listaTareas"] = $this->tarea->tareasDeUsuario($_SESSION["idUsuario"]);
            View::render("tarea/all", $data);
            } else {
                echo "Inicia Sesion Primero";
                View::render("login.view");
            }
        
        }

        // --------------------------------- FORMULARIO ALTA DE LIBROS ----------------------------------------

        public function formularioInsertarTarea() {
            
            $data["autoresLibro"] = array();  // Array vacío (el libro aún no tiene autores asignados)
            View::render("tarea/form", $data);
        }

        // --------------------------------- INSERTAR LIBROS ----------------------------------------

        public function insertarTarea() {
            // Primero, recuperamos todos los datos del formulario
            if (isset($_SESSION["idUsuario"])) {
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"];
            
            $result = $this->tarea->insert($titulo, $descripcion);
            if ($result == 1) {
                // Si la inserción del libro ha funcionado, continuamos insertando los autores, pero
                // necesitamos conocer el id del libro que acabamos de insertar
                $idTarea = $this->tarea->getMaxId();

                $this->Usuarios_tarea->insertUsuarios_tarea($idTarea, $_SESSION["idUsuario"]);
                // Ya podemos insertar todos los autores junto con el libro en "escriben"
                //$result = $this->tarea->insert($idTarea, $usuarios);
                
            } 
            $data["listaTareas"] = $this->tarea->tareasDeUsuario($_SESSION["idUsuario"]);
            View::render("tarea/all", $data);
            } else {
                echo "Inicia Sesion Primero";
                View::render("login.view");
            }
            }
        
        

        // --------------------------------- BORRAR LIBROS ----------------------------------------

            public function borrarTarea() {
            // Recuperamos el id del libro que hay que borrar
            
            // Pedimos al modelo que intente borrar el libro
        if (isset($_SESSION["idUsuario"])) {
            
            $idTarea = $_REQUEST["idTarea"];
            
            $this->Usuarios_tarea->delete($idTarea);
            $this->tarea->delete($idTarea);
            
            
            $data["listaTareas"] = $this->tarea->tareasDeUsuario($_SESSION["idUsuario"]);
            View::render("tarea/all", $data);
        } else {
            echo "Inicia Sesion Primero";
            View::render("login.view");
        }
        }

        // --------------------------------- FORMULARIO MODIFICAR TAREAS ----------------------------------------

        public function formularioModificarTarea() {
            // Recuperamos los datos del libro a modificar
            $idTarea = $_REQUEST["idTarea"];
            $data["tarea"] = $this->tarea->get($idTarea)[0];
            // Renderizamos la vista de inserción de libros, pero enviándole los datos del libro recuperado.
            View::render("tarea/form", $data);
        }

        // --------------------------------- MODIFICAR TAREAS ----------------------------------------

        public function modificarTarea() {
            // Primero, recuperamos todos los datos del formulario
            if (isset($_SESSION["idUsuario"])) {
            $idTarea = $_REQUEST["idTarea"];
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"]; 
            // Pedimos al modelo que haga el update
            $this->tarea->update($idTarea, $titulo, $descripcion);
            
            
            $data["listaTareas"] = $this->tarea->tareasDeUsuario($_SESSION["idUsuario"]);
            View::render("tarea/all", $data);
        
        } else {
            echo "Inicia Sesion Primero";
            View::render("login.view");
        }
        }


        public function loguear() {

            if (isset($_REQUEST["usuario"]) && isset($_REQUEST["password"])) {

            $usuario=$_REQUEST["usuario"];
            $password=hash('sha512', $_REQUEST['password']);
              
                $login = $this->db->dataQuery("SELECT usuario, id FROM usuarios WHERE usuario='$usuario' AND password='$password'");
                $login = $login[0];
                
                if ($login && isset($login->id)) {
                    
                    $_SESSION["idUsuario"]=$login->id;
                    $data["listaTareas"] = $this->tarea->tareasDeUsuario($_SESSION["idUsuario"]);
                    View::render("tarea/all", $data);
                } else {
                    echo "No has introducido las credenciales correctamente";
                
              }
          }
          
        }
        /////////////////////////////////////// Cerrar Sesion //////////////////////////////
        public function cerrarSesion() {
            session_destroy();
            View::render("login.view");
        }
        //////////////////////////mostrarLogin/////////////////////////////

        public function mostrarLogin() {
            View::render("login.view");
        }




    
    } 