<?php
session_start(); // Oturumu başlat

$servername = "localhost";
$username = "root";
$password = "37689622Ee88";
$dbname = "test_db";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

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
            // Giriş başarılı ise oturum değişkenini ayarla
            $_SESSION['user_mail'] = $email;
            $_SESSION['user_name']=$username2;
            header("Location: udemy--.php");
            exit();
        } else {
            // Şifre uyuşmazsa hata mesajını ayarla
            $error_message = "Hatalı şifre!";
        }
    } else {
        // Kullanıcı bulunamazsa hata mesajını ayarla
        $error_message = "Bu e-posta adresiyle kayıtlı bir kullanıcı bulunamadı.";
    }
}

// Bağlantıyı kapat
$conn->close();
?>