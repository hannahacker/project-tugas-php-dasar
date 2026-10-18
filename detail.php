<?php

if (
    isset($_GET["nim"]) &&
    isset($_GET["nama"]) &&
    isset($_GET["jurusan"]) &&
    isset($_GET["email"]) &&
    isset($_GET["nilai"])
) {
    $nim = $_GET["nim"];
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email = $_GET["email"];
    $nilai = $_GET["nilai"];
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #7bf0e5;
        margin: 0;
        padding: 40px;
    }

    .container {
        background-color: white;
        max-width: 700px;
        margin: auto;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .data {
        background-color: #f8f9fc;
        padding: 12px;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Detail Mahasiswa</h2>

        <div class="data">
            <b>NIM:</b> <?php echo $nim; ?>
        </div>

        <div class="data">
            <b>Nama:</b> <?php echo $nama; ?>
        </div>

        <div class="data">
            <b>Jurusan:</b> <?php echo $jurusan; ?>
        </div>

        <div class="data">
            <b>Email:</b> <?php echo $email; ?>
        </div>

        <div class="data">
            <b>Nilai:</b> <?php echo $nilai; ?>
        </div>

        <div class="data">
            <b>Grade:</b>
            <?php
            if ($nilai >= 80) {
                echo "A";
            } elseif ($nilai >= 70) {
                echo "B";
            } elseif ($nilai >= 60) {
                echo "C";
            } else {
                echo "D";
            }
            ?>
        </div>

        <div class="data">
            <b>Status:</b>
            <?php
            if ($nilai >= 70) {
                echo "Lulus";
            } else {
                echo "Tidak Lulus";
            }
            ?>
        </div>

        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>

</body>

</html>