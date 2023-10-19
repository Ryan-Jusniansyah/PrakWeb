<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
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
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="dashskin/dash_skin.php">
                        <span class="icon"><ion-icon name="color-palette-outline"></ion-icon></span>
                        <span class="title">Skin</span>
                    </a>
                </li>
                <li>
                    <a href="dashakun/dash_akun.php">
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
                    <img src="../Img/icons8-valorant-64.png" alt="valo">
                </div>
            </div>

            <!-- Cards -->
            <div class="cardBox">
                <div class="card">
                    <div class="skin">
                        <div class="number">20</div>
                        <div class="cardname">Skins</div>
                    </div>
                    <div class="iconBx">
                    <ion-icon name="color-palette-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                <div class="comments">
                        <div class="number">15</div>
                        <div class="cardname">Request</div>
                    </div>
                    <div class="iconBx">
                    <ion-icon name="arrow-redo-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Request Detail List -->
            <div class="detail">
                <div class="recentRequest">
                    <div class="cardHeader">
                        <h2>Recent Request</h2>
                        <a href="#" class="btn">view all</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Request</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Ryan</td>
                                <td>anasfuad50@gmail.com</td>
                                <td>Tambah skin baru vandal bang!</td>
                            </tr>
                            <tr>
                                <td>Ryan</td>
                                <td>anasfuad50@gmail.com</td>
                                <td>Tambah skin baru vandal bang!</td>
                            </tr>
                            <tr>
                                <td>Ryan</td>
                                <td>anasfuad50@gmail.com</td>
                                <td>Tambah skin baru vandal bang!</td>
                            </tr>
                            <tr>
                                <td>Ryan</td>
                                <td>anasfuad50@gmail.com</td>
                                <td>Tambah skin baru vandal bang!</td>
                            </tr>
                            <tr>
                                <td>Ryan</td>
                                <td>anasfuad50@gmail.com</td>
                                <td>Tambah skin baru vandal bang!</td>
                            </tr>
                            <tr>
                                <td>Ryan</td>
                                <td>anasfuad50@gmail.com</td>
                                <td>Tambah skin baru vandal bang!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>