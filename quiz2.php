<?php

session_start();

// Oturumda bulunan kullanıcının adı ve e-posta adresini al
$userName = $_SESSION['kullanici_adi'];
$userLast = $_SESSION['kullanici_soyadi'];
$userEmail = $_SESSION['kullanici_mail'];


// Veritabanı bağlantısı oluştur
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Soruları veritabanından çekme
$sql = "SELECT * FROM quiz_sorular2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $questions = $result->fetch_all(MYSQLI_ASSOC);
    $totalQuestions = count($questions);
    $correctAnswers = 0;

    // Kullanıcının cevaplarını işleme alma
    $score = 0;

    foreach ($_POST as $key => $value) {
        $question_id = substr($key, 1);
        $user_answer = $value;

        // Doğru cevabı veritabanından kontrol etme
        $sql = "SELECT correct_answer FROM quiz_sorular2 WHERE id = $question_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $correct_answer = $row['correct_answer'];

            // Kullanıcının cevabını kontrol etme
            if ($user_answer == $correct_answer) {
                $score++;
            }
        }
    }

    // İlerleme oranını hesapla
    $progress = ($score / $totalQuestions) * 100;

    // Quiz sonuçlarını kontrol etme ve gönderme
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $checkResult = $conn->query("SELECT * FROM quiz_sonuclar2 WHERE user_mail = '$userEmail'");

        if ($checkResult->num_rows > 0) {
            // Kullanıcı daha önce quiz'i çözmüş, güncelleme yap
            $updateResult = $conn->query("UPDATE quiz_sonuclar2 SET dogru = $score , ilerleme=$progress WHERE user_mail = '$userEmail'");


            if (!$updateResult) {
                echo "Quiz sonucu güncellenirken bir hata oluştu: " . $conn->error;
            }
        } else {
            // Kullanıcı ilk kez quiz'i çözüyor, yeni kayıt ekle
            $insertResult = $conn->query("INSERT INTO quiz_sonuclar2 (user_name, last_name, user_mail, dogru,ilerleme) VALUES ('$userName', '$userLast', '$userEmail', $score,$progress)");

            if (!$insertResult) {
                echo "Quiz sonucu kaydedilirken bir hata oluştu: " . $conn->error;
            }
        }
    }

    // Geri kalan HTML ve sayfa içeriği buraya gelebilir
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #C0C0C0;
        }

        .quiz-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .question {
            font-size: 18px;
            font-weight: bold;
        }

        .options label {
            display: block;
            margin-bottom: 10px;
        }

        .submit-btn {
            margin-top: 20px;
        }

        .progress-container {
            margin-top: 30px;
        }

        .progress-bar {
            height: 20px;
            background-color: #007bff;
            border-radius: 10px;
        }

        .progress-bar-fill {
            height: 100%;
            width:
                <?= $progress ?>
                %;
            background-color: #5bc0de;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nesso</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="anaprime.php">Ana Sayfa</a>
                    <a class="nav-link active" href="kelimetest2.php">Kelime Testi</a>
                    <a class="nav-link active" href="prime_sozluk.php">Sözlük</a>
                    <a href="loginpage.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:7rem;">Çıkış Yap</button></a>
                    <a href="prime_hesap.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:1rem;">Hesabım</button></a>

                </div>
            </div>

        </div>
    </nav>


    <div class="quiz-container">
        <h2 class="text-center mb-4">Quiz</h2>
        <form action="quiz2.php" method="post" onsubmit="return showSubmitAlert()">
            <?php foreach ($questions as $question): ?>
                <div class=" mb-4">
                    <p class="question">
                        <?= $question['question_text'] ?>
                    </p>
                    <div class="options">
                        <label><input type="radio" name="q<?= $question['id'] ?>" value="A">
                            <?= $question['option_a'] ?>
                        </label>
                        <label><input type="radio" name="q<?= $question['id'] ?>" value="B">
                            <?= $question['option_b'] ?>
                        </label>
                        <label><input type="radio" name="q<?= $question['id'] ?>" value="C">
                            <?= $question['option_c'] ?>
                        </label>
                        <label><input type="radio" name="q<?= $question['id'] ?>" value="D">
                            <?= $question['option_d'] ?>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
        </form>

        <script>
            function showSubmitAlert() {
                alert("Quiz Yapıldı!");
                return true; // Eğer false döndürürseniz, form submit işlemi gerçekleşmez
            }
        </script>
        <br>
        <p style="margin-left:140px;">
            <?php echo "Toplam puanınız: $totalQuestions sorudan $score doğru"; ?>
        </p>

        <!-- İlerleme çubuğunu gösterme -->
        <div style="margin-top: 10px;" class="progress-container">
            <div class="progress-bar">
                <div class="progress-bar-fill"></div>
            </div>
            ,
            <p class="text-center mt-2">İlerleme:
                <?= $progress ?>%
            </p>

        </div>
    </div>

</body>

</html>