<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-chalkboard-teacher"></i> GURU </h3>
  <hr class="bg-secondary">
  <?= $this->session->flashdata('pesan'); ?>
  <table class="table table-striped">
    <a href="<?php echo base_url('teacher/add') ?>" class="btn btn-primary">Tambahkan</a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nip</th>
        <th scope="col">foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($tb_teacher as $tcr) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $tcr['nip']; ?></td>
          <td>
            <img src="<?php echo base_url() . '/foto/' . $tcr['foto']; ?>" width="100" height="100">
          </td>
          <td><?= $tcr['nama']; ?></td>
          <td><?= $tcr['jenis_kelamin']; ?></td>
          <td><?= $tcr['alamat']; ?></td>
          <td><?= $tcr['no_hp']; ?></td>
          <td>
            <a href="<?php echo base_url('teacher/edit/') ?><?= $tcr['id_guru']; ?>" class="badge badge-primary">Edit</a>
            <a href="<?= base_url('teacher/delete_teacher/') ?><?= $tcr['id_guru']; ?>" onclick="return confirm('Hapus data?')" class="badge badge-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>