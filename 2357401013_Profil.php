<?php

$profil = [
    "NIM" => "2357401013",
    "Nama" => "Muhammad Revan Kurniawan",
    "Kelas" => "Manajemen Informatika 23",
    "Jenis Kelamin" => "Laki-laki",
    "Email" => "inirevanyah@gmail.com",
    "Nomor Handphone" => "085810695569"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        .profil-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profil-container h2 {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="profil-container">
        <h2>Profil Siswa</h2>
        <table>
            <?php
            foreach ($profil as $key => $value) {
                echo "<tr><td><strong>$key</strong></td><td>: $value</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
