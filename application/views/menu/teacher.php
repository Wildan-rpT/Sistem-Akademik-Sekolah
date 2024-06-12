<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-people-carry"></i> GURU </h3>
  <hr class="bg-secondary">
  <table class="table table-striped">
    <a href="" class="btn btn-primary">Tambahkan</a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nip</th>
        <th scope="col">foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis_kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">no_hp</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tb_teacher as $tcr) : ?>
        <tr>
          <td><?= $tcr['id_guru']; ?></td>
          <td><?= $tcr['nip']; ?></td>
          <td></td>
          <td><?= $tcr['nama']; ?></td>
          <td><?= $tcr['jenis_kelamin']; ?></td>
          <td><?= $tcr['alamat']; ?></td>
          <td><?= $tcr['no_hp']; ?></td>
          <td>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>