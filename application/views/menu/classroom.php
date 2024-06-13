<div class="col-sm-10 col-md-10 col-lg-10 p-5 pt-2">
  <h3><i class="fas fa-school"></i> KELAS </h3>
  <hr class="bg-secondary">
  <table class="table table-striped">
    <a href="" class="btn btn-primary">Tambahkan</a>
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Kelas</th>
        <th scope="col">Kode Kelas</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tb_classroom as $tcs) : ?>
        <tr>
          <td><?= $tcs['id_kelas']; ?></td>
          <td><?= $tcs['kelas']; ?></td>
          <td><?= $tcs['kode_kelas']; ?></td>
          <td>
            <a href="" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>