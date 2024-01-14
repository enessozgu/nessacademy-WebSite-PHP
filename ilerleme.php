<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz Sonuçları</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .quiz-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .progress-bar {
            width: 100%;
            background-color: #e0e0e0;
            height: 20px;
            border-radius: 10px;
            margin-top: 10px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background-color: #4caf50;
        }
    </style>
</head>

<body>

    <div class="quiz-container">
        <h1>Quiz Sonuçları</h1>

        <?php
        // Bu kısımda quiz sonuçlarını alabilirsiniz
        $dogru_sayisi = 8; // Örnek olarak 8 doğru cevap varsayalım
        $toplam_soru = 10; // Toplam soru sayısı
        
        // İlerleme oranını hesapla
        $ilerleme_orani = ($dogru_sayisi / $toplam_soru) * 100;

        // İlerleme çubuğunu göster
        echo '<div class="progress-bar">';
        echo '<div class="progress" style="width:' . $ilerleme_orani . '%;"></div>';
        echo '</div>';

        // Sonuçları göster
        echo '<p>Toplam Soru Sayısı: ' . $toplam_soru . '</p>';
        echo '<p>Doğru Cevap Sayısı: ' . $dogru_sayisi . '</p>';
        echo '<p>İlerleme: ' . $ilerleme_orani . '%</p>';
        ?>

    </div>

</body>

</html>