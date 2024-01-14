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
                    <a class="nav-link active" aria-current="page" href="udemy--.php">Ana Sayfa</a>

                    <a class="nav-link active" href="loginpage.php">Kelime Testi</a>
                    <a class="nav-link active" href="loginpage.php">Sözlük</a>
                    <a href="loginpage.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:7rem;">Giriş Yap</button></a>
                    <a href="dersler.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:1rem;">Kaydol</button></a>

                </div>
            </div>

        </div>
    </nav>

    <br><br><br>

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


    <br><br><br><br><br><br>





    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
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