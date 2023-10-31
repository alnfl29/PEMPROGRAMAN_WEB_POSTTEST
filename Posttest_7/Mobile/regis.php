<?php

require "koneksi2.php";

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($pass === $cpassword) {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM regist WHERE username = '$username'");

        if ($result) {
            if (mysqli_fetch_assoc($result)) {
                echo "
                <script> 
                alert('username telah digunakan');
                document.location.href = 'regis.php';
                </script>
                ";
            } else {
                $sql = "INSERT INTO regist (username, password) VALUES ('$username', '$pass')";
                $insert_result = mysqli_query($conn, $sql);

                if ($insert_result) {
                    echo "
                        <script> 
                        alert('registrasi berhasil');
                        document.location.href = 'form.php';
                        </script>
                    ";
                } else {
                    echo "
                    <script> 
                    alert('registrasi gagal');
                    document.location.href = 'regis.php';
                    </script>
                    ";
                }
            }
        } else {
            echo "Error in the query: " . mysqli_error($conn);
        }
    } else {
        echo "
                <script> 
                alert('password tidak sama');
                document.location.href = 'regis.php';
                </script>
                ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Registrasi Website Toko Sepatu</title>
    <style>
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url(toko.jpeg);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            position: relative;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            background-color: #1e1e2f; 
            z-index: 1; 
        }


        .form-container {
            background-color: #1e1e2f; 
            padding: 20px;
            border-radius: 10px;
        }


        h1 {
            color: #fff;
            text-align: center; 
            margin-bottom: 25px; 
            font-size: 2.5em; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }

        hr {
            border: 0;
            height: 3px;
            background: linear-gradient(to right, #7f00ff, #e100ff); 
            margin-bottom: 20px;
        }

        .textfield {
            width: 100%;
            padding: 15px;
            margin-bottom: 30px;
            border: 2px solid #7f00ff; 
            background-color: #2c2c54; 
            color: #fff; 
            border-radius: 8px; 
            font-size: 20px;
            transition: border-color 0.3s, box-shadow 0.3s; 
        }

        .textfield:focus {
            border-color: #5e54c7;
            box-shadow: 0 0 8px #5e54c7; 
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #7f00ff; 
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 25px;
            transition: background-color 0.3s, transform 0.3s; 
        }

        .login-btn:hover {
            background-color: #5e54c7; 
            transform: scale(1.05);
        }

        .login-btn:active {
            transform: scale(0.95); 
        }

        /* Responsif untuk layar yang lebih kecil */
        @media (max-width: 600px) {
            .form {
                width: 90%;
            }

            .textfield, .login-btn {
                font-size: 18px; /* Mengurangi ukuran font pada layar kecil */
            }
        }

        </style>
</head>

<body>
    <div class="form">
        <img src="../assets/rektorat.jpg" alt="">
        <div class="form-container">
            <h1>Silahkan Registrasi Dulu!</h1><hr>
            
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" class="textfield">
                <input type="password" name="password" placeholder="Password" class="textfield">
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" class="textfield" required> <br>
                <button type="submit" name="register" class="login-btn">Register</button>
            </form>
        </div>
    </div>
</body>

</html>