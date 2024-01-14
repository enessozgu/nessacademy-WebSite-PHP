<?php
// Veritabanı bağlantısı oluştur
include 'baglanti.php';

// Soruları veritabanından çekme
$sql = "SELECT * FROM quiz_sorular";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $questions = $result->fetch_all(MYSQLI_ASSOC);
    $totalQuestions = count($questions);
    $correctAnswers = 0;

    // Kullanıcının seçtiği yanıtları kontrol etme
    foreach ($questions as $question) {
        $questionId = $question['id'];
        $userAnswerKey = "$questionId";
        $userAnswer = isset($_POST[$userAnswerKey]) ? $_POST[$userAnswerKey] : '';

        // Doğru yanıtı veritabanından al
        $correctAnswer = $question['correct_answer'];

        // Kullanıcının yanıtını kontrol et
        if ($userAnswer === $correctAnswer) {
            $correctAnswers++;
        }
    }

    // İlerleme oranını hesapla
    $progress = ($correctAnswers / $totalQuestions) * 100;

    // Kullanıcının bilgilerini al (örneğin, oturumdan)
    $userId = 1; // Bu kullanıcı oturumu açmış bir kullanıcı için örnek bir değerdir.

    // Quiz sonucunu veritabanına kaydetme
    $insertResultSQL = "INSERT INTO quiz_sonuclar (user_id, score) VALUES ('$userId', '$correctAnswers')";
    if ($conn->query($insertResultSQL) === TRUE) {
        echo "Quiz sonucu başarıyla kaydedildi. Toplam puan: $correctAnswers";
    } else {
        echo "Error: " . $insertResultSQL . "<br>" . $conn->error;
    }
} else {
    echo "Quiz soruları bulunamadı.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
