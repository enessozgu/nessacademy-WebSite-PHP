<?php


include 'baglanti.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kelime = strtolower($_POST['kelime']);


    $sql = "SELECT anlam FROM kelimeler  WHERE kelime = '$kelime'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $anlam = $row["anlam"];
    } else {
        $anlam = "Bu kelimenin anlamı bulunamadı.";
    }
}

?>