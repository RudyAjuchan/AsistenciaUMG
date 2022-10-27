<?php
require 'Conexion.php';

class Secciones{
    function buscarSeccion(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="SELECT * FROM seccion";
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

    public function InsertarSeccion($nombre){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="insert into seccion(seccion, activo) values(:nombre, 1)";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$nombre);

        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function ActualizarSeccion($id_seccion, $nombre){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update seccion set seccion=:nombre where id_seccion=:id_seccion";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$nombre);
        $estado->bindParam(':id_seccion',$id_seccion);
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