<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Halaman Daftar</h1>
    <br>
    <a href="data.php"><button>Data Barang</button></a>
    <br>

    <form method="post" action="proses.php?aksi=tambah">
        <div class="form">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" value="" placeholder="Masukan Nama">
        </div>
        <div class="form">
            <label>Barang</label>
            <input type="text" name="barang" id="barang" value="" placeholder="Masukan Barang">
        </div>
        <div class="form">
            <label>Harga</label>
            <input type="text" name="harga" id="harga" value="" placeholder="Masukan Harga">
        </div>
        <div class="form">
            <label>Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="" placeholder="Masukan Tanggal">
        </div>
        <button type="submit" name="simpan">Simpan</button>

    </form>

</body>

</html>