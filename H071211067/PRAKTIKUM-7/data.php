<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$nim        = "";
$nama       = "";
$alamat     = "";
$fakultas   = "";
$sukses     = "";
$error      = "";

if(isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// Untuk Fungsi Delete
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "delete from mahasiswa where id = '$id'";
    $q1 = mysqli_query($conn, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal hapus data";
    }
}

// Untuk Fungsi Edit
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from mahasiswa where id = '$id'";
    $q1         = mysqli_query($conn, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nim        = $r1['NIM'];
    $nama       = $r1['Nama'];
    $alamat     = $r1['Alamat'];
    $fakultas   = $r1['Fakultas'];
 
}

// Untuk Fungsi Simpan ke Database
if(isset($_POST['simpan'])) {
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $fakultas   = $_POST['fakultas'];

    if($nim && $nama && $alamat && $fakultas) {
        // Untuk Update
        if ($op == 'edit') { 
            $sql1   = "update mahasiswa set NIM = '$nim', Nama = '$nama', Alamat = '$alamat', Fakultas = '$fakultas' where id = '$id'";
            $q1     = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diedit";
            } else {
                $error  = "Data gagal diedit";
            }

        // Untuk Insert
        } else { 
            $sql1 = "insert into mahasiswa(NIM, Nama, Alamat, Fakultas) values('$nim', '$nama', '$alamat', '$fakultas')";
            $q1   = mysqli_query($conn, $sql1);
            if($q1) {
                $sukses = "Berhasil menginput data";
            } else {
                echo "Gagal menginput Data"; // $error  = "Gagal menginput data";
            }
        }
    } else {
        $error = "Silahkan input data dengan lengkap";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .mx-auto {width:800px}
        .card {margin-top:8px}
    </style>
</head>
<body>
    <!-- Untuk Atur Display -->
    <div class="mx-auto">

        <a href="logout.php">Logout</a>

        <!-- Untuk Input Data -->
        <div class="card">
            <div class="card-header">
                Create/Edit Data
            </div>
            <div class="card-body">

                <?php
                if($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php

                    // 3 = Detik
                    header("refresh:3;url=index.php");
                }
                ?>

                <?php
                if($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php

                    // 3 = Detik
                    header("refresh:3;url=index.php");
                }
                ?>
                
                <!-- Untuk Form -->
                <form action = "" method="POST">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name ="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>

                    <!-- Untuk Form Option -->
                    <div class="mb-3 row">
                        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="fakultas" name="fakultas">
                                <option value="">- Pilih Fakultas -</option>
                                <option value="MIPA" <?php if($fakultas == "MIPA") echo "Selected" ?>>MIPA</option>
                                <option value="TEKNIK" <?php if($fakultas == "TEKNIK") echo "Selected" ?>>TEKNIK</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <!-- Untuk Output Data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Aksi</th>
                        </tr>

                        <tbody>
                            <?php
                            $sql2 = "select * from mahasiswa order by id";
                            $q2   = mysqli_query($conn, $sql2);
                            $urut = 1;
                            while($r2 = mysqli_fetch_array($q2)) {
                                $id         = $r2['id'];
                                $nim        = $r2['NIM'];
                                $nama       = $r2['Nama'];
                                $alamat     = $r2['Alamat'];
                                $fakultas   = $r2['Fakultas'];

                                ?>

                                <tr>
                                    <th scope="row"><?php echo $urut++ ?></th>
                                    <td scope="row"><?php echo $nim ?></td>
                                    <td scope="row"><?php echo $nama ?></td>
                                    <td scope="row"><?php echo $alamat ?></td>
                                    <td scope="row"><?php echo $fakultas ?></td>
                                    <td scope="row">
                                        <a href="data.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <a href="data.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr> 

                                <?php
                            }
                            ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>