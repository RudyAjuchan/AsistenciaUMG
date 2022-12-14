<?php
session_start();
if($_SESSION["AsisUMG_usuario"]=="" || $_SESSION["AsisUMG_usuario"]==null){
    header("Location: http://localhost:8070/AsistenciaUMG/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <title>Asistencia UMG</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="mb-4">
                    <a href="#" class="logo"><img src="../assets/img/umg_logo.png" alt=""><span class="nav-item-custom text-white">UMG Asistencia</span></a>
                </li>
                <li><a href="http://localhost:8070/AsistenciaUMG/Page/dashboard"><i class="fa-solid fa-house"></i><span class="nav-item-custom">Inicio</span></a></li>
                <li><a href="http://localhost:8070/AsistenciaUMG/Page/carreras"><i class="fa-solid fa-school"></i><span class="nav-item-custom">Carrera</span></a></li>
                <li><a href="http://localhost:8070/AsistenciaUMG/Page/centros"><i class="fa-solid fa-building-columns"></i><span class="nav-item-custom">Centro</span></a></li>
                <li><a href="http://localhost:8070/AsistenciaUMG/Page/cursos"><i class="fa-solid fa-graduation-cap"></i><span class="nav-item-custom">Cursos</span></a></li>

                <li class="sub-btn"><a href="#"><i class="fa-solid fa-school-circle-check"></i><span class="nav-item-custom">Secci??n</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <div class="sub-menu">
                    <ul>
                        <li><a href="http://localhost:8070/AsistenciaUMG/Page/secciones" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i>Registrar Secci??n</a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i>Asignar Carrera - Secci??n</a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i>Asignar Secci??n - curso</a></li>                        
                    </ul>
                </div>
                
                <li><a href="#"><i class="fa-solid fa-calendar-days"></i><span class="nav-item-custom">Horarios</span></a></li>
                <li><a href="http://localhost:8070/AsistenciaUMG/Page/docentes"><i class="fa-solid fa-person-chalkboard"></i><span class="nav-item-custom">Docente</span></a></li>                
                <li><a href="#"><i class="fa-solid fa-file-pen"></i><span class="nav-item-custom">Inscripci??n</span></a></li>

                <li class="sub-btn"><a href="#" ><i class="fa-solid fa-user-pen"></i><span class="nav-item-custom">Asistencia</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <div class="sub-menu">
                    <ul>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i> <span>Por Fecha - Estudiante</span></a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i> <span>Por curso - Secci??n - Fecha</span></a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i> <span>Por semestre</span></a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i> <span>Por Carreras</span></a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i> <span>Por Centro</span></a></li>
                        <li><a href="#" class="nav-item-custom"><i class="fa-solid fa-hand-point-right"></i> <span>Todas las estad??sticas</span></a></li>
                    </ul>
                </div>
                
                <li><a href="#"><i class="fa-solid fa-user"></i><span class="nav-item-custom">Usuarios</span></a></li>
                <li class="final"><a href="#"><i class="fa-solid fa-chalkboard-user"></i><span class="nav-item-custom">Alumnos</span></a></li>                
                <li><a href="http://localhost:8070/AsistenciaUMG/Cerrar_session/cerrar" class="logout"><i class="fa-solid fa-right-from-bracket"></i><span class="nav-item-custom sp-logout">Cerrar sesi??n</span></a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container my-4 content">