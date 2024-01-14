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
$last_user_id = $conn->insert_id; 
// Kullanıcı ID'sine göre kullanıcı adını çekmek için SQL sorgusu
$user_id = $last_user_id; // Burada istediğiniz kullanıcı ID'sini belirtin
$sql = "SELECT user_name FROM users WHERE id = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Sonucu al ve kullanıcı adını yazdır
    $row = $result->fetch_assoc();
    echo "Kullanıcı Adı: " . $row["user_name"];
} else {
    echo "Belirtilen ID'ye sahip kullanıcı bulunamadı.";
}

// Bağlantıyı kapat
$conn->close();
?>
