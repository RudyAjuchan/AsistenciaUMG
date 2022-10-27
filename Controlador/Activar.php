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

    public function docente(){
        $consultas=$this->modelo('Activa');
        $id_docente=$_POST['id_Docente'];
        $mensaje=$consultas->ActivarDocente($id_docente);
        echo json_encode($mensaje);
        return true;
    }
    public function curso(){
        $consultas=$this->modelo('Activa');
        $id_curso=$_POST['id_curso'];
        $mensaje=$consultas->ActivarCurso($id_curso);
        echo json_encode($mensaje);
        return true;
    }

<<<<<<< HEAD






    public function seccion(){
        $consultas=$this->modelo('Activa');
        $id_seccion=$_POST['id_seccion'];
        $mensaje=$consultas->ActivarSeccion($id_seccion);
=======
    public function centro(){
        $consultas=$this->modelo('Activa');
        $id_centro=$_POST['id_Centro'];
        $mensaje=$consultas->ActivarCentro($id_centro);
>>>>>>> 38a96ea5faf16191b69b87761a15aacb20ea08d4
        echo json_encode($mensaje);
        return true;
    }
}
?>