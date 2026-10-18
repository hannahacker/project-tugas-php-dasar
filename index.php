<?php

 $mahasiswa = [
        [
            "nim" => "25001",
            "nama" => "Syahdan Astagfirullah",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "dandan@upi.edu",
            "nilai" => "85"
        ],
        [
            "nim" => "25002",
            "nama" => "Hanna Amal",
            "jurusan" => "Sastra Mandarin",
            "email" => "hamal@yahoo.com",
            "nilai" => "96"
        ],
        [
            "nim" => "25003",
            "nama" => "Salwa Kimpul",
            "jurusan" => "Pendidikan Guru Sekolah Dasar",
            "email" => "saipul@gmail",
            "nilai" => "60"
        ],
        [
            "nim" => "25004",
            "nama" => "Arsya Korea",
            "jurusan" => "Sistem Informasi",
            "email" => "resya@yahoo.com",
            "nilai" => "70"
        ],
        [
            "nim" => "25005",
            "nama" => "Ricky Have",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "riki@gmail",
            "nilai" => "55"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f5fa;
            margin: 0;
            padding: 40px;
        }

        .container {
            background-color: white;
            max-width: 1200px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eaf1ff;
        }

        .lulus {
            color: green;
            font-weight: bold;
        }

        .tidak-lulus {
            color: red;
            font-weight: bold;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .container {
                padding: 15px;
            }

            .table-wrapper {
                overflow-x: auto;
            }

            .header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>

            <a href="form_pesan.php" class="btn btn-primary">
                Isi Form Pesan
            </a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>

                    <?php foreach ($mahasiswa as $data): ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["nim"]; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["jurusan"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["nilai"]; ?></td>
                        <td>
                            <?php
                            if ($data["nilai"] >= 80) {
                                echo "A";
                            } elseif ($data["nilai"] >= 70) {
                                echo "B";
                            } elseif ($data["nilai"] >= 60) {
                                echo "C";
                            } else {
                                echo "D";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($data["nilai"] >= 70) {
                                echo "<span class='lulus'>Lulus</span>";
                            } else {
                                echo "<span class='tidak-lulus'>Tidak Lulus</span>";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?php
                                if ($data["nilai"] >= 80) {
                                    echo "A";
                                } elseif ($data["nilai"] >= 70) {
                                    echo "B";
                                } elseif ($data["nilai"] >= 60) {
                                    echo "C";
                                } else {
                                    echo "D";
                                }
                            ?>&status=<?php
                                if ($data["nilai"] >= 70) {
                                    echo "Lulus";
                                } else {
                                    echo "Tidak Lulus";
                                }
                            ?>"
                            class="btn btn-primary btn-sm">Lihat Detail</a>
                        </td>
                    </tr>

                    <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>