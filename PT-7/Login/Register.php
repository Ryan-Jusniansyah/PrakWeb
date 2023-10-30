<?php 
require'../function/function.php';

    if(isset($_POST["register"])){
        if(register($_POST) > 0){
            header("Location: Login.php");
            echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container-form">
        <form action="" method="post">
            <ul class="form" style="list-style-type: none;">
                <li>
                    <h1>Register</h1>
                </li>
                <li>
                    <label for="first_Name">First Name: </label>
                    <input type="text" name="first_Name" id="first_Name" placeholder="First Name">
                </li>
                <li>
                    <label for="last_Name">Last Name: </label>
                    <input type="text" name="last_Name" id="last_Name" placeholder="Last Name">
                </li>
                <li>
                    <label for="tanggal lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                </li>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" placeholder="*******">
                </li>
                <li>
                    <label for="password2">Konfirmasi password :</label>
                    <input type="password" name="password2" id="password2" placeholder="*******">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Examples@gmail.com">
                </li>
                <li>
                    <a href="Login.php"></a><button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>