
<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Um portfólio e biografia digital do trabalho e obra do padeiro Mário Rolando. Pão bom e português."/>
    <meta name="author" content="Bernardo Blando"/>


    <title>Mário Rolando - O PROFETA DO PÃO </title>

    <link rel="icon" type="image/x-icon" href="../assets/img/broa-centeio.jpg"/>


    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet"/>

</head>
<?php


echo '<body id="page-top">';


echo'

<nav class="navbar navbar-expand-lg  fixed-top" id="mainNav" style="background-color: white; color: black;!important;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" style="color: black" href="../#page-top">Mário Rolando</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-light">
                <li class="nav-item"><a class="nav-link " style="color: black" href="../#about">Filme</a></li>
                <li class="nav-item"><a class="nav-link " style="color: black" href="../#section-sobre">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" style="color: black" href="../#projects">Pão</a></li>
                <li class="nav-item"><a class="nav-link active " style="color: black" href="">Galeria</a></li>
                <li class="nav-item"><a class="nav-link " style="color: black" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link " style="color: black" href="../#contactos">Contactos</a></li>
            </ul>
        </div>
    </div>
</nav>


<div style="display: block; height: 11vh; ">

</div>


';


include_once "../components/c_galeria.php";



include_once "../components/c_contactos.php";

include_once "../components/c_footer.php";






echo '

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>


</body></html>';


?>