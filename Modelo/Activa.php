<?php
require 'Conexion.php';

class Activa{    

    public function ActivarCarrera($id_carrera){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update carrera set activo=1 where id_carrera=:id_carrera";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_carrera',$id_carrera);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

<<<<<<< HEAD
    public function ActivarDocente($id_docente){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update docente set activo=1 where id_Docente=:id_docente";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_docente',$id_docente);
=======
    public function ActivarCurso($id_curso){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update curso set activo=1 where id_Curso=:id_curso";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_curso',$id_curso);
>>>>>>> 8e4ca7bceb090b5485c5fe4407ed010e98869c97
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

}
?>