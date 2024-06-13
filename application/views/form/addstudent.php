<!-- PAGE CONTENT -->
<div class="container-fluid">

    <!-- Page heading-->
    <br>
    <h1 class="h3 mb-4 text-gray-800">Tambah data siswa</h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('student/add'); ?>
            <div class="row mb-3">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nisn">
                </div>
            </div>

            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>

            <div class="row mb-3">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                </div>
            </div>

            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>

            <div class="row mb-3">
                <label for="no_hp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                </div>
            </div>

            <div class="row mb-3">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="foto" name="foto">
                </div>
            </div>
        </div>
    </div>
</div>