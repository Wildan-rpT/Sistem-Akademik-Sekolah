<!-- PAGE CONTENT -->
<div class="container-fluid">

    <!-- Page heading-->
    <br>
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Mata Pelajaran</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('course/add_course') ?>
            <div class="row mb-3">
                <label for="nama_pelajaran" class="col-sm-2 col-form-label">Nama Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pelajaran" name="nama_pelajaran" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_guru" class="col-sm-2 col-form-label">ID Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_guru" name="id_guru" required>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                    <a href="<?php echo base_url('course') ?>" class="btn btn-primary">Batal</a>
                </div>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>