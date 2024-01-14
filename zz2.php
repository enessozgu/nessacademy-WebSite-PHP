<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMail = $_POST["user_mail"];
    $password = $_POST["password"];
    $adres = $_POST["adres"];
    $nameCard = $_POST["name_card"];
    $cardNumber = $_POST["card_number"];
    $cvv = $_POST["cvv"];

    // Örnek: Oturumdan kullanıcının adı ve soyadını al
    $firstName = $_SESSION["kullanici_adi"]; // Varsayılan olarak "first_name" olarak varsayalım
    $lastName = $_SESSION["kullanici_soyadi"];   // Varsayılan olarak "last_name" olarak varsayalım
    $number = $_SESSION["kullanici_numara"]; // Varsayılan olarak "first_name" olarak varsayalım
    $pp = $_SESSION["kullanici_foto"]; // Varsayılan olarak "first_name" olarak varsayalım






    // Kullanıcı adı ve şifresiyle eşleşen kullanıcıyı bul
    $selectUserQuery = "SELECT * FROM users WHERE user_mail = '$userMail'";
    $result = $conn->query($selectUserQuery);
    

    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Kullanıcıyı users tablosundan sil
        $deleteUserQuery = "DELETE FROM users WHERE user_mail = '$userMail' ";
        $conn->query($deleteUserQuery);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Kullanıcının bilgilerini prime_uyeler tablosuna ekle
        $insertPrimeUserQuery = "INSERT INTO prime_uyeler (user_mail, password, adres, name_card, card_number, cvv, user_name, last_name,number,profile_picture) 
                                VALUES ('$userMail', '$hashedPassword', '$adres', '$nameCard', '$cardNumber', '$cvv', '$firstName', '$lastName','$number','$pp')";
        $conn->query($insertPrimeUserQuery);

        // Başka bir sayfaya yönlendirin, örneğin ana sayfaya
        header("Location: loginpage.php");
        exit();
    } else {
        echo "Kullanıcı bulunamadı.";
    }
}

$conn->close();
?>
