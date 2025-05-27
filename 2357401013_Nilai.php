<?php
$data_nilai = [
    ["nama" => "Asep", "nilai" => 78],
    ["nama" => "Icha", "nilai" => 89],
    ["nama" => "Shane", "nilai" => 45],
    ["nama" => "Jojo", "nilai" => 67],
    ["nama" => "Willy", "nilai" => 85],
    ["nama" => "Aby", "nilai" => 70],
    ["nama" => "Julie", "nilai" => 100],
    ["nama" => "Nate", "nilai" => 66],
    ["nama" => "Osi", "nilai" => 83]
];

function getGrade($nilai) {
    if ($nilai >= 85) return 'A';
    elseif ($nilai >= 75) return 'B';
    elseif ($nilai >= 65) return 'C';
    elseif ($nilai >= 55) return 'D';
    else return 'E';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai dan Grade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f0f0f0;
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #007acc;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Nilai Siswa dan Grade</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data_nilai as $siswa) {
            $grade = getGrade($siswa["nilai"]);
            echo "<tr>
                    <td>$no</td>
                    <td>{$siswa['nama']}</td>
                    <td>{$siswa['nilai']}</td>
                    <td>$grade</td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
