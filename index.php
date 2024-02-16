<?php
require_once 'navbar.php';
?>

<head>
    <title>INICIO</title>

    <style>
        .carousel-item {
            transition: transform 2s ease-in-out;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 2%;
            height: 10%;
            background-color: black;
            top: -13%;
            border: 1px solid black;
            border-radius: 10px;
        }

        .carousel-control-next {
            right: 2%;
        }

        .carousel-control-prev {
            left: 93%;
        }
        .col-lg-4{            
            margin-top: 5%;
            height: 500px;           
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;            
        }

    </style>
</head>

<body>
    <img src="./assets/images/ima2.jpg" class="w-100 h-100" style="object-fit: cover;">

    <div class="container-fluid">
        <div class="row m-5">
            <h2>NOVEDADES</h2>
        </div>

        <!-- Slider 1 -->
        <div class="row m-3">
            <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pe-4">
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa1.avif"></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa2.avif"></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa3.avif"></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa4.avif"></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pe-4">
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa5.avif"></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa6.avif"></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa7.avif"></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img class="img-fluid mx-auto d-block" src="./assets/images/slider1-inicio/zapa8.avif"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        <div class="row m-5 justify-content-center">
            <h2>IMPRESCINDIBLES</h2>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4"  style="background-image: url(./assets/images/pava.avif);">
                <br><br>
                <button type="button" class="btn btn-light"><strong>COMPRAR AHORA</strong></button>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4"  style="background-image: url(./assets/images/png2.avif);">
                <br><br>
                <button type="button" class="btn btn-light"><strong>COMPRAR AHORA</strong></button>
            </div>
        </div>    
        <br><br><br><br><br><br><br>
    </div>

    <script>
    </script>

    <?php
    require_once 'footer.php';
    ?>
</body>