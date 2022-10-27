<?php
require 'Conexion.php';

class Docentes{
    function buscarDocente(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="SELECT * FROM docente";
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

    public function InsertarDocente($Nombre, $Profesion, $Dpi, $Direccion){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="insert into docente(nombre,profesion, dpi, direccion,  activo) values(:nombre, :profesion, :dpi, :direccion, 1)";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$Nombre);
        $estado->bindParam(':profesion',$Profesion);
        $estado->bindParam(':dpi',$Dpi);
        $estado->bindParam(':direccion',$Direccion);

        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function ActualizarDocente($id_docente,$Nombre, $Profesion, $Dpi, $Direccion){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update docente set nombre=:nombre, profesion = :profesion, dpi=:dpi, direccion=:direccion where id_Docente=:id_docente";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$Nombre);
        $estado->bindParam(':profesion',$Profesion);
        $estado->bindParam(':dpi',$Dpi);
        $estado->bindParam(':direccion',$Direccion);
        $estado->bindParam(':id_docente',$id_docente);
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