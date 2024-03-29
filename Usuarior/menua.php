<?php
session_start();
$inn=500;
if(isset($_SESSION['timeout'])){
    $_session_life = time() - $_SESSION['timeout'];
     if($_session_life > $inn){
        session_destroy();
        header("location:../LoginU.php");
     }
}
$_SESSION['timeout']=time();
include('../classr/class.php');
if($_SESSION['usuario']){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script type="text/javascript" language="Javascript" src="../js/funcionesr.js"></script>

    <title>Menu cine</title>
    <link rel="stylesheet" href="../Style/estiloMenur.css">
    <script>
        function redireccionar() {
            var seleccion = document.getElementById("ser").value;
            switch (seleccion) {
                case "a":
                    window.location.href = "menumovil.php";
                    break;
                case "b":
                    window.location.href = "pagina_b.html";
                    break;
                case "c":
                    window.location.href = "pagina_c.html";
                    break;
                default:
                    break;
            }
        }
    </script>

  </head>
  
  <body class="inicio">
<div>
  <nav class="nav">
        <ul class="list">

            <li class="list__item">
                <div class="list__button">
                    <img src="../assets/dashboard.svg" class="list__img">
                    <a href="#" class="nav__link">Inicio</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../assets//docs.svg" class="list__img">
                    <a href="#" class="nav__link">Evaluacion</a>
                    <img src="../assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="menua.php" class="nav__link nav__link--inside">Ingresar datos</a>
                    </li>
                </ul>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../assets//docs.svg" class="list__img">
                    <a href="#" class="nav__link">Documentacion
                    </a>
                    <img src="../assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="https://www.suin-juriscol.gov.co/viewDocument.asp?id=30050345#:~:text=RESOLUCION%20773%20DE%202023&text=(noviembre%2002)-,por%20la%20cual%20se%20adoptan%20los%20l%C3%ADmites%20de%20exposici%C3%B3n%20de,despliegue%20de%20antenas%20de%20radiocomunicaciones." class="nav__link nav__link--inside">Resolucion <br>anes 773 2023</a>
                    </li>
                    <li class="list__inside">
                        <a href="https://www.itu.int/ITU-T/recommendations/rec.aspx?rec=13446&lang=es" class="nav__link nav__link--inside">UIT-T K.52</a>
                    </li>
                    <li class="list__inside">
                        <a href="https://www.itu.int/ITU-T/recommendations/rec.aspx?rec=13448&lang=es" class="nav__link nav__link--inside">UIT-T K.70</a>
                    </li>
                    <li class="list__inside">
                        <a href="https://www.itu.int/rec/T-REC-K.100/es" class="nav__link nav__link--inside">UIT-T K. 100</a>
                    </li>
                </ul>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../assets/perfil.svg" class="list__img">
                    <a href="#" class="nav__link">Perfil</a>
                    <img src="../assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="../salir.php" class="nav__link nav__link--inside">Cerrar Sesion</a>
                    </li>
                </ul>

            </li>

        </ul>
    </nav>
</div>
<div class="logo">
    <img src="../img/red.jpeg"></img>
</div>
<br><br>
<div class="container" >
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white text-center">GESTION DE USUARIOS</h3>
                    </div>
                    <div class="card-body">
                        <form name="formu" action="" method="post">
                            <div class="row">
                            <div class="col-md-6">
                                    <br>
                                    <label for="ser">Servicio: </label>
                                    <select id="ser" name="ser">
                                        <option value="a">Servicios moviles convencional</option>
                                        
                                        <option value="b">Servicio radio-difusion sonora</option>
                                        
                                        <option value="c">Sistema de acceso inalambrico</option>
                                </select>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <input type="button" class="btn btn-primary" value="Evaluar" onclick="redireccionar()">
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
                    <div class="containersupp"></div>
            </div>
        </div>
  <script src="../js/menu.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
<?php
}else{
    $_SESSION['usuario']=NULL;
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script type='text/javascript'>
     Swal.fire({
     icon : 'error',
    title : 'ERROR!!',
     text :  ' Debe iniciar Session en el Sistema'
    }).then((result) => {
        if(result.isConfirmed){
        window.location='./LoginU.php';
        }
    }); </script>";
}
?>