<?php
require('config/config.php');




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflux</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Netflux</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="add.php">Add List</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- navbar -->

    <!-- landing page -->
    <section class="box text-white text-capitalize text-center">
        <div class="desc fw-bold">
        <h3>film, acara tv tak terbatas, dan banyak lagi</h3>
        <h5>tonton sekarang juga</h5>
        </div>
    </section>
    <!-- landing page -->

    <!-- list -->
    <div class="list">
        <div class="container box-list">
            <h2 class="text-center pb-3">Movie Lists</h2>
            <div class="row text-center text-capitalize">
                <div class="col">
                    <img src="public/img/cover.jpg" alt="cover">
                    <h4>Marvel avenger</h4>
                    <p>relase date</p>
                    <p>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </p>
                </div>
                <div class="col">
                    <img src="public/img/theavengers.jpg" alt="cover">
                    <h4>marvel avenger 2</h4>
                    <p>relase date</p>
                    <p>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </p>
                </div>
                <div class="col">
                    <img src="public/img/onepiece.jpg" alt="cover">
                    <h4>one piece</h4>
                    <p>relase date</p>
                    <p>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- list -->

    <!-- footer -->
    <div class="footer text-center text-white">
        <h4 class="fw-bold"><a href="#">Berlangganan sekarang!</a></h4>
    </div>
    <!-- footer -->
</body>
</html>