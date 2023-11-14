<?php
class database
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_latihan";


    function __construct()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_select_db($con, $this->database);
    }


    function tampil_data()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT * FROM latihan");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input_barang($nama, $barang, $harga, $tanggal)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "INSERT INTO latihan VALUES ('','$nama','$barang','$harga','$tanggal')");
    }

    function edit($id)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT * FROM latihan WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nama, $barang, $harga, $tanggal)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "UPDATE latihan SET nama='$nama',barang='$barang',harga='$harga',tanggal='$tanggal' WHERE id='$id'");
    }
    function hapus($id)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "DELETE FROM latihan WHERE id='$id'");
    }
}
$dblatihan = new database();
