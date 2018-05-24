<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Frontend/Util/Css/bootstrap.min.css">
    <link href="Frontend/Util/Css/RCMTNS.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Mujeres TIC Norte de Santander</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" onclick="showQuieneSomos();" href="#quieneSomos">¿Quienes Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" onclick="showFormRegistro();" href="#registro">Registro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead text-center header d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Bienvenida</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">¡En esta pagina encontraras las herramientas necesarias para ser toda una mujer TIC, animate y goza de los beneficios!</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" onclick="showFormRegistro();" href="#registro">Registrarme</a>
            </div>
        </div>
    </div>
</header>
<section class="bg-primary" id="quieneSomos" hidden>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">¡Tenemos lo que necesitas!</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">La red de conocimiento mujeres TIC de Norte de Santander tiene como finalidad brindar las posibilidades para que te conviertas en toda una experta tecnologica y saques el mayor provecho de esta.</p>
            </div>
        </div>
    </div>
</section>
<section id="registro" hidden>
    <div class="container" id="formRegistro">
        <?php include "Frontend/Pages/registry.php"?>
    </div>
</section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="Frontend/Util/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<script src="Frontend/Util/Js/bootstrap.min.js"></script>

<script src="Frontend/Util/Js/registry.js"></script>
<script src="Frontend/Util/Js/RCMTNS.js"></script>
</html>