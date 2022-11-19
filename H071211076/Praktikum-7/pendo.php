<?php
$servername = "localhost";
$database   = "pendo";
$username   = "root";
$password   = "";

//Membuat Koneksi
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Koneksi gagal:" . mysqli_connect_error());
    // } else{
    //     echo"Koneksi Berhasil";
}

$NIM        = "";
$Nama       = "";
$Alamat     = "";
$Fakultas   = "";
$berhasil   = "";
$gagal      = "";
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id         = $_GET['id'];
    $sql1       = "delete from mahasiswa where id = '$id'";
    $q1         = mysqli_query($connection, $sql1);
    if ($q1) {
        $sukses = "Data Berhasil dihapus";
    } else {
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    if (isset($_POST['NIM'])) {
        $NIM        = $_POST['NIM'];
        $Nama       = $_POST['Nama'];
        $Alamat     = $_POST['Alamat'];
        $Fakultas   = $_POST['Fakultas'];
        $id         = $_GET['id'];
        $sql1       = "UPDATE mahasiswa SET NIM='$NIM',Nama='$Nama',Alamat='$Alamat',Fakultas='$Fakultas' WHERE id = '$id'";
        $q1         = mysqli_query($connection, $sql1);
        header("Refresh:0; url=pendo.php");
    }
} else {
    if (isset($_POST["submit"])) {
        $NIM        = $_POST['NIM'];
        $Nama       = $_POST['Nama'];
        $Alamat     = $_POST['Alamat'];
        $Fakultas   = $_POST['Fakultas'];

        $cek = mysqli_query($connection, "SELECT NIM FROM mahasiswa WHERE NIM='$NIM'");
        $r3 = mysqli_fetch_array($cek);

        if (isset($r3['NIM'])) {
            $gagal       = "Gagal Memasukkan Data";
        } else {
            if ($NIM && $Nama && $Alamat && $Fakultas) {
                $sql1    = "INSERT INTO mahasiswa(NIM,Nama,Alamat,Fakultas) values ('$NIM','$Nama','$Alamat','$Fakultas')";
                $q1      = mysqli_query($connection, $sql1);
                if ($q1) {
                    $berhasil    = "Berhasil Memasukkan Data";
                } else {
                    $gagal       = "Gagal Memasukkan Data";
                }
            } else {
                $gagal = "Silahkan masukkan data terlebih dahulu!";
            }
        }
    }
}

?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="">
    <a href="logout.php">Logout</a>
    <a href="index.php">Back to Home</a>
    </div>
    <div class="mx-auto">
        <!-- Memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create/Edit Data
            </div>
            <div class="card-body">
                <!-- alert -->
                <?php
                if ($gagal) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $gagal ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($berhasil) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $berhasil ?>
                    </div>
                <?php
                }
                ?>
                <!-- Alert -->
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NIM" name="NIM" value="<?php echo $NIM ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo $Nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?php echo $Alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="Fakultas" id="Fakultas">
                                <option value="">- Pilih Fakultas -</option>
                                <option value="Keperawatan" <?php if ($Fakultas == "Keperawatan") echo "selected" ?>>Keperawatan</option>
                                <option value="Pertanian" <?php if ($Fakultas == "Pertanian") echo "selected" ?>>Pertanian</option>
                                <option value="Peternakan" <?php if ($Fakultas == "Peternakan") echo "selected" ?>>Peternakan</option>
                                <option value="Ilmu Kelautan dan Perikanan" <?php if ($Fakultas == "Ilmu Kelautan dan Perikanan") echo "selected" ?>>Ilmu Kelautan dan Perikanan</option>
                                <option value="Kehutanan" <?php if ($Fakultas == "Kehutanan") echo "selected" ?>>Kehutanan</option>
                            </select>
                            <div class="col-12" style="margin-top:15px;">
                                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Memunculkan data yang sudah di input -->
        <div class="card">
            <div class="card-header text-white bg-success">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table container">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "SELECT * FROM mahasiswa ";
                        $q2     = mysqli_query($connection, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];    
                            $NIM        = $r2['NIM'];
                            $Nama       = $r2['Nama'];
                            $Alamat     = $r2['Alamat'];
                            $Fakultas   = $r2['Fakultas'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $NIM ?></td>
                                <td scope="row"><?php echo $Nama ?></td>
                                <td scope="row"><?php echo $Alamat ?></td>
                                <td scope="row"><?php echo $Fakultas ?></td>
                                <td scope="row">
                                    <a href="pendo.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="pendo.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini ?')"><button type="button" class="btn btn-danger">Hapus</button></a>
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