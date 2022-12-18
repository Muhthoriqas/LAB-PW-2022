<?php
include 'connection.php';

$id = $_GET['editid'];
$sql = "select * from library where id= $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['ID'];
$judul = $row['Judul'];
$tahun = $row['Tahun'];
$pengarang = $row['Pengarang'];
$penerbit = $row['Penerbit'];


if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "update library set id= $id, Judul= '$judul', Tahun= '$tahun', Pengarang= '$pengarang', Penerbit= '$penerbit' where id= $id";
    
    $result = mysqli_query($con, $sql);

    if($result){
        // echo "Data Inserted Successfully";
        header('location:display.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistensi 6</title>
        <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<form method= "post">
  <div class="mb-3 col-6">
    <label class="form-label">Judul</label>
    <input type="text" name="judul" placeholder="Input Here" class="form-control" value = <?php echo $judul; ?> required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Tahun</label>
    <input type="text" name="tahun" placeholder="Input Here" class="form-control" value = <?php echo $tahun; ?> required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Pengarang</label>
    <input type="text" name= "pengarang" placeholder="Input Here" class="form-control" value = <?php echo $pengarang; ?> required>
  </div>
  <div class="mb-3 col-6">
    <label class="form-label">Penerbit</label>
    <input type="text" name="penerbit" placeholder="Input Here" class="form-control" value = <?php echo $penerbit; ?> required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </tbody>
</table>