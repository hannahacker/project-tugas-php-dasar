<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kirim Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light d-flex align-items-center min-vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5">
                
                <h3 class="fw-bold mb-3">Pesan Berhasil Dikirim</h3>
                
                <p class="mb-4">
                    Terima kasih, <strong><?= $_POST["nama"]; ?></strong>!
                </p>
                
                <ul class="list-group list-group-flush border rounded mb-4">
                    <li class="list-group-item py-3 bg-light">
                        <strong>Nama:</strong> <?= $_POST["nama"]; ?>
                    </li>
                    <li class="list-group-item py-3">
                        <strong>Kelas:</strong> <?= $_POST["kelas"]; ?>
                    </li>
                    <li class="list-group-item py-3 bg-light">
                        <strong>Pesan / Kesan:</strong> <?= $_POST["pesan"]; ?>
                    </li>
                </ul>

                <div>
                    <a href="index.php" class="btn btn-primary fw-semibold px-4">Kembali ke Data Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>