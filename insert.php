<?php
include('config/koneksi.php');
session_start();

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$jurusan = $_POST["jurusan"];
$gender = $_POST["gender"];
$status = $_POST["status"];
$smester = $_POST["smester"];
$total_pembayaran = $_POST["total_pembayaran"];


if ($nama == "" ) {
    $_SESSION['faill'] =  "Nama Tidak Boleh Kosong";
    header("location: pendaftaran.php");
} if ($nim == "" ) {
    $_SESSION['fail'] = "Nim Tidak Boleh Kosong";
    header("location: pendaftaran.php");
} if ($prodi == "") {
    $_SESSION['gagal'] = "Prodi TIdak Boleh Kosong";
    header("location: pendaftaran.php");
} if ($jurusan == "") {
    $_SESSION['f'] = "Jurusan TIdak Boleh Kosong";
    header("location: pendaftaran.php");
} if ($gender == "") {
    $_SESSION['h'] = "Gender TIdak Boleh Kosong";
    header("location: pendaftaran.php");
} if ($status == "") {
    $_SESSION['g'] = "Status TIdak Boleh Kosong";
    header("location: pendaftaran.php");
} if ($smester == "") {
    $_SESSION['i'] = "Smester TIdak Boleh Kosong";
    header("location: pendaftaran.php");
} else{
$sql = "INSERT INTO mahasiswa (nama, nim, prodi, jurusan, gender, status, smester, total_pembayaran) VALUES ('$nama','$nim','$prodi','$jurusan','$gender','$status','$smester','$total_pembayaran')";

mysqli_query($conn, $sql);


$_SESSION['sukses'] = 'Data Berhasil Disimpan';
header("location: data.php");
}
