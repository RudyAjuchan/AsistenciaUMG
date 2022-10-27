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
}
?>