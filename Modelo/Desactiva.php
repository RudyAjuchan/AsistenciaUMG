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

}
?>