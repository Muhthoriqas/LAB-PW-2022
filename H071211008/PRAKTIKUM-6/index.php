<?php
    $serve = "127.0.0.1:3308";
    $user = "root";
    $pass = "";
    $database = "tugas";

    $koneksi = mysqli_connect($serve, $user, $pass, $database)or die(mysqli_error($koneksi));

    if(isset($_POST['simpan'])){
        //pas edit
        if($_GET['hal'] == "edit"){
            $edit = mysqli_query($koneksi,
            "UPDATE mahasiswa 
            set NIM = '$_POST[nim]', 
                Nama = '$_POST[nama]', 
                Alamat = '$_POST[alamat]',  
                Fakultas = '$_POST[fakultas]'
            WHERE id_mhs = '$_GET[id]'");

            if($edit){
                echo "<script> alert('Edit Data Sukses!'); document.location = 'index.php'; </script>";
            }else{
                echo "<script> alert('Edit Data Gagal'); document.location = 'index.php'; </script>";
            }

        }else{
            $simpan = mysqli_query($koneksi,
            "INSERT INTO mahasiswa (NIM, Nama, Alamat, Fakultas)
            value ('$_POST[nim]', '$_POST[nama]', '$_POST[alamat]', '$_POST[fakultas]')");

            if($simpan){
                echo "<script> alert('Simpan Data Sukses!'); document.location = 'index.php';</script>";
            }else{
                echo "<script> alert('Simpan Data Gagal'); document.location = 'index.php';</script>";
            }
        }

        
    }

     //edit & hapus
    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($koneksi, "SELECT * from mahasiswa where id_mhs = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnim = $data['NIM'];
                $vnama = $data['Nama'];
                $valamat = $data['Alamat'];
                $vfakultas = $data['Fakultas'];
            }
        }else if($_GET['hal'] == "hapus"){
            $hapus = mysqli_query($koneksi, 
            "DELETE FROM mahasiswa WHERE id_mhs = '$_GET[id]' ");
            if($hapus){
                echo "<script> alert('Hapus Data Sukses!'); document.location = 'index.php';</script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nim" value="<?=@$vnim?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nama" value="<?=@$vnama?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="alamat" value="<?=@$valamat?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="fakultas">
                                <option value="<?=@$vfakultas?>"><?=@$vfakultas?></option>
                                <option value="FEB">FEB</option>
                                <option value="FH">FH</option>
                                <option value="FK">FK</option>
                                <option value="FT">FT</option>
                                <option value="FISIP">FISIP</option>
                                <option value="FIB">FIB</option>
                                <option value="FAPERTA">FAPERTA</option>
                                <option value="FMIPA">FMIPA</option>
                                <option value="FAPET">FAPET</option>
                                <option value="FKG">FKG</option>
                                <option value="FKM">FKM</option>
                                <option value="FIKP">FIKP</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-light" name="simpan">Simpan Data</button>
                </form>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-header bg-secondary text-light">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * from mahasiswa");
                        while($data = mysqli_fetch_array($tampil)) :
                    
                    ?>
                    <tr>
                        <td><?=$no++; ?></td>
                        <td><?=$data['NIM']?></td>
                        <td><?=$data['Nama']?></td>
                        <td><?=$data['Alamat']?></td>
                        <td><?=$data['Fakultas']?></td>
                        <td>
                            <a href="index.php?hal=edit&id=<?=$data['id_mhs']?>" class="btn bg-warning">Edit</a>
                            <a href="index.php?hal=hapus&id=<?=$data['id_mhs']?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn bg-success">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile // penutup perulangan while ?>
                </table>
            </div>
        </div>
    </div>

       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>