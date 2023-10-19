<?php 
require'../function/function.php';

    if(isset($_POST["register"])){
        if(register($_POST) > 0){
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
        <h1>Register</h1>
        <form action="" method="post">
            <ul class="form">
                <li>
                    <label for="first_Name">First Name: </label>
                    <input type="text" name="first_Name" id="first_Name">
                </li>
                <li>
                    <label for="last_Name">Last Name: </label>
                    <input type="text" name="last_Name" id="last_Name">
                </li>
                <li>
                    <label for="tanggal lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                </li>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="password2">Konfirmasi password :</label>
                    <input type="password" name="password2" id="password2">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email">
                </li>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>