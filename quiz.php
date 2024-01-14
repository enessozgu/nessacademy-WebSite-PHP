<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <a class="nav-link active" aria-current="page" href="udemy--.php">Ana Sayfa</a>
                    <a class="nav-link active" href="should.php">Dersler</a>
                    <a class="nav-link active" href="kelimetest.php">Kelime Testi</a>
                    <a class="nav-link active" href="sozlukss.php">Sözlük</a>
                    <a href="loginpage.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:7rem;">Çıkış Yap</button></a>
                    <a href="hesabim.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:1rem;">Hesabım</button></a>

                </div>
            </div>

        </div>
    </nav>
</body>

</html>










<?php
// Veritabanı bağlantısı oluştur
include 'baglanti.php';

// Soruları veritabanından çekme
$sql = "SELECT * FROM quiz_questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $questions = $result->fetch_all(MYSQLI_ASSOC);

    // Quiz formunu oluşturma
    echo "<form action='quiz_process.php' method='post'>";
    foreach ($questions as $question) {
        echo "<div>";
        echo "<p>{$question['question_text']}</p>";
        echo "<label><input type='radio' name='q{$question['id']}' value='A'> {$question['option_a']}</label><br>";
        echo "<label><input type='radio' name='q{$question['id']}' value='B'> {$question['option_b']}</label><br>";
        echo "<label><input type='radio' name='q{$question['id']}' value='C'> {$question['option_c']}</label><br>";
        echo "<label><input type='radio' name='q{$question['id']}' value='D'> {$question['option_d']}</label><br>";
        echo "</div>";
    }
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
} else {
    echo "Quiz soruları bulunamadı.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>