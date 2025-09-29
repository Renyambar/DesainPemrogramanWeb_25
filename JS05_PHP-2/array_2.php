<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <style>
        .container {
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        thead {
            background-color: #f2f2f2;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'];
    
    // echo "Nama : {$Dosen ['nama']} <br>";
    // echo "Domisili : {$Dosen ['domisili']} <br>";
    // echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
    ?>
    <table>
            <thead>
                <tr>
                    <th>Keterangan</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $Dosen['nama']; ?></td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td><?php echo $Dosen['domisili']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>