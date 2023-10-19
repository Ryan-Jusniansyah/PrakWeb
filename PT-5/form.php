<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body{
            background-color: black;
        }

        .c1{
            display: flex;
            width: 50%;
            margin: auto;
            justify-content: center;
            background-color: red; 
        }

        h3{
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <h3>Data anda sudah kami terima!!</h3>
    <div class="c1">
    <?php 
    $Nama = $_POST["Nama"];
    $Email = $_POST["Email"];
    $NoHp = $_POST["NoHp"];
    
    // var_dump($Nama, $Email, $NoHp);
    echo "Nama: $Nama"; 
    echo "<br>";
    echo "Email: $Email";
    echo "<br>";
    echo "NoHp: $NoHp";
    ?>
    </div>
</body>
</html>