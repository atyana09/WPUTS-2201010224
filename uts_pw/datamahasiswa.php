<?php
    include("konfigurasi.php");

    $jdpage = "List";
    $pg = "mhslist.php";
    $footer = "";

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

    if(isset($_POST["act"])){
        $act = $_POST["act"];
        switch ($act){
            case "store":
                if(){
                    $nama = $_POST["txNAMA"];
                    $nim = $_POST["txNIM"];
                    $prodi = $_POST["txPRODI"];
                    $tgl_lahir = $_POST["txTGL_LAHIR"];
                    $jeniskelamin = $_POST["txJENIS_KELAMIN"];
                    $idmhs = md5($nim);
                    $sql = "INSERT INTO tbmhs(nama,nim,prodi,jeniskelamin,tgl_lahir,idmhs) VALUES('$nama', '$nim', '$prodi', '$jeniskelamin',$tgl_lahir, '$idmhs');";
                    $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }
                }   

                break;
            case "update":
                $pass1 = $_POST["txPASS1"];
                $pass2 = $_POST["txPASS2"];
                if($pass1 == $pass2){
                    $nama = $_POST["txNAMA"];
                    $email = $_POST["txEMAIL"];
                    $user = $_POST["txUSER"];
                    $iduser = $_POST["iduser"];
                    $sql = "UPDATE tbuser SET nama='$nama', email='$email', username='$user', passkey='$pass1' WHERE iduser='$iduser';";
                    $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal diperbaharui',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }
                }   
                break;
            case "destroy":
                $iduser = $_POST['iduser'];
                $sql = "DELETE FROM tbuser WHERE iduser='$iduser';";
                $hasil = mysqli_query($cnn, $sql);
                    if($hasil){
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }else{
                        $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                    }
                break;
        }
    }

    if(isset($_GET["aksi"])){
        $aksi = $_GET["aksi"];
        switch($aksi) {
            case "new":
                $jdpage = "Tambah";
                $pg = "mhsnew.php";
                break;
            case "edit":
                $jdpage = "Ubah";
                $pg = "mhsedit.php";
                break;
            case "del":
                $jdpage = "Hapus";
                $pg = "mhsdel.php";
                break;
            default:
                $jdpage = "List";
                $pg = "mhslist.php";
        }
    }


?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    
    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="datamahasiswa.php">DataMahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datamk.php">DataMatakuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datadosen.php">DataDosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="datauser.php">DataUser</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    </div>

    <div class="container">Silahkan dilengkapi seperti halnya data user, untuk tabel silahkan definisikan sendiri</div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>