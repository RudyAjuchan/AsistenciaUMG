<?php
require 'encabezado.php';
?>

<div class="text-entry"><h3>Centros UMG</h3></div>
<hr>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-12">
            <!-- parte del encabezado-->
            <div class="row">
                <div class="col-md-12 mt-2 text-center text-sm-end">
                    <button type="button" class="btn btn-umg ml-2" data-bs-toggle="modal" data-bs-target="#modalCentro">
                    <i class="fas fa-plus-circle"></i> Nuevo
                    </button>
                    <!-- <a href="#" class="btn btn-ceg"><i class="fas fa-print"></i> Reporte</a> -->
                </div>
            </div>         
            <!-- parte del encabezado-->

            <!-- Cuerpo de la página-->
            <?php
                $Cargar = new Cargar();
                $Cargar->centros();
            ?>
            <!-- Cuerpo de la página-->
        </div>
    </div>
</div>



<!--Modal para registro-->
<div class="modal fade" id="modalCentro" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Registro Centros</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" id="form-centro" class="text-center">
                <div class="icono">
                <i class="fa-regular fa-diamond-turn-right"></i>              
                    <input type="text" name="direccion" id="direccion" class="form-control ps-5 mt-3" placeholder="Ingrese direccion" >                    
                </div>    
                
                <div class="icono">
                <i class="fa-solid fa-building"></i>               
                    <input type="text" name="departamento" id="departamento" class="form-control ps-5 mt-3" placeholder="Ingrese departamento" >                    
                </div>  

                
                <div class="icono">
                <i class="fa-regular fa-signature"></i>              
                    <input type="text" name="alias" id="alias" class="form-control ps-5 mt-3" placeholder="Ingrese alias" >                    
                </div>  
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="enviar_centro();" class="btn btn-success">Guardar Centro</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>

<!--Modal para registro-->




<!--Modal para actualizar-->

<div class="modal fade" id="actualizarCentro" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Actualizar Centro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="form_centroA" id="form_centroA" class="text-center">
                <input type="hidden" name="id_Centro" id="id_Centro">                
                <div class="icono">
                <i class="fa-regular fa-diamond-turn-right"></i>              
                    <input type="text" name="direccion" id="direccion" class="form-control ps-5 mt-3" placeholder="Ingrese direccion" >                    
                </div>    
                
                <div class="icono">
                <i class="fa-solid fa-building"></i>               
                    <input type="text" name="departamento" id="departamento" class="form-control ps-5 mt-3" placeholder="Ingrese departamento" >                    
                </div>  

                
                <div class="icono">
                <i class="fa-regular fa-signature"></i>              
                    <input type="text" name="alias" id="alias" class="form-control ps-5 mt-3" placeholder="Ingrese alias" >                    
                </div>              
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="actualizar_centro();" class="btn btn-umg">Actualizar Centro</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>
<!--Modal para actualizar-->

<?php
require 'pie.php'
?>
<script src="../assets/js/Centro.js"></script>