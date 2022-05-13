<?php
include('config/koneksi.php');
session_start();

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$jurusan = $_POST["jurusan"];
$gender = $_POST["gender"];
$status = $_POST["status"];


$sql = "UPDATE mahasiswa SET status='$status' WHERE id='$id'";

mysqli_query($conn, $sql);
$_SESSION['sukses'] = 'Data Berhasil di Update';

header("location: status.php");
