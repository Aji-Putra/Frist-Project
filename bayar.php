<?php include('layout/header.php');
include('config/koneksi.php');
session_start();

?>

<?php $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE total_pembayaran < 5000000 ") ?>
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
        <h4 class="card-title">Daftar Mahasiswa Yang Menunggak</h4>
        <p>Halaman ini berisi daftar mahasiswa yang belum menyelesaikan administrasi pembayaran senilai Rp. 5.000.000</p>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Gender</th>
              <th>Prodi</th>
              <th>Jurusan</th>
              <th>Jml Tunggakan</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php while ($siswa = mysqli_fetch_assoc($mahasiswa)) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $siswa["nama"]; ?> </td>
                <td><?= $siswa["nim"]; ?> </td>
                <?php if ($siswa["gender"] == 'Male') : ?>
                  <td style="color: blue"><b><i class="fa fa-male"></i> <?= $siswa["gender"]; ?></b></td>
                <?php elseif ($siswa["gender"] == 'Female') : ?>
                  <td style="color: red"><b><i class="fa fa-female"></i> <?= $siswa["gender"]; ?></b></td>
                <?php endif; ?>
                <td><?= $siswa["prodi"]; ?></td>
                <td><?= $siswa["jurusan"]; ?></td>
                <td>Rp. <?= number_format(5000000 - $siswa['total_pembayaran']); ?></td>
                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $siswa["id"]; ?>">
                    Bayar
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal<?= $siswa["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Jumlah Yang harus di bayar</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="updatebayar.php" method="POST">
                          <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
                          <div class="modal-body">
                            <div class="form-grup">
                              <label for="example" class="form-label"> Yang telah di Bayarkan</label>
                              <input type="text" class="form-control" name="sisabayar" value="<?= $siswa['total_pembayaran']; ?>" disabled>
                            </div>
                            <div class="mb-3">
                              <label for="example" class="form-label"> Jumlah yang harus di Bayar <?= 5000000 - $siswa['total_pembayaran'] ?> </label>
                              <input type="text" name="bayar" id="bayar" class="form-control
                              <?php
                              if (isset($_SESSION['fail']))
                                echo 'is-invalid';
                              ?>
                              " autofocus>
                              <?php if (isset($_SESSION['fail'])) { ?>
                                <div class="small text-danger"><?= $_SESSION['fail']; ?></div>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="submit" class="btn btn-primary">Bayar</button>
                          </div>
                        </form>
                      </div>
                    </div>
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