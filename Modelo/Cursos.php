<?php
require 'Conexion.php';

class Cursos{
    function buscarCursos(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="SELECT c.id_Curso, c.nombre, c.id_Carrera, c.semestre, c.activo, ca.nombre as nombreCarrera FROM curso c INNER JOIN carrera ca ON c.id_Carrera=ca.id_Carrera";
        $estado=$conexion->prepare($sql);
        $estado->execute();

        while($result = $estado->fetch()){
            $rows[]=$result;
        }
        if(!isset($rows)){
            $rows=null;
        }
        return $rows;
    }

    public function InsertarCurso($nombre, $semestre, $id_carrera){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="insert into curso(nombre, id_Carrera, semestre, activo) values(:nombre, :id_carrera, :semestre, 1)";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$nombre);
        $estado->bindParam(':id_carrera',$id_carrera);
        $estado->bindParam(':semestre',$semestre);

        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function ActualizarCurso($nombre, $semestre, $id_carrera, $id_curso){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update curso set nombre=:nombre, id_Carrera=:id_carrera, semestre=:semestre where id_Curso=:id_curso";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$nombre);
        $estado->bindParam(':semestre',$semestre);
        $estado->bindParam(':id_carrera',$id_carrera);
        $estado->bindParam(':id_curso',$id_curso);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

   /*  public function EliminarCliente($id_cliente){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="delete from cliente where id_Cliente=:id_Cliente";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_Cliente',$id_cliente);

        if(!$estado){
            return 'Error al eliminar';
        }else{
            $estado->execute();
            return 'Datos eliminado';
        }
    }

     */
}
?>