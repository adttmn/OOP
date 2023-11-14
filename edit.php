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

    <h1>Halaman Edit</h1>
    <br>
    <a href="data.php"><button>Data Barang</button></a>
    <br>

    <form method="post" action="proses.php?aksi=update">
        <?php
        foreach ($dblatihan->edit($_GET['id']) as $data) {
        ?>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" placeholder="Masukan Nama">
            </div>
            <div class="form">
                <label>Barang</label>
                <input type="text" name="barang" id="barang" value="<?= $data['barang'] ?>" placeholder="Masukan Barang">
            </div>
            <div class="form">
                <label>Harga</label>
                <input type="text" name="harga" id="harga" value="<?= $data['harga'] ?>" placeholder="Masukan Harga">
            </div>
            <div class="form">
                <label>Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" value="<?= $data['tanggal'] ?>" placeholder="Masukan Tanggal">
            </div>
            <button type="submit" name="simpan">Simpan</button>
        <?php } ?>

    </form>

</body>

</html>