<?php
require 'Conexion.php';

class Centros{
    function buscarCentro(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="SELECT * FROM centro";
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

    public function InsertarCentro($Direccion, $Departamento, $Alias){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="insert into centro(direccion,departamento,alias,  activo) values(:direccion, :departamento, :alias, 1)";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':direccion',$Direccion);
        $estado->bindParam(':departamento',$Departamento);
        $estado->bindParam(':alias',$Alias);
        

        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function ActualizarCentro($id_centro,$Direccion, $Departamento, $Alias){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update centro set direccion=:direccion, departamento = :departamento, alias=:alias where id_Centro=:id_centro";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':direccion',$Direccion);
        $estado->bindParam(':departamento',$Departamento);
        $estado->bindParam(':alias',$Alias);
       
        $estado->bindParam(':id_centro',$id_centro);
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