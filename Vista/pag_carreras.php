<?php
require 'encabezado.php';
?>

<div class="text-entry"><h3>Carreras UMG</h3></div>
<hr>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-12">
            <!-- parte del encabezado-->
            <div class="row">
                <div class="col-md-12 mt-2 text-center text-sm-end">
                    <button type="button" class="btn btn-umg ml-2" data-bs-toggle="modal" data-bs-target="#modalCarrera">
                    <i class="fas fa-plus-circle"></i> Nuevo
                    </button>
                    <!-- <a href="#" class="btn btn-ceg"><i class="fas fa-print"></i> Reporte</a> -->
                </div>
            </div>         
            <!-- parte del encabezado-->

            <!-- Cuerpo de la página-->
            <?php
                $Cargar = new Cargar();
                $Cargar->carreras();
            ?>
            <!-- Cuerpo de la página-->
        </div>
    </div>
</div>



<!--Modal para registro-->
<div class="modal fade" id="modalCarrera" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Registro Carreras</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" id="form-carrera" class="text-center">
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese Nombre" >                    
                </div>                
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="enviar_carrera();" class="btn btn-success">Guardar Carreara</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>

<!--Modal para registro-->




<!--Modal para actualizar-->

<div class="modal fade" id="actualizarCarrera" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Actualizar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="form_carreraA" id="form_carreraA" class="text-center">
                <input type="hidden" name="id_carrera" id="id_carrera">                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese Nombre" >                    
                </div>                
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="actualizar_carrera();" class="btn btn-umg">Actualizar Cliente</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>
<!--Modal para actualizar-->

<?php
require 'pie.php'
?>
<script src="../assets/js/Carrera.js"></script>