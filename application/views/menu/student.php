<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-people-carry"></i> SISWA </h3>
  <hr class="bg-secondary">
  <table class="table table-striped">
    <a href="" class="btn btn-primary">Tambahkan</a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">NISN</th>
        <th scope="col">foto</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis_kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">no_hp</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tb_student as $tst) : ?>
        <tr>
          <td><?= $tst['id_siswa']; ?></td>
          <td><?= $tst['nisn']; ?></td>
          <td></td>
          <td><?= $tst['nama']; ?></td>
          <td><?= $tst['jenis_kelamin']; ?></td>
          <td><?= $tst['alamat']; ?></td>
          <td><?= $tst['no_hp']; ?></td>
          <td>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>