<?php
require 'Controlador.php';

class Insertar extends Controlador{
    public function carrera(){
        $consultas=$this->modelo('Carreras');
        $nombre=$_POST['nombre'];
        $mensaje=$consultas->InsertarCarrera($nombre);
        echo json_encode($mensaje);
        return true;
    }

    public function curso(){
        $consultas=$this->modelo('Cursos');
        $nombre=$_POST['nombre'];
        $semestre=$_POST['semestre'];
        $id_carrera=$_POST['id_carrera'];
        $mensaje=$consultas->InsertarCurso($nombre, $semestre, $id_carrera);
        echo json_encode($mensaje);
        return true;
    }

    public function docente(){
        $consultas=$this->modelo('Docentes');
        $nombre=$_POST['nombre'];
        $profesion = $_POST['profesion'];
        $dpi = $_POST['dpi'];
        $direccion = $_POST['direccion'];
        $mensaje=$consultas->InsertarDocente($nombre,$profesion, $dpi, $direccion);
        echo json_encode($mensaje);
        return true;
    }

    /* public function venta($productos){
        //Para venta
        session_start();
        $consultas=$this->modelo('Ventas');
        $total=$_POST['total'];
        $id_cliente=$_POST['id_cliente'];
        $id_usuario=$_SESSION['EleFerr_id_usuario'];
        $id_venta=$consultas->InsertarVenta($total, $id_cliente, $id_usuario);

        //Para detalle
        $datos=json_decode(stripslashes($productos),true);        
        foreach($datos as $fila){            
            $mensaje=$consultas->InsertarDetalleVenta($fila['cantidad'],$fila['cantidad']* $fila['precio'], $fila['id'],$id_venta);
        } 

        echo json_encode($id_venta);
        return true; 
    }

    public function cliente(){
        $consultas=$this->modelo('Clientes');
        $Nit=$_POST['nit'];
        $Nombre=$_POST['nombrecliente'];
        $Telefono=$_POST['telefono'];
        $Direccion=$_POST['direccion'];
        $mensaje=$consultas->InsertarCliente($Nit,$Nombre,$Telefono,$Direccion);
        echo json_encode($mensaje);
        return true;
    }

    public function Proveedor(){
        $consultas=$this->modelo('Proveedores');
        $nombre=$_POST['nombreEmpr'];
        $direccion=$_POST['direccionEmpr'];
        $telefono=$_POST['telefonoEmpr'];
        $representante=$_POST['nombreRepresentante'];
        $mensaje=$consultas->InsertarProveedor($nombre,$direccion,$telefono,$representante);
        echo json_encode($mensaje);
        return true;
    }

    public function producto(){
        $consultas=$this->modelo('Productos');
        $nombreProducto=$_POST['nombreProducto'];
        $precioVenta=$_POST['precioVenta'];
        $precioCompra=$_POST['precioCompra'];
        $stock=$_POST['Stock'];
        $idCategoria=$_POST['idCategoria'];
        $mensaje=$consultas->InsertarProducto($nombreProducto,$precioVenta,$precioCompra,$stock,$idCategoria);
        echo json_encode($mensaje);
        return true;
    }

    //rol 
    public function rol(){
        $consultas=$this->modelo('Roles');
        $nombre=$_POST['nombreRol'];
        $mensaje=$consultas->InsertarRol($nombre);
        echo json_encode($mensaje);
        return true;
    }

    //Usuario 
    public function usuario(){
        $consultas=$this->modelo('Usuarios');
        $nombreU=$_POST['nombreUsuario'];
        $dpi=$_POST['dpi'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $idRol=$_POST['idRol'];
        $mensaje=$consultas->InsertarUsuario($nombreU,$dpi,$telefono, $direccion, $usuario, $password, $idRol);
        echo json_encode($mensaje);
        return true;
    } */

}