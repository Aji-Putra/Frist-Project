<?php
include('config/koneksi.php');
session_start();

$id = $_GET["id"];

$sql = "DELETE FROM mahasiswa WHERE id=$id";
mysqli_query($conn, $sql);

$_SESSION['sukses'] = 'Data Berhasil di hapus';

header("location: data.php");
