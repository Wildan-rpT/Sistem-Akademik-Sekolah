<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-people-carry"></i> MATA PELAJARAN </h3>
  <hr class="bg-secondary">
  <table class="table table-striped">
    <a href="" class="btn btn-primary">Tambahkan</a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Guru</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($tb_course as $tse) : ?>
        <tr>
          <td><?= $tse['id_mapel']; ?></td>
          <td><?= $tse['nama_pelajaran']; ?></td>
          <td><?= $tse['id_guru']; ?></td>
          <td>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>