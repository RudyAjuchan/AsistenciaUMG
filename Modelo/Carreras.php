<?php
require 'Conexion.php';

class Carreras{
    function buscarCarrera(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="SELECT * FROM carrera";
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

    public function InsertarCarrera($Nombre){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="insert into carrera(nombre, activo) values(:nombre, 1)";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$Nombre);

        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function ActualizarCarrera($id_carrera,$nombre){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update carrera set nombre=:nombre where id_carrera=:id_carrera";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$nombre);
        $estado->bindParam(':id_carrera',$id_carrera);
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