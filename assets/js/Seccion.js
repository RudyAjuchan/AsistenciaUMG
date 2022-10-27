$(document).ready(function(){
    var tabla = $('#myTable').DataTable({
        "language": {
            "paginate": {
              "previous": "Anterior",
              "next":"Siguiente"
            },
            "lengthMenu": "Mostrar _MENU_ entradas",
            "zeroRecords": "No hay ningun registro",
            "info": "Mostrando _PAGE_ de _PAGES_",
            "infoEmpty": "No hay ningun registro",
            "search":"Buscar"
          },
          "order": [[0, "asc"]]
    });
});

function enviar_seccion(){
    var formData= new FormData(document.getElementById('form-seccion'));
        $('#loading-screen').css('display','block');
        $.ajax({
            type: "POST",
            url: "http://localhost:8070/AsistenciaUMG/Insertar/seccion",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
            
        }).done(function(response){
                var mensaje =JSON.parse(response);
                //console.log(mensaje);
                $('#loading-screen').css('display','none');
                swal({
                    icon: 'success',
                    title: 'Atención',
                    text: '¡Se ha registrado correctamente!',
                }).then(function () {	        
                        window.location.href='http://localhost:8070/AsistenciaUMG/Page/secciones';					
                });  
        });
}

function activar(id){
    var formData= new FormData();
    formData.append('id_seccion',id)
    $.ajax({
        type: "POST",
        url: "http://localhost:8070/AsistenciaUMG/Activar/seccion",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        
    }).done(function(response){
            var mensaje =JSON.parse(response);
            //console.log(mensaje);
            $('#loading-screen').css('display','none');
            swal({
                icon: 'success',
                title: 'Atención',
                text: '¡Se ha registrado correctamente!',
            }).then(function () {	        
                    window.location.href='http://localhost:8070/AsistenciaUMG/Page/secciones';					
            });  
    });
}

function desactivar(id){
    var formData= new FormData();
    formData.append('id_seccion',id)
    $.ajax({
        type: "POST",
        url: "http://localhost:8070/AsistenciaUMG/Desactivar/seccion",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        
    }).done(function(response){
            var mensaje =JSON.parse(response);
            //console.log(mensaje);
            $('#loading-screen').css('display','none');
            swal({
                icon: 'success',
                title: 'Atención',
                text: '¡Se ha registrado correctamente!',
            }).then(function () {	        
                    window.location.href='http://localhost:8070/AsistenciaUMG/Page/secciones';					
            });  
    });
}

function cargar(id){
    var conteo=0;
    $("#cargar"+id).parents("tr").find("td").each(function(){
            
                    if(conteo==0){
                            document.form_seccionA.id_seccion.value=$(this).html();
                    }
                    if(conteo==1){
                           document.form_seccionA.nombre.value=$(this).html();
                    }                    


                
            
            conteo++;
    });
}

function actualizar_seccion(){
    var formData= new FormData(document.getElementById('form_seccionA'));

    $.ajax({
        type: "POST",
        url: "http://localhost:8070/AsistenciaUMG/Modificar/seccion",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        
    }).done(function(response){
        console.log(response);
            swal({
            icon: 'success',
            title: 'Atención',
            text: 'Se ha actualizado correctamente',
            }).then(function () {	                
                window.location.href='http://localhost:8070/AsistenciaUMG/Page/secciones';					
            });
    });
}
