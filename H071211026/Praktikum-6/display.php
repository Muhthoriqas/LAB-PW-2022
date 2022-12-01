<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistensi 6</title>
        <!-- CSS only -->
        <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<button class="btn btn-primary"><a href="data.php" style="color: white;">Insert Data</a></button>

<table class="table w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Judul</th>
      <th scope="col">Tahun</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col"><span>Actions</span></th>
    </tr>
  </thead>

  <tbody>

    <?php
        $sql = "SELECT * FROM library";
        $result = mysqli_query($con, $sql);
            if ($result) {
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['ID'];
                  $judul = $row['Judul'];
                  $tahun = $row['Tahun'];
                  $pengarang = $row['Pengarang'];
                  $penerbit = $row['Penerbit'];
                   
                  echo 
                   "<tr>
                      <td>$id</td>
                      <td>$judul</td>
                      <td>$tahun</td>
                      <td>$pengarang</td>
                      <td>$penerbit</td>
                       
                      <td><button type='button' class= 'btn btn-warning mx-2' style='color: white;'><a href='edit.php?editid=$id'>Edit</a></button>
                      <button type='button' class= 'btn btn-danger mx-2' style='color: white;'><a href='delete.php?deleteid=$id'>Delete</a></button></td>
                   </tr>";
                }
            }
    ?>
  </tbody>
</table>
</body>
</html>