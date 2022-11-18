<?php

require 'function.php';
    //edit
    $edit = new Edit();
    $id_mhs = $_POST['id_mhs'];
    $row = $edit->edit($id_mhs);

    if (isset($_POST['update'])) {
        if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['fakultas'])) {
            if (!empty($_POST['nim']) && !empty($_POST['nama']) && !empty($_POST['alamat']) && !empty($_POST['fakultas']) ) {
                    
                $data['id_mhs'] = $id_mhs;
                $data['nim'] = $_POST['nim'];
                $data['alamat'] = $_POST['alamat'];
                $data['nama'] = $_POST['nama'];
                $data['fakultas'] = $_POST['fakultas'];

                $update = $edit->update($data);

                if($update){
                    echo "<script>alert('edit data sukses');</script>";
                    echo "<script>window.location.href = index.php';</script>";
                }else{
                    echo "<script>alert('edit data gagal');</script>";
                    echo "<script>window.location.href = index.php';</script>";
                }

            }else{
                echo "<script>alert('empty');</script>";
                header("Location: edit.php?id_mhs=$id_mhs");
            }
        }
    }

    //delete
	$delete = new Delete();
	$id_mhs = $_POST['id_mhs'];
	$delete = $delete->delete($id_mhs);

	if ($delete) {
		//echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
             Create / Edit Data
        </div>
        <div class="card-body">
            <?php
              $insert = new Insert();
              $insert = $insert->insert();
            ?>
            <form action="" method="post">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">NIM</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nim" value="<?=@$vnim?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" value="<?=@$vnama?>" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Alamat</label>
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
                <div class="form-group">
                    <button type="submit" class="bg-primary text-light" name="submit">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="card">
        <div class="card-header bg-secondary text-light">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $cc = new Fetch();
                        $rows = $fetch->fetch();
                        $i = 1;
                        if(!empty($rows)){
                        foreach($rows as $row){ 
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['fakultas']; ?></td>
                        <td>
                            <a href="delete.php?id_mhs=<?php echo $row['id_mhs']; ?>" class="badge badge-danger">Delete</a>
                            <a href="edit.php?id_mhs=<?php echo $row['id_mhs']; ?>" class="badge badge-success">Edit</a>
                        </td>
                    </tr>
                    <?php
                        }
                        }else{
                        echo "no data";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <a href="?logout=true" class="btn btn-danger"> logout </a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>