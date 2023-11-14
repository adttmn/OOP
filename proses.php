<?php
include 'function.php';
$dblatihan = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $dblatihan->input_barang($_POST["nama"], $_POST["barang"], $_POST["harga"], $_POST["tanggal"]);
    header("location: data.php");
}
$aksi = $_GET['aksi'];
if ($aksi == "update") {
    $dblatihan->update($_POST["id"], $_POST["nama"], $_POST["barang"], $_POST["harga"], $_POST["tanggal"]);
    header("location:data.php");
}
$aksi = $_GET['aksi'];
if ($aksi == "hapus") {
    $dblatihan->hapus($_GET["id"]);
    header("location:data.php");
}
