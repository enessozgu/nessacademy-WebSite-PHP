<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'test_db';

// MySQLi bağlantısı
$db = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Bağlantıyı kontrol et
if ($db->connect_error) {
    die("Bağlantı hatası: " . $db->connect_error);
}

// ID parametresini kontrol et
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $uye_id = $_GET['id'];

    // Üye silme sorgusu
    $silme_sorgusu = $db->prepare("DELETE FROM users WHERE id = ?");
    $silme_sorgusu->bind_param('i', $uye_id);

    // Silme işlemi başarılı ise kullanıcıyı listeleme sayfasına yönlendir
    if ($silme_sorgusu->execute()) {
        header("Location: uyeler.php"); // uyeler.php sayfasına yönlendirilebilir
        exit();
    } else {
        echo "Üye silinirken bir hata oluştu.";
    }
} else {
    echo "Geçersiz veya eksik üye ID.";
}

include "alt.php";
?>
