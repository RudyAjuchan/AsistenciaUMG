<?php
require 'Controlador.php';

class Desactivar extends Controlador{
    public function carrera(){
        $consultas=$this->modelo('Desactiva');
        $id_carrera=$_POST['id_carrera'];
        $mensaje=$consultas->DesactivarCarrera($id_carrera);
        echo json_encode($mensaje);
        return true;
    }
<<<<<<< HEAD

    public function docente(){
        $consultas=$this->modelo('Desactiva');
        $id_docente=$_POST['id_Docente'];
        $mensaje=$consultas->DesactivarDocente($id_docente);
=======
    public function curso(){
        $consultas=$this->modelo('Desactiva');
        $id_curso=$_POST['id_curso'];
        $mensaje=$consultas->DesactivarCurso($id_curso);
>>>>>>> 8e4ca7bceb090b5485c5fe4407ed010e98869c97
        echo json_encode($mensaje);
        return true;
    }
}
?>