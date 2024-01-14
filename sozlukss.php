<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sözlük</title>
    <link rel="stylesheet" href="u ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

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
                    <a class="nav-link active" href="chatquiz.php">Kelime Testi</a>
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





    <div class="container margin-right:50px;">
        <h2>Sözlük</h2>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="kelime">Kelime:</label>
            <input type="text" name="kelime" required>
            <button type="submit">Ara</button>
        </form>

        <?php if (isset($anlam)): ?>
            <p>
                <?php echo ucfirst($_POST['kelime']) . " kelimesinin anlamı: " . ucfirst($anlam); ?>
            </p>
        <?php endif; ?>
    </div>

</body>

<style>
     

        .container {
            background-color: #fff;
            border-radius: 10px;
            margin-top: 150px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            text-align: center;
        }
    </style>

</html>