<?php
// Oturumu başlat
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Veritabanı bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcı oturumda ise
if (isset($_SESSION['kullanici_adi'])) {
    // Kullanıcı adını al
    $kullanici_adi = $_SESSION['kullanici_adi'];
    $kullanici_soyadi = $_SESSION['kullanici_soyadi'];
    $kullanici_mail = $_SESSION['kullanici_mail'];
    $tel = $_SESSION['kullanici_numara'];


    // Kullanıcı adını kullanarak işlemleri gerçekleştir
    // ...

    // Veritabanında kullanıcıya ait fotoğraf yolu çekme
    $sql = "SELECT profile_picture FROM users WHERE user_name = '$kullanici_adi'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Kullanıcıya ait fotoğraf yolunu al
        $row = $result->fetch_assoc();
        $profil_fotografi_yolu = $row['profile_picture'];

        // Profil fotoğrafı yolu kullanılabilir, örneğin ekrana yazdırabilirsiniz

    } else {
        echo "Kullanıcı bulunamadı veya profil fotoğrafı yok.";
    }

    // Veritabanı bağlantısını kapat
    $conn->close();
} else {
    // Kullanıcı oturumda değilse, başka bir işlem yapabilirsiniz
    echo "Oturum açmış bir kullanıcı bulunmamaktadır.";
}










?>




<?php



// Oturumda bulunan kullanıcının e-posta adresini al
$userEmail = $_SESSION['kullanici_mail'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}









$sql = "SELECT * FROM quiz_sonuclar WHERE user_mail = '$userEmail'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Eşleşen kullanıcı varsa veriyi çek
    $userData = $result->fetch_assoc();

    // Çekilen veriyi kullan
    $dogru = $userData['dogru'];
    $ilerleme = $userData['ilerleme'];


    // Diğer işlemleri burada devam ettirebilirsin


} else {
    $dogru = 0;
    $ilerleme = 0;

}

// Veritabanı bağlantısını kapat
$conn->close();





// Veritabanı bağlantısı oluştur
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}






$sql = "SELECT * FROM quiz_sonuclar2 WHERE user_mail = '$userEmail'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Eşleşen kullanıcı varsa veriyi çek
    $userData = $result->fetch_assoc();

    // Çekilen veriyi kullan
    $dogru2 = $userData['dogru'];
    $ilerleme2 = $userData['ilerleme'];


    // Diğer işlemleri burada devam ettirebilirsin


} else {
    $dogru2 = 0;
    $ilerleme2 = 0;
}

// Veritabanı bağlantısını kapat
$conn->close();









$style = "
<style>
    /* Stil verileri */
    .custom-box {
        padding: 20px;
        height: 60px;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-top: 0px;
        width: 890px;
        float: right;
    }

    .progress-bar {
        height: 20px;
        background-color: #2348cd;
        border-radius: 10px;
   
    }

    .progress-container{
        height: 20px;
        background-color: #2348cd;
        border-radius: 10px;
    }


    .progress-bar-fill {
        height: 100%;
        width: {$ilerleme}%;
        background-color: #5bc0de;  
        border-radius: 8px;
    }

    .progress-bar2 {
        height: 20px;
        background-color: #2348cd;
        border-radius: 10px;
   
    }

    .progress-container2{
        height: 20px;
        background-color: #2348cd;
        border-radius: 10px;
    }


    .progress-bar-fill2 {
        height: 100%;
        width: {$ilerleme2}%;
        background-color: #5bc0de;  
        border-radius: 8px;
    }
</style>
";

// Stil verilerini ekrana yazdır
echo $style;
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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





    <section class="w-100 p-4" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">




        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <section class="w-100 p-4" style=" border-radius: .5rem .5rem 0 0;">
                            <div style="margin-left: 80px;" class="rounded-image">
                                <!-- Profil Fotoğrafı -->
                                <img src="<?php echo $profil_fotografi_yolu; ?>" alt="Profil Fotoğrafı">
                            </div>

                            <h5 class="my-3">
                                <?php echo " $kullanici_adi"; ?>
                            </h5>

                            <a href="ppduzen.php">
                                <button class="btn btn-outline-dark" style="height:40px;">
                                    <p>Profil Fotoğrafı</p>
                                </button>
                            </a>
                    </div>
                </div>

            </div>

            <style>
                .rounded-image {
                    width: 200px;
                    height: 200px;
                    border-radius: 50%;
                    overflow: hidden;
                }

                .rounded-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            </style>


            <div class="col-lg-8" style="margin-top: 0px;">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Full Name
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?php echo " $kullanici_adi $kullanici_soyadi"; ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mail </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?php echo " $kullanici_mail"; ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?php echo " $tel"; ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Hesap Türü</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    Standart
                                </p>
                            </div>
                        </div>






                    </div>


                </div>







                <div class="col-lg-8 w-75" style="">
                    <div class="card mb-4" style="height:160px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 w-100" style="margin-top: 0px;">
                                    <p class="mb-0" style="margin-left:260px; font-size: 20px;">
                                        A1
                                    </p>

                                    <div style="margin-top: 10px; margin-left:0px;" class="progress-container">
                                        <div class="progress-bar">
                                            <div class="progress-bar-fill"></div>
                                        </div><br>

                                        <p style=" margin-right: 200px;" class="text-center mt-2">
                                            <?php echo " 4 sorudan $dogru doğru."; ?> İlerleme :
                                            <?php echo '%' . $ilerleme ?>

                                        </p>

                                    </div>
                                    <br>
                                    <a href="chatquiz.php">
                                        <button class="btn btn-outline-dark" style="height:35px; margin-left: 400px;">
                                            <p>Quiz'e Başla</p>
                                        </button> </a>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>










                <div class="col-lg-8 w-75" style=" margin-top:0px; height:200px;">
                    <div class="card mb-4" style="margin-top:0px; height:160px;">
                        <div class="card-body" style="margin-top:0px;">
                            <div class="row">
                                <div class="col-sm-3 w-100" style="margin-top: 0px;">
                                    <p class="mb-0" style="margin-left:260px; font-size: 20px;">
                                        A2
                                    </p>

                                    <div style="margin-top: 10px; margin-left:0px;" class="progress-container">
                                        <div class="progress-bar2">
                                            <div class="progress-bar-fill2"></div>
                                        </div><br>

                                        <p style=" margin-right: 200px;" class="text-center mt-2">
                                            <?php echo " 4 sorudan $dogru2 doğru."; ?> İlerleme :
                                            <?php echo '%' . $ilerleme2 ?>

                                        </p>

                                    </div>
                                    <br>
                                    <a href="chatquiz2.php">
                                        <button class="btn btn-outline-dark" style="height:35px; margin-left: 400px;">
                                            <p>Quiz'e Başla</p>
                                        </button> </a>
                                    </a>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>








    </section>






    <hr>









</body>

</html>