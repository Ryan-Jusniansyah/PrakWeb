<?php
require '../../../function/function.php';

if (isset($_POST['addSkin'])) {
    $nama = htmlspecialchars($_POST['nama_senjata']);
    $jenis = htmlspecialchars($_POST['jenis_senjata']);
    $harga = htmlspecialchars($_POST['harga_senjata']);
    $rilis = htmlspecialchars($_POST['tanggal_rilis']);

    $result = mysqli_query($conn, "INSERT INTO skin VALUES ('', '$nama', '$jenis', '$harga', '$rilis')");

    if(mysqli_affected_rows($conn) > 0) {
        echo "
        <script> 
            alert('Skin Berhasil Ditambahkan');
            document.location.href = '../dash_skin.php';
        </script>";
    } else {
        echo "
        <script> 
            alert('Skin Gagal Ditambahkan');
            document.loaction.href = 'addSkin.php';
        </script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Skin</title>
</head>
<body>
    <div class="create-skin">
        <h1>Create Skin</h1>
    </div>
    <form action="" method="post">
        <label for="nama_senjata">Nama Skin</label>
        <input type="text" name = 'nama_senjata'>

        <label for="jenis_senjata">Jenis Senjata</label>
        <input type="text" name = 'jenis_senjata'>

        <label for="harga_senjata">Harga Senjata</label>
        <input type="text" name = 'harga_senjata'>

        <label for="tanggal_rilis">Tanggal Rilis Senjata</label>
        <input type="date" name = 'tanggal_rilis'>

        <input type="submit" name ="addSkin" value ="Create Skin">
    </form>
</body>
</html>