<?php
include('config/koneksi.php');
session_start();

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$jurusan = $_POST["jurusan"];
$gender = $_POST["gender"];
$smester = $_POST["smester"];


$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi', jurusan='$jurusan', gender='$gender', smester='$smester' WHERE id='$id'";

mysqli_query($conn, $sql);


$_SESSION['sukses'] = 'Data Berhasil di Edit';

header("location: data.php");
