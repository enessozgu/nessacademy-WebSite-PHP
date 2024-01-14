<?php
session_start(); // Oturumu başlat

include 'baglanti.php';

// Form gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user_mail'];
    $password = $_POST['password'];

    // Kullanıcının veritabanındaki bilgilerini kontrol etme
    $sql = "SELECT * FROM users WHERE user_mail = '$email'";
   
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Girilen şifre ile veritabanındaki hash'lenmiş şifreyi kontrol etme
        if (password_verify($password, $hashed_password)) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['kullanici_adi'] = $row['user_name'];
            $_SESSION['kullanici_soyadi'] = $row['last_name'];
            $_SESSION['kullanici_numara'] = $row['user_number'];
            $_SESSION['profile_picture'] = $row['profile_picture'];
            $_SESSION['kullanici_mail'] = $row['user_mail'];
     
            $_SESSION['kullanici_mail'] = $email;
            // Giriş başarılı ise oturum değişkenini ayarla
            

     
            header("Location: udemy--.php");
            exit();
        } else {
           
            // Şifre uyuşmazsa hata mesajını ayarla
            $error_message  = "<script> alert('Hatalı şifre!') </script> " ;
            echo $error_message;
            
        }
    } else {
        $error_message  = "<script> alert('Bu e-posta adresiyle kayıtlı bir kullanıcı bulunamadı.') </script> " ;
        echo $error_message;
        
        ;
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user_mail'];
    $password = $_POST['password'];

    // Kullanıcının veritabanındaki bilgilerini kontrol etme
    $sql = "SELECT * FROM prime_uyeler WHERE user_mail = '$email'";
   
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Girilen şifre ile veritabanındaki hash'lenmiş şifreyi kontrol etme
        if (password_verify($password, $hashed_password)) {

            
            $_SESSION['id'] = $row['id'];
            $_SESSION['kullanici_adi'] = $row['user_name'];
            $_SESSION['kullanici_soyadi'] = $row['last_name'];
            $_SESSION['kullanici_mail'] = $row['user_mail'];
            $_SESSION['kullanici_numara'] = $row['user_number'];
            $_SESSION['profile_picture'] = $row['profile_picture'];
            $_SESSION['kullanici_numara'] = $row['number'];
            $_SESSION['kullanici_adres'] = $row['adres'];
     
            $_SESSION['kullanici_mail'] = $email;
            // Giriş başarılı ise oturum değişkenini ayarla
            

     
            header("Location: anaprime.php");
            exit();
        } else {
           
            // Şifre uyuşmazsa hata mesajını ayarla
            $error_message  = "<script> alert('Hatalı şifre!') </script> " ;
            echo $error_message;
            
        }
    } else {
        $error_message  = "<script> alert('Bu e-posta adresiyle kayıtlı bir kullanıcı bulunamadı.') </script> " ;
        echo $error_message;
        
        ;
    }
}

// Bağlantıyı kapat
$conn->close();
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>
    <link rel="stylesheet" href="u ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>



<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nesso</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
                    <a class="nav-link active" href="loginpage.php">Kelime Testi</a>
                    <a class="nav-link active" aria-current="true" href="loginpage.php">Sözlük</a>
                    <a href="loginpage.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:7rem;">Giriş Yap</button></a>
                    <a href="dersler.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:1rem;">Kaydol</button></a>
                </div>
            </div>

        </div>
    </nav>


    <div class="text-center w-25 " style="margin:auto;">




        <form class="form-signin" method="post">
            <a href="index.php"><img class="mb-4" src="5.png" alt="" width="400" height="300"></a>
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="user_mail" id="inputEmail" class="form-control" placeholder="Email address"
                required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© 2020-2023</p>
        </form>

    </div>

</body>

</html>