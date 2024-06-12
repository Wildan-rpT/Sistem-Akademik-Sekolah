<?php
if( isset($_POST["submit"]) ) {
    //mengambil data dari setiap elemen
    $nisn = htmlspecialchars ($_POST["nisn"]);
    $foto = htmlspecialchars ($_POST["foto"]);
    $nama = htmlspecialchars ($_POST["nama"]);
    $jenis_kelamin = htmlspecialchars ($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars ($_POST["alamat"]);
    $no_hp = htmlspecialchars ($_POST["no_hp"]);
    
    //query
    $data = "INSERT INTO tb_siswa VALUES ('','$nisn','$foto','$nama','$jenis_kelamin','$alamat','$no_hp')";
    mysqli_query($data);

    echo"
    <script>
        alert('DATA BERHASIL DI TAMBAHKAN ');
        document.location.href='admin.php';
    </script>
    "; 
}


?>
<form action="" method="post">
    <ul>
        <li>
            <label for="nisn">Nisn &nbsp; : &nbsp;</label>
            <input type="text" name="nisn" id="nisn" required>
        </li>
        <br>
        <li>
            <label for="foto">Foto &nbsp; &nbsp; :  &nbsp;</label>
            <input type="text" name="foto" id="foto"required>
        </li>
        <br>
        <li>
            <label for="nama">nama : &nbsp;</label>
            <input type="text" name="nama" id="nama"required>
        </li>
        <br>
        <li>
            <label for="jenis_kelamin">jenis_kelamin &nbsp; : &nbsp;</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
        </li>
        <br>
        <li>
            <label for="alamat">alamat &nbsp; : &nbsp;</label>
            <input type="text" name="alamat" id="alamat" required>
        </li>
        <br>
        <li>
            <label for="no_hp">No_hp &nbsp; : &nbsp;</label>
            <input type="text" name="no_hp" id="no_hp" required>
        </li>
        <br>
        <li>
        <button type="submit" name="submit">Tambah</button>
        </li>
    </ul>

</form>