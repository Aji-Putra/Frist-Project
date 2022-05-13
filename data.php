<?php include('layout/header.php');
session_start();
?>

<?php $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa") ?>
<div class="row justify-content-center">
  <div class="col-8">

    <?php if (isset($_SESSION['sukses'])) { ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p><i class="fas fa-check-circle"></i><?= $_SESSION['sukses']; ?></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php } ?>
    <div class="card mt-5">
      <div class="card-header">
        <h4 class="card-title">Data Mahasiswa</h4>
      </div>
      <div class="card-body">
        <a href="pendaftaran.php" class="btn btn-primary btn-sm float-end">
          <i class="fas fa-user-plus"></i>
          Add
        </a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Gender</th>
              <th>Prodi</th>
              <th>Jurusan</th>
              <th>Smester</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php while ($siswa = mysqli_fetch_assoc($mahasiswa)) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $siswa["nama"]; ?><br>
                  <i class="text-black-50"><?= $siswa["nim"]; ?> </i>
                </td>
                <?php if ($siswa["gender"] == 'Male') : ?>
                  <td style="color: blue"><b><i class="fa fa-male"></i> <?= $siswa["gender"]; ?></b></td>
                <?php elseif ($siswa["gender"] == 'Female') : ?>
                  <td style="color: red"><b><i class="fa fa-female"></i> <?= $siswa["gender"]; ?></b></td>
                <?php endif; ?>
                <td><?= $siswa["prodi"]; ?></td>
                <td><?= $siswa["jurusan"]; ?></td>
                <td><?= $siswa['smester']; ?></td>
                <td>
                  <div>
                    <a href="delete.php?id=<?= $siswa["id"]; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda akan menghapus data ini?')"> <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="edit.php?id=<?= $siswa["id"]; ?>" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php session_unset(); ?>
<?php include('layout/footer.php') ?>