<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pt4";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die ("Error connecting to".mysqli_connect_error());
    };


    function register($data){
        global $conn;
    
        $first_name = stripslashes($data["first_Name"]);
        $last_name = stripslashes($data["last_Name"]);
        $tanggal_lahir = $data["tanggal_lahir"];
        $username = stripslashes($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $email = stripslashes($data["email"]);

        // cek username
        $result = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                alert('Username sudah digunakan!!');
            </script>";
            return false;
        }

        // Mengecek konfirmasi password
        if( $password !== $password2){
            echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
            return false;
        }

        //enksripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
 
        // menambahkan user ke database
        mysqli_query($conn, "INSERT INTO register VALUES('', '$first_name', '$last_name', '$tanggal_lahir', '$username', '$password', '$email')");

        return mysqli_affected_rows($conn);

    }

    function tambahdata($data){
        global $conn;

        if(isset($_POST["tambah"])){
            $nama = $_POST["nama_senjata"];
            $jenis = $_POST["jenis_senjata"];
            $harga = $_POST["harga_senjata"];
            $rilis = $_POST["tanggal_rilis"];

            $result = mysqli_query($conn, "INSERT INTO skin VALUES ('', '$nama', '$jenis', '$harga', '$rilis')");

            if($result){
                echo "<script> alert('Selamat data sudah ditambahkan')</script>";
                header("Location: ../dashboard.php");
            } else {
                echo "<script>alert('Gagal ditambahkan isi dengan benar')</script>";
                header("Location: ../dashboard/akun/add_akun.php");
            }
        }
    }

    function hapus($id){
        global $conn;
        $result = mysqli_query($conn, "DELETE FROM skin WHERE id_senjata = $id");

        return mysqli_affected_rows($conn);
    }

    function hapusakun($id){
        global $conn;
        $result = mysqli_query($conn, "DELETE FROM register WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    // function ubahskin($data){
    //     global $conn;

    //     $id = $data["id"];
    //     $nama = htmlspecialchars($data['nama_senjata']);
    //     $jenis = htmlspecialchars($data['jenis_senjata']);
    //     $harga = htmlspecialchars($data['harga_senjata']);
    //     $rilis = htmlspecialchars($data['tanggal_rilis']);

    //     mysqli_query($conn, "UPDATE skin SET nama_senjata = '$nama', jenis_senjata = '$jenis', harga_senjata = '$harga', tanggal_rilis = '$rilis' WHERE id_senjata = $id");

    //     return mysqli_affected_rows($conn);
    // }

    // function query($query){
    //     global $conn;
    //     $result = mysqli_query($conn, $query);
    //     $rows = [];
    //     while($row = mysqli_fetch_assoc($result)){
    //         $rows[] = $row;
    //     }
    //     return $rows;
    // }
?>