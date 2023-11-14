<?php
include 'function.php';
$dblatihan = new database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Data</h1>

    <div class="card-body">
        <a href="tambah.php"><button>Input Barang</button></a>
        <br>
        <tr>
            <table border="2">
                <thead>
                    <br>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Barang</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($dblatihan->tampil_data() as $data) {
                ?>
                    <tbody>
                        <tr class="center">
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['barang'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td><?= $data['tanggal'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $data['id'] ?>&& aksi=update"><button>Edit</button></a>
                                <a href="proses.php?id=<?= $data['id'] ?>&& aksi=hapus"><button>Hapus</button></a>
                            </td>
                        </tr>
                    </tbody>

                <?php } ?>
            </table>
        </tr>
    </div>

</body>

</html>