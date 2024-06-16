<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-user"></i> SISWA </h3>
  <hr class="bg-secondary">
  <?= $this->session->flashdata('pesan'); ?>
  <table class="table table-striped">
    <a href="<?php echo base_url('student/add') ?>" class="btn btn-primary">Tambahkan</a>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NISN</th>
        <th scope="col">foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($tb_student as $tst) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $tst['nisn']; ?></td>
          <td>
            <img src="<?php echo base_url() . '/foto/' . $tst['foto']; ?>" width="100" height="100">
          </td>
          <td><?= $tst['nama']; ?></td>
          <td><?= $tst['jenis_kelamin']; ?></td>
          <td><?= $tst['alamat']; ?></td>
          <td><?= $tst['no_hp']; ?></td>
          <td>
            <a href="<?php echo base_url('student/edit/') ?><?= $tst['id_siswa']; ?>" class="badge badge-primary">Edit</a>
            <a href="<?= base_url('student/delete_student/') ?><?= $tst['id_siswa']; ?>" onclick="return confirm('Hapus data?')" class="badge badge-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>