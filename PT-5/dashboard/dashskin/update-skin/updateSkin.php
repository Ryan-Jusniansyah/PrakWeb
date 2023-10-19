<?php
require '../../../function/function.php';
$id_skin = $_GET['id'];

$skinid = mysqli_query($conn, "SELECT * FROM skin WHERE id_senjata = $id_skin");

$skin = [];

while ($row = mysqli_fetch_assoc($skinid)) {
    $skin[] = $row;
}

$skin = $skin[0];


if (isset($_POST['updateSkin'])) {
    $ns = $_POST['nama_senjata'];
    $js = $_POST['jenis_senjata'];
    $hs = $_POST['harga_senjata'];
    $tr = $_POST['tanggal_rilis'];

    $result = mysqli_query($conn, "UPDATE skin SET nama_senjata = '$ns', jenis_senjata = '$js', harga_senjata = '$hs', tanggal_rilis = '$tr' WHERE id_senjata = $id_skin");

    if($result > 0){
        echo "
        <script>  
            alert('Skin Berhasil Diubah');
            document.location.href = '../dash_skin.php';
        </script>";
    } else {
        echo "
        <script> 
            alert('Akun Gagal Diubah');
            document.location.href = 'updateSkin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Akun</title>
</head>
<body>
    <div class="cardHeader">
        <h2>Recent Request</h2>
        <a href="#" class="btn">view all</a>
    </div>
    <form action="" method="post">
    <table>
        <thead>
            <tr>
                <label for="nama_senjata">Nama Skin</label>
                <input type="text" name="nama_senjata" value="<?= $skin['nama_senjata'] ?>">
            </tr>
            <tr>
                <label for="jenis_senjata">Jenis Senjata</label>
                <input type="text" name="jenis_senjata" value="<?= $skin['jenis_senjata'] ?>">
            </tr>
            <tr>
                <label for="harga_senjata">Harga Senjata</label>
                <input type="text" name="harga_senjata" value="<?= $skin['harga_senjata'] ?>">
            </tr>
            <tr>
                <label for="tanggal_rilis">Tanggal Rilis</label>
                <input type="date" name="tanggal_rilis" value="<?= $skin['tanggal_rilis'] ?>">
            </tr>
            <button type="submit" name="updateSkin">Update</button>
        </thead>
        </form>
</body>
</html>