<?php
require 'encabezado.php';
?>

<div class="text-entry"><h3>Docentes UMG</h3></div>
<hr>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-12">
            <!-- parte del encabezado-->
            <div class="row">
                <div class="col-md-12 mt-2 text-center text-sm-end">
                    <button type="button" class="btn btn-umg ml-2" data-bs-toggle="modal" data-bs-target="#modalDocente">
                    <i class="fas fa-plus-circle"></i> Nuevo
                    </button>
                    <!-- <a href="#" class="btn btn-ceg"><i class="fas fa-print"></i> Reporte</a> -->
                </div>
            </div>         
            <!-- parte del encabezado-->

            <!-- Cuerpo de la página-->
            <?php
                $Cargar = new Cargar();
                $Cargar->docentes();
            ?>
            <!-- Cuerpo de la página-->
        </div>
    </div>
</div>



<!--Modal para registro-->
<div class="modal fade" id="modalDocente" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Registro Docentes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form enctype="multipart/form-data" id="form-docente" class="text-center">
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese Nombre" >                    
                </div>      
                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="profesion" id="profesion" class="form-control ps-5 mt-3" placeholder="Ingrese profesion" >                    
                </div>                
                

                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="dpi" id="dpi" class="form-control ps-5 mt-3" placeholder="Ingrese dpi" >                    
                </div>              
                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="direccion" id="direccion" class="form-control ps-5 mt-3" placeholder="Ingrese direccion" >                    
                </div>                


                
                
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="enviar_docente();" class="btn btn-success">Guardar Docente</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>

<!--Modal para registro-->




<!--Modal para actualizar-->

<div class="modal fade" id="actualizarDocente" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleId">Actualizar Docente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="form_docenteA" id="form_docenteA" class="text-center">
                <input type="hidden" name="id_Docente" id="id_Docente">                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nombre" id="nombre" class="form-control ps-5 mt-3" placeholder="Ingrese Nombre" >                    
                </div>      

                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="profesion" id="profesion" class="form-control ps-5 mt-3" placeholder="Ingrese profesion" >                    
                </div>                
                

                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="dpi" id="dpi" class="form-control ps-5 mt-3" placeholder="Ingrese dpi" >                    
                </div>              
                
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="direccion" id="direccion" class="form-control ps-5 mt-3" placeholder="Ingrese direccion" >                    
                </div>                

                
                    
                
                
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" onclick="actualizar_docente();" class="btn btn-umg">Actualizar Docente</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> 
      </div>
    </div>
  </div>
</div>
<!--Modal para actualizar-->

<?php
require 'pie.php'
?>
<script src="../assets/js/Docente.js"></script>