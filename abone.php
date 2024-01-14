<?php
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

// POST yöntemiyle bir formdan veri geldi mi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Formdan gelen e-posta adresini al
    $email = $_POST['email'];

    // Veritabanına e-posta adresini eklemek için SQL sorgusu
    $sql = "INSERT INTO abone (abone_mail) VALUES ('$email')";

    // Sorguyu çalıştır ve sonucu kontrol et
    if ($conn->query($sql) === TRUE) {
        echo "Başarıyla abone oldunuz!";
    } else {
        echo "Abonelik işlemi başarısız oldu: " . $conn->error;
    }
}