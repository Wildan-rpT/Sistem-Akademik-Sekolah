<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-school"></i> KELAS </h3>
  <hr class="bg-secondary">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Kelas</th>
        <th scope="col">Kode Kelas</th>
        <th scope="col">Wali Kelas</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($tb_classroom as $tcs) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $tcs['kelas']; ?></td>
          <td><?= $tcs['kode_kelas']; ?></td>
          <td><?= $tcs['nama']; ?></td>
          <td>
            <a href="<?php echo base_url('classroom/edit/') ?><?= $tcs['id_kelas']; ?>" class="btn btn-primary">Edit</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>