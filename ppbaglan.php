<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Veritabanı bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcı oturumda ise
if (isset($_SESSION['kullanici_adi'])) {
    // Kullanıcı adını al
    $kullanici_adi = $_SESSION['kullanici_adi'];

    // Dosya yükleme işlemi
    $target_dir = "uploads/"; // Yüklenecek dosyanın dizini
    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);

    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
        // Dosya başarıyla yüklendi, veritabanına kaydetme
        $sql = "UPDATE users SET profile_picture='$target_file' WHERE user_name='$kullanici_adi'";

        if ($conn->query($sql) === TRUE) {
            header("Location:hesabim.php");
        } else {
            echo "Hata: " . $conn->error;
        }
    } else {
        echo "Dosya yükleme hatası.";
    }
} else {
    // Kullanıcı oturumda değilse, başka bir işlem yapabilirsiniz
    echo "Oturum açmış bir kullanıcı bulunmamaktadır.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>