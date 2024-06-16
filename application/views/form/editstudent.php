<!-- PAGE CONTENT -->
<div class="container-fluid">

    <!-- Page heading-->
    <br>
    <h1 class="h3 mb-4 text-gray-800">Edit Data Siswa</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('student/edit_student') ?>
            <input type="hidden" id="id_siswa" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">
            <div class="row mb-3">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin']; ?>" required>
                        <option selected></option>
                        <option value="Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="no_hp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $siswa['no_hp']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="foto" class="col-sm-2 col-form-label">Foto (opsional)</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="foto" name="foto">
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?php echo base_url('student') ?>" class="btn btn-primary">Batal</a>
                </div>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>