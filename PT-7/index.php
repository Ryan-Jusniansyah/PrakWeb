<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: Login/Login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKIN COLLECTION</title>
    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    <!-- Feather -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <!-- Navbar -->
    <section class="Header">
        <nav class="navbar">
            <a href="#" class="navbar-logo"><img src="Img/icons8-valorant-64.png" alt="Valorant"></a>

            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="Bio/Portofolio.html" target="_blank">About ME</a>
                <a href="#collection">Collection</a>
                <a href="dashboard/dashboard.php">Dashboard</a>
                <a href="Login/Logout.php">Logout</a>
            </div>

            <div class="navbar-extra">
                <img src="icon/sun.png" alt="sun" id="lightmode">
                <a href="#" id="menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
    </section>
    <!-- End Navbar -->

    <!-- Main Section -->
    <section class="hero" id="home">
        <main class="content">
            <h1>SKIN COLLECTION VALORANT</h1>
            <p>Apakah anda seorang pemain Valorant yang jago? yang ingin tampil serius atau seorang pemberani yang ingin menunjukkan warna, kami punya yang anda butuhkan</p>
            <a href="#collection" class="cta">Lihat Sekarang</a>
        </main>
    </section>
    <!-- End Main Section -->

    <!-- Collection section -->
    <section id="collection" class="collection">
        <h2 class="judul">Weapon <span>Collection</span></h2>
        <div class="Ccontainer">
            <main class="grid">
                <article>
                    <img src="weapon/Vandal.png" width="300px" alt="Vandal" class="vandal">
                    <div class="konten">
                        <a href=""><h2>Vandal</h2></a>
                    </div>
                </article>
                <article>
                    <img src="weapon/Marshal.png" width="300px" alt="Marshal" class="marshal">
                    <div class="konten">
                        <a href="#"><h2>Marshal</h2></a>
                    </div>
                </article>
                <article>
                    <img src="weapon/Sheriff.png" width="200px" alt="Sheriff" style="margin-left: 7rem;"
                    class="sheriff">
                    <div class="konten">
                        <a href="#"><h2>Sheriff</h2></a>
                    </div>
                </article>
                <article>
                    <img src="weapon/Phantom.png" width="300px" alt="Phantom"
                    class="phantom">
                    <div class="konten">
                        <a href=""><h2>Phantom</h2></a>
                    </div>
                </article>
            </main>
        </div>
    </section>
    <!-- Collection section end -->

    <!-- Contact section -->
    <section id="contact" class="contact">
        <h2>Contact <span>ME</span></h2>
        <p>Isi kolom di bawah untuk menanyakan update selanjutnya di web ini</p>
        <form method="POST" action="form.php">
            <div class="row">
                <div class="box">
                    <div class="name">
                    <i data-feather="user"></i>
                    <!-- <label for="Nama"></label> -->
                    <input type="text" placeholder="Nama" id="nama" name="Nama">
                    </div>
                    <div class="Email">
                        <!-- <label for="Email"></label> -->
                        <i data-feather="mail"></i>
                        <input type="email" placeholder="Email" id="email" name="Email">
                    </div>
                    <div class="noHp">
                        <!-- <label for="NoHp"></label> -->
                        <i data-feather="phone"></i>
                        <input type="number" placeholder="NoHp" id="noHp" name="NoHp">
                    </div>
                    <div class="btn">
                        <button id="send" onclick="message()">submit</button>
                    </div>
                    <div class="message">
                        <div class="success" id="success"><h6>We have received your data, we are waiting for the latest update, see you again!!</h6></div>
                        <div class="danger" id="danger">
                            <h5>Your data is incorrect, enter it according to the column listed</h5>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Contact section end -->

    <!-- Footer -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="Bio/Portofolio.html" target="_blank">About Me</a>
            <a href="#collection">Collection</a>
            <a href="#contact">Contact ME</a>
        </div>

        <div class="credit">
            <p>created by <span>Ryan_Jusniansyah</span>. | &copy; 2023. </p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Feather -->
    <script>
        feather.replace();
      </script>

    <!-- Javascript -->
    <script src="scripts.js"></script>
</body>
</html>