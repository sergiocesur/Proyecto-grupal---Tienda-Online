<?php
require_once 'navbar.php';
?>

<head>
    <style>
        .row {
            margin-top: 2vh;
            margin-bottom: 2vh;
        }

        .card {
            border: none;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="mt-5">
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="row m-3 mx-5">
                    <?php
                    for ($j = 0; $j < 4; $j++) {
                    ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="./assets/images/catalogo/camiseta.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Camiseta Scarface</h5>
                                    <p class="card-text">Descripción</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#">29,99$</a>
                                        <div>
                                            <button class="btn" type="button">
                                                <img src="./assets/images/catalogo/carrito.png" alt="">
                                            </button>
                                            <button class="btn" type="button">
                                                <img src="./assets/images/pagina_producto/corazon.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<?php
require_once 'footer.php'
?>