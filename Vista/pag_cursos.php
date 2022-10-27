<?php
require 'encabezado.php';
?>

<div class="text-entry"><h3>Cursos UMG</h3></div>
<hr>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-12">
            <!-- parte del encabezado-->
            <div class="row">
                <div class="col-md-12 mt-2 text-center text-sm-end">
                    <button type="button" class="btn btn-umg ml-2" data-bs-toggle="modal" data-bs-target="#modalCurso">
                    <i class="fas fa-plus-circle"></i> Nuevo
                    </button>
                    <!-- <a href="#" class="btn btn-ceg"><i class="fas fa-print"></i> Reporte</a> -->
                </div>
            </div>         
            <!-- parte del encabezado-->

            <!-- Cuerpo de la página-->
            <?php
                $Cargar = new Cargar();
                $Cargar->cursos();
            ?>
            <!-- Cuerpo de la página-->
        </div>
    </div>
</div>



<!--Modal para registro-->
<div class="modal fade" id="modalCurso" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Registro Curso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" id="form-curso" class="text-center">
                <div class="icono">
                  <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                  <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese Nombre" >                    
                </div>        
                <div class="icono">
                  <i class="fa-solid fa-arrow-up-9-1"></i>                 
                  <input type="number" name="semestre" id="semestre" class="form-control ps-5 mt-3" placeholder="Ingrese Semestre" >                    
                </div>
                
                <label for="" class="float-start mt-3">Carrera</label>                
                <select name="id_carrera" id="id_carrera" style="width:100%;">
                          <option value="" disabled selected hidden>Seleccione Carrera</option>
                            <?php
                              $filass=$Cargar->buscarCarreras();
                              if($filass){
                                  foreach($filass as $fila){
                                      echo '<option value="'.$fila['id_Carrera'].'">'.$fila['nombre'].'</option>';
                                  }
                              }
                            ?>
                </select>
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="enviar_curso();" class="btn btn-success">Guardar Curso</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>

<!--Modal para registro-->




<!--Modal para actualizar-->

<div class="modal fade" id="actualizarCurso" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Actualizar Curso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="form_cursoA" id="form_cursoA" class="text-center">
                <input type="hidden" name="id_curso" id="id_curso">                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese Nombre" >                    
                </div> 
                <div class="icono">
                <i class="fa-solid fa-arrow-up-9-1"></i>                  
                    <input type="number" name="semestre" id="semestre" class="form-control ps-5 mt-3" placeholder="Ingrese semestre" >                    
                </div>      
                
                <label for="" class="float-start mt-3">Carrera</label>                
                <select name="id_carreraA" id="id_carreraA" style="width:100%;">
                          <option value="" disabled selected hidden>Seleccione Carrera</option>
                            <?php
                              $filass=$Cargar->buscarCarreras();
                              if($filass){
                                  foreach($filass as $fila){
                                      echo '<option value="'.$fila['id_Carrera'].'">'.$fila['nombre'].'</option>';
                                  }
                              }
                            ?>
                </select>
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="actualizar_curso();" class="btn btn-umg">Actualizar Curso</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>
<!--Modal para actualizar-->

<?php
require 'pie.php'
?>
<script src="../assets/js/Curso.js"></script>