<?php
require 'Controlador.php';

class Cerrar_session extends Controlador{
    public function cerrar(){
        session_start();
        unset($_SESSION['AsisUMG_id_usuario']);
        unset($_SESSION['AsisUMG_usuario']);
        header("Location: http://localhost:8070/AsistenciaUMG");
    }
}
?>