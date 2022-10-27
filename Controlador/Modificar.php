<?php
require 'Controlador.php';

class Modificar extends Controlador{
    public function carrera(){
        $consultas=$this->modelo('Carreras');
        $id_carrera=$_POST['id_carrera'];
        $nombre=$_POST['nombre'];
        $mensaje=$consultas->ActualizarCarrera($id_carrera, $nombre);
        echo json_encode($mensaje);
        return true;
    }

    public function docente(){
        $consultas=$this->modelo('Docentes');
        $id_docente=$_POST['id_Docente'];
        $nombre=$_POST['nombre'];
        $profesion=$_POST['profesion'];
        $dpi=$_POST['dpi'];
        $direccion=$_POST['direccion'];
        $mensaje=$consultas->ActualizarDocente($id_docente, $nombre, $profesion, $dpi, $direccion);
        echo json_encode($mensaje);
        return true;
    }

    /* public function venta($productos){
         //Para venta
         session_start();
         $consultas=$this->modelo('Ventas');
         $id_venta=$_POST['id_venta'];
         $total=$_POST['total'];
         $id_cliente=$_POST['id_cliente'];
         $id_usuario=$_SESSION['EleFerr_id_usuario'];
         $mensaje=$consultas->ActualizarVenta($id_venta,$total, $id_cliente, $id_usuario);
 
         //Para detalle actualizar
          $datos=json_decode(stripslashes($productos),true); 
          $contador=1;                 
         foreach($datos as $fila){
             if($contador<=$_POST['cant_producto']){
                $mensaje=$consultas->ModificarDetalleVenta($fila['id_detalle'],$fila['cantidad'],$fila['cantidad']* $fila['precio'], $fila['id'],$id_venta);
             }
             $contador++;                          
         }
         //Para detalle guardar
         $contador=1;       
        foreach($datos as $fila){
            if($contador>$_POST['cant_producto']){            
                $mensaje=$consultas->InsertarDetalleVenta($fila['cantidad'],$fila['cantidad']* $fila['precio'], $fila['id'],$id_venta);
            }
            $contador++;
        } 

        //Para eliminar detalle
        $ids_Detalle=json_decode(stripslashes($_POST['ids_D']),true); 
        $bandera_eliminar=false;
        $contador=1;
        foreach($ids_Detalle as $fD){
            foreach($datos as $fila){
                if($contador<=$_POST['cant_producto']){
                    if($fD['id_detalle']==$fila['id_detalle']){
                        $bandera_eliminar=false;
                        break;
                    }else{
                        $bandera_eliminar=true;
                    }
                } 
                $contador++;                              
            }
            if($bandera_eliminar){
                $mensaje=$consultas->EliminarDetalleVenta($fD['id_detalle']);
            }                
            $bandera_eliminar=false;
        }
        echo json_encode($mensaje);
        return true;
    }

    public function cliente(){
        $consultas=$this->modelo('Clientes');
        $id_Cliente=$_POST['id_cliente'];
        $NIT=$_POST['nit'];
        $Nombre=$_POST['nombrecliente'];
        $Telefono=$_POST['telefono'];
        $Direccion=$_POST['direccion'];
        $mensaje=$consultas->ActualizarCliente($id_Cliente,$NIT,$Nombre,$Telefono,$Direccion);
        echo json_encode($mensaje);
        return true;
    }

    public function Proveedor(){
        $consultas=$this->modelo('Proveedores');
        $id_Proveedor=$_POST['id_Proveedor'];
        $nombre=$_POST['nombreEmpr'];
        $direccion=$_POST['direccionEmpr'];
        $telefono=$_POST['telefonoEmpr'];
        $representante=$_POST['nombreRepresentante'];
        $mensaje=$consultas->ActualizarProveedor($id_Proveedor,$nombre,$direccion,$telefono,$representante);
        echo json_encode($mensaje);
        return true;
    }

    public function producto(){
        $consultas=$this->modelo('Productos');
        $id_producto=$_POST['id_producto'];
        $nombreProducto=$_POST['nombreProducto'];
        $precioVenta=$_POST['precioVenta'];
        $precioCompra=$_POST['precioCompra'];
        $stock=$_POST['Stock'];
        $idCategoria=$_POST['idCategoriaA'];
        $mensaje=$consultas->ActualizarProducto($id_producto,$nombreProducto,$precioVenta,$precioCompra,$stock,$idCategoria);
        echo json_encode($mensaje);
        return true;
    }

    /// rol 
    public function rol(){
        $consultas=$this->modelo('Roles');
        $id_rol=$_POST['id_Rol'];
        $nombre=$_POST['nombreRol'];
        $mensaje=$consultas->ActualizarRol($id_rol, $nombre);
        echo json_encode($mensaje);
        return true;
    }

      /// Usuario 
      public function usuario(){
        $consultas=$this->modelo('Usuarios');
        $id_Usuario = $_POST['id_Usuario'];
        $nombreU=$_POST['nombreUsuario'];
        $dpi=$_POST['dpi'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $idRol=$_POST['idRolA'];
        $mensaje=$consultas->ActualizarUsuario($id_Usuario, $nombreU, $dpi, $telefono, $direccion, $usuario, $password, $idRol);
        echo json_encode($mensaje);
        return true;
    } */
}