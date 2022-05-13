<?php include('layout/header.php');
session_start();
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card mt-5">
        <div class="card-header">
          <h4 class="card-title">Form Pendaftaran</h4>
        </div>
        <div class="card-body">
          <form action="insert.php" method="post">
            <div class="form-group">
              <label for="nim">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control
              <?php
              if (isset($_SESSION['faill']))
                echo 'is-invalid';
              ?>
            " placeholder="Nama Mahasiswa" autofocus>
              <?php if (isset($_SESSION['faill'])) { ?>
                <div class="small text-danger"><?= $_SESSION['faill']; ?></div>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="nama">Nim</label>
              <input type="number" name="nim" id="nim" class="form-control
              <?php
              if (isset($_SESSION['fail']))
                echo 'is-invalid';
              ?>
              " placeholder="Masukan NIM">
              <?php if (isset($_SESSION['fail'])) { ?>
                <div class="small text-danger"><?= $_SESSION['fail']; ?></div>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="prodi">Prodi</label>
              <input type="text" name="prodi" id="prodi" class="form-control
              <?php
              if (isset($_SESSION['gagal']))
                echo 'is-invalid';
              ?>
              " placeholder="Masukan Prodi">
              <?php if (isset($_SESSION['gagal'])) { ?>
                <div class="small text-danger"><?= $_SESSION['gagal']; ?></div>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" name="jurusan" id="jurusan" class="form-control
              <?php
              if (isset($_SESSION['f']))
                echo 'is-invalid';
              ?>
              " placeholder="Masukan Jurusan">
              <?php if (isset($_SESSION['f'])) { ?>
                <div class="small text-danger"><?= $_SESSION['f']; ?></div>
              <?php } ?>
            </div>
            <div class="form-group">
              <label for="Gender">Gender</label>
              <input type="text" name="gender" id="gender" class="form-control
              <?php
              if (isset($_SESSION['g']))
                echo 'is-invalid';
              ?>
              " placeholder="Masukan gender">
              <?php if (isset($_SESSION['g'])) { ?>
                <div class="small text-danger"><?= $_SESSION['g']; ?></div>
              <?php } ?>
            </div>
            <div class=" form-group">
              <label for="status">Status</label>
              <input type="text" name="status" id="status" class="form-control
              <?php
              if (isset($_SESSION['h']))
                echo 'is-invalid';
              ?>
             " placeholder="Masukan Status">
              <?php if (isset($_SESSION['h'])) { ?>
                <div class="small text-danger"><?= $_SESSION['h']; ?></div>
              <?php } ?>
            </div>
            <div class=" form-group">
              <label for="smester">Smester</label>
              <input type="text" name="smester" id="smester" class="form-control
              <?php
              if (isset($_SESSION['i']))
                echo 'is-invalid';
              ?>
              " placeholder="Smester">
              <?php if (isset($_SESSION['i'])) { ?>
                <div class="small text-danger"><?= $_SESSION['i']; ?></div>
              <?php } ?>
            </div>
            <div class=" form-group">
              <label for="pembayaran">Pembayaran</label>
              <input type="number" name="total_pembayaran" id="total_pembayaran" class="form-control">
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