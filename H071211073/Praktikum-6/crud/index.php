<?php
require 'functions.php';

$op = '';
$succes = '';
$failed = '';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
}

//delete
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM dataMahasiswa WHERE id = '$id'";
    $q1 = mysqli_query($conn, $sql1);
} elseif ($op == 'edit') {
    $id = $_GET['id'];
    $sql2 = "select * from dataMahasiswa where id = '$id'";
    $q2 = mysqli_query($conn, $sql2);
    while ($arr = mysqli_fetch_array($q2)) {
        $nim = $arr[0];
        $nama = $arr[1];
        $alamat = $arr[2];
        $fakultas = $arr[3];
    }
    if (isset($_POST['nim'])) {
        $id = $_GET['id'];
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $fakultas = $_POST["fakultas"];
        
        $queryUpdate = "UPDATE dataMahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', fakultas = '$fakultas' WHERE id = '$id'";
        $q2 = mysqli_query($conn, $queryUpdate);
    } else {
        echo "edit tapi belum teredit";
    }

} else {
    if(isset($_POST["submit"])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $fakultas = $_POST["fakultas"];
    
        $queryInsert = " INSERT INTO dataMahasiswa(nim,nama,alamat,fakultas)
                        VALUES
                        ('$nim', '$nama', '$alamat', '$fakultas')
                        ";
        $q1 = mysqli_query($conn, $queryInsert);
        if($q1){
            $succes = "Berhasil memasukkan data!";
        } else {
            $failed = "NIM sudah ada!";
        };

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="row mx-3 my-3">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Create/Edit Data
                </div>
                <div class="card-body">
                <?php
                    if ($succes) {
                    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $succes ?>
                    </div>
                    <?php
                    }
                    if ($failed) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $failed ?>
                    </div>
                    <?php
                    }
                ?>
                    <div>
                        <form id="form" action="" method="post">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim" required value="<?php if ($op == 'edit') echo $nim ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" required value="<?php if ($op == 'edit') echo $nama ?>">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" required value="<?php if ($op == 'edit') echo $alamat ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fakultas" class="form-label">Fakultas</label>
                                <input type="text" name="fakultas" class="form-control" id="fakultas" placeholder="--Pilih Fakultas--" required value="<?php if ($op == 'edit') echo $fakultas ?>">
                            </div>
                            <button 
                                type="submit"
                                name="submit" 
                                class="btn btn-primary" 
                                id="submit"
                            >Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
         <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
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
                        $sql2 = "select * from dataMahasiswa";
                        $q2 = mysqli_query($conn, $sql2);
                        $urut = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id = $r2['id'];
                            $nim = $r2['nim'];
                            $nama = $r2['nama'];
                            $alamat = $r2['alamat'];
                            $fakultas = $r2['fakultas'];
                        ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <td scope="row"><?php echo $nim ?></td>
                            <td scope="row"><?php echo $nama ?></td>
                            <td scope="row"><?php echo $alamat ?></td>
                            <td scope="row"><?php echo $fakultas ?></td>
                            <td scope="row">
                                <a href="index.php?op=edit&id=<?php echo $id ?>"><button 
                                    type="button"
                                    class="btn btn-warning">Edit</button></a>
                                <a href="index.php?op=delete&id=<?php echo $id ?>"
                                    onclick="return confirm('Yakin mau delete data?')"><button 
                                    type="button"
                                    class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>