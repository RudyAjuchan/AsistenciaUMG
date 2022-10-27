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

    public function docente(){
        $consultas=$this->modelo('Desactiva');
        $id_docente=$_POST['id_Docente'];
        $mensaje=$consultas->DesactivarDocente($id_docente);
        echo json_encode($mensaje);
        return true;
    }
}
?>