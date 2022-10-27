<?php
require 'Controlador.php';
require 'Cargar.php';
Class Page extends Controlador{
    public function aux(){
        $this->vista2("pag_login");
    }
    public function index(){
        $this->vista2("pag_login");
    } 
    public function dashboard(){
        $this->vista2("pag_dashboard");
    }  
    public function carreras(){
        $this->vista2("pag_carreras");
    } 
<<<<<<< HEAD
    public function docentes(){
        $this->vista2("pag_docentes");
    } 
=======
    public function cursos(){
        $this->vista2("pag_cursos");
    }
>>>>>>> 8e4ca7bceb090b5485c5fe4407ed010e98869c97
}
?>