<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./estilos.css">
    <title>PHP AVANZADO</title>
</head>
<body>

<div id="contenedor">
    <header>
        <nav class="navbar fixed-top navbar-expand-xl bg-secondary navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAbre">
                <span class="navbar-toggler-icon">
                </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarAbre">      
                    <div class="navbar-nav">
                    <a  class="nav-item nav-link active" href="index.php?ruta=inicio">INICIO</a>
                    <a class="nav-item nav-link" href="index.php?ruta=ingreso">INGRESO</a>
                    <a class="nav-item nav-link" href="index.php?ruta=contacto">CONTACTO</a>
                    <a class="nav-item nav-link" href="index.php?ruta=salir">SALIR</a>
                    </div>
                </div>
             </div>
        </nav>
    </header>   

    <section id="contenido">
        <?php
            if (isset ($_GET["ruta"])){
                if (
                    $_GET["ruta"]=="contacto" ||
                    $_GET["ruta"]=="ingreso" ||
                    $_GET["ruta"]=="inicio"||
                    $_GET["ruta"]=="salir"
                ){
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else {
                    include "paginas/error404.php";
                }
                } else {
                include "paginas/contacto.php";
                }
        ?>
    </section>
</div>

<section>
    <div class="container mt-5">
        <h2 class= "mt-5">TÍTULO</h2>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sapiente illum impedit facilis vel magnam itaque sit asperiores dignissimos? Cum error, corrupti odit aliquid quam et. Dolorem atque earum totam!</P>
        <div class="row">

            <div class="col-lg-4 text-center">
                <i class="bi bi-balloon-heart miicono"></i> 
                <h4>ICONO 1</h4>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ducimus maxime? Ut distinctio repellendus at, enim perferendis mollitia porro architecto beatae iusto fugiat, non laboriosam eveniet dicta omnis quo quis!</P>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-boombox miicono"></i>
                <h4>ICONO 2</h4>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ducimus maxime? Ut distinctio repellendus at, enim perferendis mollitia porro architecto beatae iusto fugiat, non laboriosam eveniet dicta omnis quo quis!</P>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-bug-fill miicono"></i>
                <h4>ICONO 2</h4>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ducimus maxime? Ut distinctio repellendus at, enim perferendis mollitia porro architecto beatae iusto fugiat, non laboriosam eveniet dicta omnis quo quis!</P>
            </div>           

        </div>
    </div>
</section>

</body>
</html>