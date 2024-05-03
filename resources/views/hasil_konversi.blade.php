<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Hasil Konversi Nilai</h2>
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nilai Akhir (NA): <?= $na ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Nilai Konversi Huruf (NH): <?= $nh ?></h6>
                        <a href="/" class="btn btn-primary">Kembali ke Halaman Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>