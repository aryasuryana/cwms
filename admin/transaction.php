<?php

if(isset($_GET['paket']) && isset($_GET['harga'])) {
    $getpaket = $_GET['paket'];
    $getharga = $_GET['harga'];
} else {
    header("Location: dashboard2.php");
}

$datapaket = [
    ["Cuci mobil kecil", 'suzuki karimun, toyota agya, swift, ayla, jazz', 40000],
    ['Cuci mobil sedang', 'Crv,, Hrc, mobilio, civic', 45000],
    ['Cuci mobil besar',  'Fortuner, pajero, robicorn', 50000],
    ['Cuci mobil sangat besar', 'alpard, lexus, vellfire',  55000]
];

foreach($datapaket as $paket) {
    // foreach($paket as $p) {
    //     echo $p . "<br>";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Transaksi</title>
</head>
<body class="px-5 py-3 bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <div class="container">
            <a class="navbar-brand" href="dashboard2.php">Car Wash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="transaction.php">Transaksi</a>
                    </li>
                </ul>
                <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <!-- inputan untuk form transaksi -->
        <div class="row bg-dark text-light mt-5 mb-2 px-5 py-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <p>No Transaksi</p>
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control mb-3" name="no_transaksi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Tanggal Transaksi</p>
                    </div>
                    <div class="col-md">
                        <input type="date" class="form-control mb-3" name="tanggal_transaksi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Nama Customer</p>
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control mb-3" name="nama_customer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Pilihan Paket</p>
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control mb-3" disabled value="<?= isset($getpaket) ? $getpaket : '' ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Harga Paket</p>
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control mb-3" id="hargapaket" disabled value="<?= isset($getharga) ? number_format($getharga, 0, ",", ".") : '' ?>">
                    </div>
                </div>
            </div>

            <!-- tombol untuk tambahan dalam pemesanan -->
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="noadd">
                    <label class="form-check-label" for="noadd">
                        Tidak ada tambahan - Rp. 0
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="wax" value="10000">
                    <label class="form-check-label" for="wax">
                        Wax - Rp. 10.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="fogging" value="20000">
                    <label class="form-check-label" for="fogging">
                        Fogging - Rp. 20.000
                    </label>
                </div>
            </div>
        </div>

        <!-- penjumlahan -->
        <div class="row px-5 py-1 mb-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <p>Total Harga</p>
                    </div>
                    <div class="col-md">
                        <input type="text" id="TotalHarga" class="form-control" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Pembayaran</p>
                    </div>
                    <div class="col-md">
                        <input type="number" id="Pembayaran" class="form-control" onchange="pembayaran(this.value)" disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <p>Kembalian</p>
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" id="kembalian" disabled>
                    </div>
                </div>
            </div>
            <div class="col-md mt-3">
                <div class="float-end">
<a href="dashboard2.php"     type="submit" class="btn btn-primary">Kembali ke home</a></button>
                </div>
            </div>
        </div>

        <div class="row bg-dark text-light p-3">
            <div class="col-md text-center">
                <span>©Copyright Bye ME ASLP</span>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-body text-center">
                    <h3>Transaksi berhasil di simpan</h3>
                </div>
                <div class="modal-footer">
                    <a href="dashboard2.php" class="btn btn-primary">Kembali ke home</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- script buatan -->
    <script>
        const noadd = document.querySelector('#noadd');
        const wax = document.querySelector('#wax');
        const fogging = document.querySelector('#fogging');
        const Pembayaran = document.querySelector('#Pembayaran');
        const kembalian = document.querySelector('#kembalian');

        const hargapaket = document.querySelector('#hargapaket').value;
        const hargapaketint = parseInt(hargapaket.split('.').join(''));
        const totalHarga = document.querySelector('#TotalHarga');

        // event ketika radio-radio di klik
        noadd.addEventListener('click', function() {
            const data = 0;
            const total = hargapaketint + data;
            Pembayaran.removeAttribute('disabled')
            totalHarga.setAttribute('value', total);
        });
        
        wax.addEventListener('click', function() {
            const data = 10000;
            const total = hargapaketint + data;
            Pembayaran.removeAttribute('disabled')
            totalHarga.setAttribute('value', total);
        });
        
        fogging.addEventListener('click', function() {
            const data = 20000;
            const total = hargapaketint + data;
            Pembayaran.removeAttribute('disabled')
            totalHarga.setAttribute('value', total);
        });

        const pembayaran = (value) => {
            data = parseInt(value) - parseInt(totalHarga.value);
            // console.log(parseInt(totalHarga.value))
            kembalian.setAttribute('value',  data)
        }
    </script>
</body>
</html>