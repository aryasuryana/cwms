<?php 



$datapaket = [
    ["Cuci mobil kecil", 'suzuki karimun, toyota agya, swift, ayla, jazz', 40000],
    ['Cuci mobil sedang', 'Crv,, Hrc, mobilio, civic', 45000],
    ['Cuci mobil besar',  'Fortuner, pajero, robicorn', 50000],
    ['Cuci mobil sangat besar', 'alpard, lexus, vellfire',  55000]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Beranda</title>
    <style>
        .hero-img {
            background-image: url('img/hero1.jpg');
            background-size: cover;
            height: 350px;
            background-position: 0 45%;
        }
    </style>
</head>
<body class="px-5 py-3 bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <div class="container">
            <a class="navbar-brand" href="dasboard2.php">Car Wash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dasboard2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="transaction.php">Transaksi</a>
                    </li>
                </ul>
                <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row bg-light my-3">
            <div class="col-md p-5 hero-img">
                <!-- <img src="img/hero.jpg" alt="" class="w-100" height="300"> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md mb-3">
                <h4>Daftar Paket Pencucian Mobil</h4>
            </div>
        </div>

        <div class="row mb-5">
            <!-- pengulangan array datapaket -->
            <?php foreach($datapaket as $paket) { ?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4"><?= $paket[0] ?></h5>
                        <p class="card-text"><?= $paket[1] ?></p>
                        <p class="card-text">Rp. <?= number_format($paket[2], 0, ",", "."); ?></p>
                    </div>
                </div>
                <div class="d-grid">
                    <a href="transaction.php?paket=<?= $paket[0]; ?>&harga=<?= $paket[2] ?>" class="btn btn-primary mb-5">Pilih Paket</a>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <div class="row bg-dark text-light p-3">
            <div class="col-md text-center">
                <span>©Copyright Bye ME ASLP</span>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>