<?php
require 'encabezado.php';
?>

<div class="text-entry"><h3>Secciones UMG</h3></div>
<hr>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-12">
            <!-- parte del encabezado-->
            <div class="row">
                <div class="col-md-12 mt-2 text-center text-sm-end">
                    <button type="button" class="btn btn-umg ml-2" data-bs-toggle="modal" data-bs-target="#modalSeccion">
                    <i class="fas fa-plus-circle"></i> Nuevo
                    </button>
                    <!-- <a href="#" class="btn btn-ceg"><i class="fas fa-print"></i> Reporte</a> -->
                </div>
            </div>         
            <!-- parte del encabezado-->

            <!-- Cuerpo de la página-->
            <?php
                $Cargar = new Cargar();
                $Cargar->secciones();
            ?>
            <!-- Cuerpo de la página-->
        </div>
    </div>
</div>



<!--Modal para registro-->
<div class="modal fade" id="modalSeccion" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Registro Secciones</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" id="form-seccion" class="text-center">
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese seccion" >                    
                </div>                
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="enviar_seccion();" class="btn btn-success">Guardar Sección</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>

<!--Modal para registro-->




<!--Modal para actualizar-->

<div class="modal fade" id="actualizarSeccion" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Actualizar Seccion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="form_seccionA" id="form_seccionA" class="text-center">
                <input type="hidden" name="id_seccion" id="id_seccion">                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese seccion" >                    
                </div>                
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="actualizar_seccion();" class="btn btn-umg">Actualizar sección</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>
<!--Modal para actualizar-->

<?php
require 'pie.php'
?>
<script src="../assets/js/Seccion.js"></script>