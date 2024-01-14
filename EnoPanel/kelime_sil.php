<?php
include 'baglanti.php';

// ID parametresini kontrol et
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $uye_id = $_GET['id'];

    // Üye silme sorgusu
    $silme_sorgusu = $conn->prepare("DELETE FROM kelimeler WHERE kelime_id = ?");
    $silme_sorgusu->bind_param('i', $uye_id);

    // Silme işlemi başarılı ise kullanıcıyı listeleme sayfasına yönlendir
    if ($silme_sorgusu->execute()) {
        header("Location: kelime_tablo.php"); // uyeler.php sayfasına yönlendirilebilir
        exit();
    } else {
        echo "Üye silinirken bir hata oluştu.";
    }
} else {
    echo "Geçersiz veya eksik üye ID.";
}

include "alt.php";
