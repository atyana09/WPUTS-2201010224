<h3>Tambah Data User</h3>
<form method="POST" action="datauser.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama">
        <label for="floatingInput">NAMA</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Masukan Nim">
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Masukan Prodi">
        <label for="floatingInput">PRODI</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" name="txTGL_LAHIR" class="form-control" id="floatingInput" placeholder="Masukan TGL_LAHIR">
        <label for="floatingInput">Tanggal LAHIR</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJENIS_KELAMIN" class="form-control" id="floatingInput" placeholder="Masukan JENIS_KELAMIN">
        <label for="floatingInput">JENIS KELAMIN</label>
    </div>
   
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data Mahasiswa </button>
    <a href="datauser.php" class="btn btn-secondary"> Batal </a>
</form>