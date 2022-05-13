<?php
include('config/koneksi.php');
session_start();

$id = $_POST["id"];
// $sisabayar = $_POST["sisabayar"];
$bayar = $_POST["bayar"];
$hitung = $_POST["sisabayar"] + $bayar;

if ($bayar == "") {
    $_SESSION['fail'] =  "Pembayaran Tidak Boleh Kosong";
    header("location: bayar.php");
} else {

    $sql = "UPDATE mahasiswa SET  total_pembayaran = '$hitung'  WHERE id='$id'";

    mysqli_query($conn, $sql);

    $_SESSION['sukses'] = 'Data Berhasil di Update';

    header("location: bayar.php");
}
