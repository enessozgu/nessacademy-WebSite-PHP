<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Promo kodunu veritabanından çek
$sql = "SELECT pr FROM promo";  // 'pr' alanı üzerinden bir filtreleme yapmanız gerekiyor.
$result = $conn->query($sql);

if (!$result) {
    die("Sorgu hatası: " . $conn->error);
}

$promoData = $result->fetch_assoc();  // Satırdan veriyi çek

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
       #promo {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 16px;
            transition: border-color 0.3s ease;
        }

        #promo:focus {
            border-color: #3498db;
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
                    <a class="nav-link active" aria-current="page" href="udemy.php">Ana Sayfa</a>
                    <a class="nav-link active" href="loginpage.php">Kelime Testi</a>
                    <a class="nav-link active" aria-current="true" href="loginpage.php">Sözlük</a>
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

    <body class="bg-light">

        <div class="container">



            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="" action="prime_uye.php" method="post"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" name="user_name" class="form-control" id="firstName" placeholder=""
                                value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" name="last_name" class="form-control" id="lastName" placeholder=""
                                value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="user_mail" class="form-control" id="email" placeholder="">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_password">Password <span class="required">*</span></label>
                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="password" id="reg_password" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>


                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_password">Number <span class="required">*</span></label>
                        <input type="number" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="number" id="reg_number" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="adres" class="form-control" id="address" placeholder="" required="">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>



                    <br>

                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_password">Profil Fotoğrafı <span class="required">*</span></label>
                        <input type="file" name="profile_picture" id="profile_picture" accept="image/*"
                            class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="profile_picture" id="reg_number" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>

                    <br><br>




                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>


                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" name="name_card" class="form-control" id="cc-name" placeholder=""
                                required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" name="card_number" class="form-control" id="cc-number" placeholder=""
                                required="">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">CVV</label>
                            <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Product name</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Second product</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$3</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Third item</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0">Promo code</h6>
                                        <small><?php echo $promoData['pr']; ?></small>
                                    </div>
                                    <span class="text-success">-$5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (USD)</span>
                                    <strong>$5</strong>
                                </li>
                            </ul>


                            <label for="promo">Promo Kodu:</label>
                            <input type="text" id="promo" name="promo" style="" required>
                            <br>
                        </div>
                    </div>
                    <br>
                    <hr class="mb-4">
                    <p class="woocomerce-FormRow form-row">
                        <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
                            value="569404f04c"><input type="hidden" name="_wp_http_referer" value="/signup/"> <input
                            type="submit" class="btn btn-outline-dark" name="register" value="Sign Up">
                    <div class="invalid-feedback">This field is required</div>
                    </p>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
        </div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                    'use strict';

                    window.addEventListener('load', function () {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');

                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function (form) {
                            form.addEventListener('submit', function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
        </script>






    </body>











</body>

</html>