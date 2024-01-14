<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nesso</title>
    <link rel="stylesheet" href="u ">
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
                    <a class="nav-link active" aria-current="page" href="anaprime.php">Ana Sayfa</a>
                    <a class="nav-link active" href="kelimetest2.php">Kelime Testi</a>
                    <a class="nav-link active" href="prime_sozluk.php">Sözlük</a>
                    <?php
                    session_start();

                    if (isset($_SESSION['kullanici_mail']) && $_SESSION['kullanici_mail'] == 'meslinakzlts7@gmail.com') {
                        echo '<a class="nav-link active" href="EnoPanel/prime_uyeler.php">Admin Panel</a>';
                    } else {
                       
                    }
                    ?>

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

    <br><br>
    <div id="carouselExample" class="carousel slide w-75" style="margin:auto;">
        <div class="carousel-inner" style="margin:auto; height: 500px;">
            <div class="carousel-item active">
                <img src="ya.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="aza.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="ma.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>


    </div>
    </div>



    <br><br><br><br>




    <!-- START THE FEATURETTES -->

    <br><br>

    <div class="as ">

        <?php include 'yorumyap.php'; ?>


        <div class="a landing-item-container landing-item-gray ;" style="min-height: 0; overflow: hidden">
            <div class="w-50 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1"
                style="margin-left:350px;">

                <form method="post" action="udemy--.php" class=" black-font-color feedback-item"
                    style="font-size: 12px">
                    <label id="feedback-name-label" for="name-input">İsim</label>
                    <input name="user_name" id="name-input" class="form-control feedback-input" type="text"
                        placeholder="" maxlength="50"> <br>
                    <label id="feedback-email-label" for="email-input">E-posta</label>
                    <input name="user_mail" id="email-input" class="form-control feedback-input" type="text"
                        placeholder="example@gmail.com" maxlength="200">
                    <br> <label id="feedback-message-label" for="message-input">Mesaj</label> <textarea name="yorum"
                        id="message-input" class="form-control feedback-input" data-val="true" data-val-length="*"
                        data-val-length-max="1000" maxlength="1000" rows="2"></textarea> <br>
                    <button id="feedback-send-btn" class="btn btn-outline-dark">Gönder</button>
                </form>
                <span id="feedback-completed-span" class="black-font-color" style="display: none">Mesajınızı aldık.
                    Geri
                    bildiriminiz için teşekkür ederiz.</span>
            </div>
        </div>

    </div>
    <br><br><br>

    <h4 style="margin-left:550px;">YORUMLAR</h4>

    <hr>

    <div class="columrl"></div>

    <div class="kutum">
        <div class="kutum">
            <?php


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test_db";

            // Bağlantı oluşturma
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Bağlantıyı kontrol etme
            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM yorumlar ORDER BY tarih_saat DESC";
            $result = $conn->query($sql);

            $sql2 = "SELECT * FROM users ORDER BY profile_picture ";
            $result2 = $conn->query($sql2);


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="kutu1" style="margin-left:50px;">';
                    echo '<h5 id="isim">' . htmlspecialchars($row['user_name']) . '</h5>';
                    echo '<h6 id="mail">' . htmlspecialchars($row['user_mail']) . '</h6>';
                    echo '<p id="yorum">' . htmlspecialchars($row['yorum']) . '</p>';
                    echo '<p class="sag">' . htmlspecialchars($row['tarih_saat']) . '</p>';
                    echo '<div class="clear"></div>';
                    echo '</div>';
                    echo '<hr>';
                }

            } else {
                echo "Henüz yorum yok.";
            }





            $conn->close();
            ?>
        </div>


    </div>
    <br><br>


    <br><br>

    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                        </li>
                    </ul>
                </div>



                <div class="col-md-5 offset-md-1 mb-3">






                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="email" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="email" name="email" class="form-control"
                                placeholder="Email address">
                            <button class="btn btn-outline-dark" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2023 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>



</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// POST yöntemiyle bir formdan veri geldi mi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Formdan gelen e-posta adresini al
    $email = $_POST['email'];

    // Veritabanına e-posta adresini eklemek için SQL sorgusu
    $sql = "INSERT INTO abone (abone_mail) VALUES ('$email')";

    // Sorguyu çalıştır ve sonucu kontrol et
    if ($conn->query($sql) === TRUE) {
        echo "Başarıyla abone oldunuz!";
    } else {
        echo "Abonelik işlemi başarısız oldu: " . $conn->error;
    }
}

?>