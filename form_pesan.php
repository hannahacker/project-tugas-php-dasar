<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
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
        max-width: 650px;
        margin: auto;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>

    <div class="container">
        <h3>Form Pesan Mahasiswa</h3>

        <form action="hasil_pesan.php" method="POST">
            Nama
            <input type="text" name="nama" class="form-control" required>
            <br>

            Kelas
            <input type="text" name="kelas" class="form-control" required>
            <br>

            Pesan/Kesan
            <textarea name="pesan" class="form-control" rows="4" required></textarea>
            <br>

            <button type="submit" name="tombol_kirim" class="btn btn-primary">
                Kirim
            </button>

            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>

</html>