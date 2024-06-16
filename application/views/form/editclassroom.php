<!-- PAGE CONTENT -->
<div class="container-fluid">

    <!-- Page heading-->
    <br>
    <h1 class="h3 mb-4 text-gray-800">Edit Data Kelas</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('classroom/edit_classroom') ?>
            <input type="hidden" id="id_kelas" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $kelas['kelas']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kode_kelas" class="col-sm-2 col-form-label">Kode Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" value="<?= $kelas['kode_kelas']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_guru" class="col-sm-2 col-form-label">ID Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_guru" name="id_guru" value="<?= $kelas['id_guru']; ?>" required>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="<?php echo base_url('classroom') ?>" class="btn btn-primary">Batal</a>
                </div>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>