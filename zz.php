

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upgrade to Premium</title>
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



    <h2 style="margin-left:500px; margin-top:50px;">Upgrade to Premium</h2>
    <br><br>
    <form action="zz2.php" method="post">
        <div class="w-50" style="margin:auto;">

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






            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" name="adres" class="form-control" id="address" placeholder="" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
                        required="">
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                    <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" name="name_card" class="form-control" id="cc-name" placeholder="" required="">
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
            <hr class="mb-4">
            <p class="woocomerce-FormRow form-row">
                <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
                    value="569404f04c"><input type="hidden" name="_wp_http_referer" value="/signup/"> <input
                    type="submit" class="btn btn-outline-dark" name="register" value="Sign Up">
            <div class="invalid-feedback">This field is required</div>
            </p>
    </form>
    </div>

    <!-- Ödeme bilgileri, fiyatlar, vb. buraya eklenebilir -->


</body>

</html>