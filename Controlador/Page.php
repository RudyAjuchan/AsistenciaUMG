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
    public function cursos(){
        $this->vista2("pag_cursos");
    }
    public function docentes(){
        $this->vista2("pag_docentes");
    } 
}
?>