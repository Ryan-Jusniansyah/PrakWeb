<?php 
session_start();

if(isset($_SESSION["Login"])){
    header("Location: index.php");
    exit;
}

require'../function/function.php';

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"] = true;

            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylelogin.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <body>
    <title>Login</title>
</head>
<body>
    <div class="container-login">
        <form action="" method="post">
            <ul style="list-style-type: none;">
                <li>
                    <img src="../Img/icons8-valorant-64.png" alt="Valo">
                <h1>Login</h1>
                <?php if(isset($error)): ?>
                    <p style="color: red; font-style: italic;">Username/Password Salah!!</p>
                <?php endif;?>
                </li>
                <li>
                    <label for="username"><i data-feather="users" class="icon"></i>Username</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password"><i data-feather="lock" class="icon"></i>Password</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
                <li>
                    <p>Belum memilki akun? <a href="Register.php">Register Sekarang!</a></p> 
                </li>
            </ul>
        </form>
    </div>
    <script>
      feather.replace();
    </script>
</body>
</html>