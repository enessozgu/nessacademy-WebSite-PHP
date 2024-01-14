<?php
session_start(); // Session'ı başlat

include 'baglanti.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['user_mail'];
    $user_password = $_POST['password'];
    $number = $_POST['number'];
    $adres = $_POST['adres'];
    $card_number = $_POST['card_number'];
    $name_card = $_POST['name_card'];
    $profile_picture = $_POST['profile_picture'];
    $cvv = $_POST['cvv'];
    $promo = $_POST['promo'];


    // Şifreyi güvenli bir şekilde hash'leme
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);


    $ucret = 10;

    // Kullanıcının girdiği promo kodunu al
    $promo = $_POST["promo"];

    // Promo kodunu kontrol et
    $promoQuery = "SELECT * FROM promo WHERE pr = '$promo'";
    $result = $conn->query($promoQuery);

    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Promo kodu doğruysa ücreti güncelle
        $ucret = 5;
    }

    // Veritabanına kullanıcı bilgilerini ekleme
    $sql = "INSERT INTO prime_uyeler (user_name, last_name, user_mail,number ,password,adres,name_card,card_number,cvv,ucret) VALUES ('$username', '$lastname', '$email', '$number', '$hashed_password','$adres','$name_card','$card_number','$cvv','$ucret')";

    if ($conn->query($sql) === TRUE) {
        // Kayıt başarılıysa kullanıcı bilgilerini session'a ata
        $_SESSION['id'] = $id;
        $_SESSION['kullanici_adi'] = $username;
        $_SESSION['kullanici_soyadi'] = $lastname;
        $_SESSION['kullanici_mail'] = $email;
        $_SESSION['kullanici_numara'] = $number;
        $_SESSION['kullanici_adres'] = $adres;
        $_SESSION['kullanici_foto'] = $profile_picture;


        // Dosya yükleme işlemi
        $target_dir = "uploads/"; // Yüklenecek dosyanın dizini
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);

        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // Dosya başarıyla yüklendi, veritabanına dosya yolunu güncelleme
            $update_sql = "UPDATE prime_uyeler SET profile_picture='$target_file' WHERE user_name='$username'";

            if ($conn->query($update_sql) === TRUE) {
                echo "Profil fotoğrafı başarıyla yüklendi ve güncellendi.";
            } else {
                echo "Hata: " . $conn->error;
            }
        } else {
            echo "Dosya yükleme hatası.";
        }

        // Veritabanına ekledikten sonra kontrol et
        $check_sql = "SELECT profile_picture FROM prime_uyeler WHERE user_name='$username'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $row = $check_result->fetch_assoc();
            $check_path = $row['profile_picture'];
            echo "Veritabanına eklenen fotoğraf yolu: " . $check_path;
        } else {
            echo "Veritabanında fotoğraf yolu bulunamadı.";
        }

        header("Location: anaprime.php");
        exit();
    } else {
        // Ekleme işlemi başarısız olursa hata mesajını ayarla
        $error_message = "Kayıt işlemi başarısız oldu: " . $conn->error;
        // Hata durumunda kullanıcıyı giriş sayfasında tut
        header("Location: index.php");
        exit();
    }
}

// Bağlantıyı kapat
$conn->close();








?>