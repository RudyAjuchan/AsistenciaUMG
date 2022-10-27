<?php
require 'Controlador.php';

class Activar extends Controlador{
    public function carrera(){
        $consultas=$this->modelo('Activa');
        $id_carrera=$_POST['id_carrera'];
        $mensaje=$consultas->ActivarCarrera($id_carrera);
        echo json_encode($mensaje);
        return true;
    }
<<<<<<< HEAD

    public function docente(){
        $consultas=$this->modelo('Activa');
        $id_docente=$_POST['id_Docente'];
        $mensaje=$consultas->ActivarDocente($id_docente);
=======
    public function curso(){
        $consultas=$this->modelo('Activa');
        $id_curso=$_POST['id_curso'];
        $mensaje=$consultas->ActivarCurso($id_curso);
>>>>>>> 8e4ca7bceb090b5485c5fe4407ed010e98869c97
        echo json_encode($mensaje);
        return true;
    }
}
?>