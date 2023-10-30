<?php
session_start();

$static_user = "admin";
$static_pass = "12345";

if(isset($_POST["loginadmin"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username ==  $static_user && $password == $static_pass){
        $_SESSION['loginadmin'] = true;
        header("Location: ../dashboard/dashboard.php");
        exit();
    } else {
        header("Location: Loginadmin.php?error=1");
        exit();
    }
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
    <title>Admin</title>
</head>
<body>
    <div class="container-login">
        <form action="" method="post">
            <ul style="list-style-type: none;">
                <li>
                    <a href="../index.php">
                        <img src="../Img/icons8-valorant-64.png" alt="Valo">
                    </a>
                <h1>Admin</h1>
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
                    <button type="submit" name="loginadmin">Login</button>
                </li>
            </ul>
        </form>
    </div>
    <script>
      feather.replace();
    </script>
</body>
</html>