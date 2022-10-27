<?php
class Cargar extends Controlador{
    public function carreras(){
        $consultas=$this->modelo('Carreras');

        $filas=$consultas->buscarCarrera();
        echo '
            <div class="table-responsive mt-3">
            <table class="table mt-4 table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Id Carrera</th>
                        <th>Nombre</th>
                        <th><center>Activo</center></th>
                        <th><center>Acción</center></th>
                        <th><center>Actualizar</center></th>
                    </tr>
                </thead>
                <tbody>
            ';
        if($filas){            
            foreach($filas as $fila){
                echo '
                    <tr>
                        <td>'.$fila['id_Carrera'].'</td>
                        <td>'.$fila['nombre'].'</td>';   
                        if($fila['activo']==1){
                            echo '<td style="font-size: 1.5rem; color:green;" class="text-center"><i class="fa-solid fa-square-check"></i></td>';
                        }else{
                            echo '<td style="font-size: 1.5rem; color:red;" class="text-center"><i class="fa-solid fa-rectangle-xmark"></i></td>';
                        }
                        if($fila['activo']==1){
                            echo '<td><center><i class="fa-solid fa-xmark" style="cursor:pointer;font-size: 2rem" onclick="desactivar('.$fila['id_Carrera'].')"></i></center></td>';
                        }else{
                            echo '<td><center><i class="fa-solid fa-check" style="cursor:pointer;font-size: 2rem" onclick="activar('.$fila['id_Carrera'].')"></i></center></td>';
                        }
                        echo '<td class="text-center"><button id="cargar'.$fila['id_Carrera'].'" onclick="cargar('.$fila['id_Carrera'].')"; style="border:none; background-color: transparent;font-size: 1.5rem" data-bs-toggle="modal" data-bs-target="#actualizarCarrera"><i class="fa-solid fa-user-pen"></i></button></td>
                    </tr>
                ';
            }
        }
        echo '<tbody></table></div>';
    }



    //Docente 
    public function docentes(){
        $consultas=$this->modelo('Docentes');

        $filas=$consultas->buscarDocente();
        echo '
            <div class="table-responsive mt-3">
            <table class="table mt-4 table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Id Docente </th>
                        <th>Nombre</th>
                        <th>Profesion</th>
                        <th>DPI</th>
                        <th>Direccion</th>
                        <th><center>Activo</center></th>
                        <th><center>Acción</center></th>
                        <th><center>Actualizar</center></th>
                    </tr>
                </thead>
                <tbody>
            ';
        if($filas){            
            foreach($filas as $fila){
                echo '
                    <tr>
                        <td>'.$fila['id_Docente'].'</td>
                        <td>'.$fila['nombre'].'</td>
                        <td>'.$fila['profesion'].'</td>
                        <td>'.$fila['dpi'].'</td>
                        <td>'.$fila['direccion'].'</td>
                     
                        
                        ';
                        
                        
                          
                        if($fila['activo']==1){
                            echo '<td style="font-size: 1.5rem; color:green;" class="text-center"><i class="fa-solid fa-square-check"></i></td>';
                        }else{
                            echo '<td style="font-size: 1.5rem; color:red;" class="text-center"><i class="fa-solid fa-rectangle-xmark"></i></td>';
                        }
                        if($fila['activo']==1){
                            echo '<td><center><i class="fa-solid fa-xmark" style="cursor:pointer;font-size: 2rem" onclick="desactivar('.$fila['id_Docente'].')"></i></center></td>';
                        }else{
                            echo '<td><center><i class="fa-solid fa-check" style="cursor:pointer;font-size: 2rem" onclick="activar('.$fila['id_Docente'].')"></i></center></td>';
                        }
                        echo '<td class="text-center"><button id="cargar'.$fila['id_Docente'].'" onclick="cargar('.$fila['id_Docente'].')"; style="border:none; background-color: transparent;font-size: 1.5rem" data-bs-toggle="modal" data-bs-target="#actualizarDocente"><i class="fa-solid fa-user-pen"></i></button></td>
                    </tr>
                ';
            }
        }
        echo '<tbody></table></div>';
    }
}