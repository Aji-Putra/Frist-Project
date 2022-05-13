<?php
include('config/koneksi.php');

$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$siswa = mysqli_fetch_assoc($query);
?>
<?php include('header.php') ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Form Edit</h4>
        </div>
        <div class="card-body">
          <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" value="<?= $siswa["nama"]; ?>">
            </div>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="number" name="nim" id="nim" class="form-control" value="<?= $siswa["nim"]; ?>">
            </div>
            <div class="form-group">
              <label for="prodi">Prodi</label>
              <input type="text" name="prodi" id="prodi" class="form-control" value="<?= $siswa["prodi"]; ?>">
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" name="jurusan" id="jurusan" class="form-control" value="<?= $siswa["jurusan"]; ?>">
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <input type="text" name="gender" id="gender" class="form-control" value="<?= $siswa["gender"]; ?>">
            </div>
            <div class="form-group">
              <label for="smester">Smester</label>
              <input type="text" name="smester" id="smester" class="form-control" value="<?= $siswa["smester"]; ?>">
            </div>
            <a href="data.php" class="btn btn-default btn-sm mt-3">Back</a>
            <button type="submit" name="submit" class="btn btn-primary btn-sm mt-3">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layout/footer.php') ?>