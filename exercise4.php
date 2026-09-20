<?php

// Carreguem l'array de productes des d'un fitxer extern.
include("./products.php");

?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercici 4 - Catàleg de productes</title>

    <!-- Carreguem Bootstrap des del CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Barra de navegació -->
    <nav class="navbar bg-dark" data-bs-theme="dark">

        <div class="container">

            <!-- Nom de la botiga -->
            <a class="navbar-brand" href="#">
                My Shop
            </a>

            <!-- Enllaços de navegació -->
            <div class="navbar-nav flex-row gap-3">

                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Products</a>
                <a class="nav-link" href="#">Cart</a>
                <a class="nav-link" href="#">Login</a>

            </div>

        </div>

    </nav>


    <div class="container mt-5">

        <h1 class="mb-4">
            Productes
        </h1>

        <!--
            row-cols-1: 1 producte per fila en mòbil.
            row-cols-md-2: 2 productes per fila a partir de 768 px.
            row-cols-lg-3: 3 productes per fila a partir de 992 px.
            g-4: afegeix espai entre les files i les columnes.
        -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <?php
            // Recorrem l'array i generem una card per cada producte.
            foreach ($products as $product) :
            ?>

                <!-- Cada producte ocupa una columna -->
                <div class="col">

                    <!-- h-100 fa que totes les cards tinguin la mateixa alçada -->
                    <div class="card h-100">

                        <!-- Imatge del producte -->
                        <img
                            src="<?= $product['image'] ?>"
                            class="card-img-top"
                            alt="<?= $product['name'] ?>">

                        <div class="card-body">

                            <!-- Nom del producte -->
                            <h5 class="card-title">
                                <?= $product['name'] ?>
                            </h5>

                            <!-- Descripció del producte -->
                            <p class="card-text">
                                <?= $product['description'] ?>
                            </p>

                            <!-- Preu del producte -->
                            <p class="fw-bold">
                                <?= $product['price'] ?> €
                            </p>

                            <!-- Botons de la card -->
                            <a href="#" class="btn btn-secondary">
                                Veure detalls
                            </a>

                            <a href="#" class="btn btn-primary">
                                Afegir al carret
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</body>

</html>
