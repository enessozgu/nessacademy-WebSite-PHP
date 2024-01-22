<?php
session_start(); // Session'ı başlat

include 'baglanti.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['sumbit']) {
        $username = $_POST['user_name'];
        $lastname = $_POST['user_lastname'];
        $email = $_POST['user_mail'];
        $user_password = $_POST['password'];
        $number = $_POST['user_number'];

        // Şifreyi güvenli bir şekilde hash'leme
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        // Veritabanına kullanıcı bilgilerini ekleme
        $sql = "INSERT INTO users (user_name, last_name, user_mail, user_number, password) VALUES ('$username', '$lastname', '$email', '$number', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // Kayıt başarılıysa kullanıcı bilgilerini session'a ata
            $_SESSION['kullanici_adi'] = $username;
            $_SESSION['kullanici_soyadi'] = $lastname;
            $_SESSION['kullanici_mail'] = $email;
            $_SESSION['kullanici_numara'] = $number;

            // Dosya yükleme işlemi
            $target_dir = "uploads/"; // Yüklenecek dosyanın dizini
            $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);

            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                $_SESSION['kullanici_foto'] = $target_file;
                // Dosya başarıyla yüklendi, veritabanına dosya yolunu güncelleme
                $update_sql = "UPDATE users SET profile_picture='$target_file' WHERE user_name='$username'";

                if ($conn->query($update_sql) === TRUE) {
                    echo "Profil fotoğrafı başarıyla yüklendi ve güncellendi.";

                } else {
                    echo "Hata: " . $conn->error;
                }
            } else {
                echo "Dosya yükleme hatası.";
            }

            // Veritabanına ekledikten sonra kontrol et
            $check_sql = "SELECT profile_picture FROM users WHERE user_name='$username'";
            $check_result = $conn->query($check_sql);

            if ($check_result->num_rows > 0) {
                $row = $check_result->fetch_assoc();
                $check_path = $row['profile_picture'];
                echo "Veritabanına eklenen fotoğraf yolu: " . $check_path;
            } else {
                echo "Veritabanında fotoğraf yolu bulunamadı.";
            }

            header("Location: udemy--.php");
            exit();
        } else {
            // Ekleme işlemi başarısız olursa hata mesajını ayarla
            $error_message = "Kayıt işlemi başarısız oldu: " . $conn->error;
            // Hata durumunda kullanıcıyı giriş sayfasında tut
            header("Location: index.php");
            exit();
        }
    }
}

// Bağlantıyı kapat
$conn->close();
?>