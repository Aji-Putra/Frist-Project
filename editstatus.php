<?php
include('config/koneksi.php');
session_start();

$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$siswa = mysqli_fetch_assoc($query);
?>
<?php include('layout/header.php') ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Update Status</h4>
        </div>
        <div class="card-body">
          <form action="updatestatus.php" method="post">
            <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" name="status" id="status" class="form-control" value="<?= $siswa["status"]; ?>">
            </div>
            <a href="status.php" class="btn btn-default btn-sm mt-3">Back</a>
            <button type="submit" name="submit" class="btn btn-primary btn-sm mt-3">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layout/footer.php') ?>