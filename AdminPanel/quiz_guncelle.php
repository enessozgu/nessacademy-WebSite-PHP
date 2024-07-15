<?php 

include 'baglanti.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $soru_id = $_POST['id'];
    $soru_metni = $_POST['soru'];
    $secenek_a = $_POST['a'];
    $secenek_b = $_POST['b'];
    $secenek_c = $_POST['c'];
    $secenek_d = $_POST['d'];
    $dogru_secenek = $_POST['dogru'];

    // Veritabanında güncelleme sorgusu
    $sorgu = $conn->prepare("UPDATE quiz_sorular SET question_text=?, option_a=?, option_b=?, option_c=?, option_d=?, correct_answer=? WHERE id=?");
    $sorgu->bind_param('ssssssi', $soru_metni, $secenek_a, $secenek_b, $secenek_c, $secenek_d, $dogru_secenek, $soru_id);

    // Sorguyu çalıştır
    if ($sorgu->execute()) {
        header("Location: quiz_tablo.php");
        exit();
    } else {
        echo "Güncelleme sırasında bir hata oluştu.";
    }
} else {
    echo "Geçersiz bir istek.";
}

?>