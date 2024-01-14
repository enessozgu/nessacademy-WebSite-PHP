<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if (isset($_POST["user_name"], $_POST["user_mail"], $_POST["yorum"])) {
    $username = $_POST['user_name'];
    $email = $_POST['user_mail'];
    $yorum = $_POST['yorum'];
    $tarih_saat = date("Y-m-d H:i:s");

    if (!empty($username) && !empty($email) && !empty($yorum)) {
        // Veritabanına veri ekleme
        $sql = "INSERT INTO yorumlar (user_name, user_mail, yorum, tarih_saat) VALUES ('$username', '$email', '$yorum', '$tarih_saat')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Yorum başarıyla eklendi!";
            echo "<script>alert('$success_message');</script>";
            echo "<script>window.location.href='udemy--.php';</script>";
            exit;
        } else {
            $error_message = "Hata oluştu: " . $conn->error;
            echo "<script>alert('$error_message');</script>";
        }
    } else {
        $error_message = "Kullanıcı adı, e-posta veya yorum boş bırakılamaz!";
        echo "<script>alert('$error_message');</script>";
    }
}

$conn->close();
?>
