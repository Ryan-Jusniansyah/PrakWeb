<?php
require '../../function/function.php';

$result = mysqli_query($conn, "SELECT * FROM skin");

$skin = [];

while ($row = mysqli_fetch_assoc($result)) {
    $skin[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cssskin.css">
        <title>Dash Skin</title>
    </head>

    <body>
        <!-- Nav -->
        <div class="container">
            <div class="navigasi">
                <ul>
                    <li>
                        <a href="">
                            <span class="icon"><ion-icon name="logo-vue"></ion-icon></span>
                            <span class="title">SKIN COLLECTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="../dashboard.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="dash_skin.php">
                            <span class="icon"><ion-icon name="color-palette-outline"></ion-icon></span>
                            <span class="title">Skin</span>
                        </a>
                    </li>
                    <li>
                        <a href="../dashakun/dash_akun.php">
                            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <span class="title">Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon"><ion-icon name="arrow-redo-outline"></ion-icon></span>
                            <span class="title">Request</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Sign out</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main -->
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <div class="mode">
                        <ion-icon name="sunny-outline"></ion-icon>
                    </div>
                    <div class="user">
                        <img src="../../Img/icons8-valorant-64.png" alt="valo">
                    </div>
                </div>

                <!-- Tampilan skin -->
                <div class="container-tampilan">
                    <div class="Tampilanakun">
                        <div class="tambahtampilan">
                            <h2>Dash-Skin</h2>
                            <a href="add-skin/addSkin.php" class="btn">Create</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>Nama Skin</td>
                                    <td>Jenis Senjata</td>
                                    <td>Tanggal Rilis</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; foreach ($skin as $skn) :?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $skn['nama_senjata'] ?></td>
                                        <td><?php echo $skn['jenis_senjata'] ?></td>
                                        <td><?php echo $skn['harga_senjata'] ?></td>
                                        <td><?php echo $skn['tanggal_rilis'] ?></td>
                                        <td class="action">
                                            <a href="update-skin/updateSkin.php?id=<?= $skn["id_senjata"]; ?>"><button name="updateSkin" class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                                        <path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z" />
                                                    </svg></button></a>
                                            <a href="delete-skin/deleteSkin.php?id=<?= $skn["id_senjata"]; ?>"><button name="deleteSkin" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                    </svg></button></a>
                                        </td>
                                    </tr>
                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="scriptakun.js"></script>
    </body>

    </html>
</body>

</html>