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
    $('#id_carrera').select2({
        dropdownParent: $('#modalCurso')
    });
});

function enviar_curso(){
    var formData= new FormData(document.getElementById('form-curso'));
        $('#loading-screen').css('display','block');
        $.ajax({
            type: "POST",
            url: "http://localhost:8070/AsistenciaUMG/Insertar/curso",
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
                        window.location.href='http://localhost:8070/AsistenciaUMG/Page/cursos';					
                });  
        });
}

function activar(id){
    var formData= new FormData();
    formData.append('id_curso',id)
    $.ajax({
        type: "POST",
        url: "http://localhost:8070/AsistenciaUMG/Activar/curso",
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
                    window.location.href='http://localhost:8070/AsistenciaUMG/Page/cursos';					
            });  
    });
}

function desactivar(id){
    var formData= new FormData();
    formData.append('id_curso',id)
    $.ajax({
        type: "POST",
        url: "http://localhost:8070/AsistenciaUMG/Desactivar/curso",
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
                    window.location.href='http://localhost:8070/AsistenciaUMG/Page/cursos';					
            });  
    });
}

function cargar(id){
    var conteo=0;
    $("#cargar"+id).parents("tr").find("td").each(function(){
            
                    if(conteo==0){
                            document.form_cursoA.id_curso.value=$(this).html();
                    }
                    if(conteo==1){
                           document.form_cursoA.nombre.value=$(this).html();
                    }
                    if(conteo==2){
                        document.form_cursoA.id_carreraA.value=$(this).html();
                    }
                    if(conteo==4){
                        document.form_cursoA.semestre.value=$(this).html();
                    }                      


                
            
            conteo++;
    });
}

function actualizar_curso(){
    var formData= new FormData(document.getElementById('form_cursoA'));

    $.ajax({
        type: "POST",
        url: "http://localhost:8070/AsistenciaUMG/Modificar/curso",
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
                window.location.href='http://localhost:8070/AsistenciaUMG/Page/cursos';					
            });
    });
}
