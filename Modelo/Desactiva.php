<?php
require 'Conexion.php';

class Desactiva{    

    public function DesactivarCarrera($id_carrera){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update carrera set activo=0 where id_carrera=:id_carrera";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_carrera',$id_carrera);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function DesactivarCurso($id_curso){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update curso set activo=0 where id_Curso=:id_curso";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_curso',$id_curso);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function DesactivarDocente($id_docente){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update docente set activo=0 where id_Docente=:id_docente";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_docente',$id_docente);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function DesactivarCentro($id_centro){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update centro set activo=0 where id_Centro=:id_centro";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_centro',$id_centro);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

}
?>