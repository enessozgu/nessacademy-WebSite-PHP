<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nesso</title>
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




    <div class="row w-50 " style="margin:auto;">
        <div class="container container--xs"><a href="udemy.php"></a><img class="img-fluid mx-auto d-block mb-3"
                src="5.png" alt="" width="400" height="300">
            <div class="registration-form woocommerce ">

                <form action="kayitdeneme.php" name="yarak" method="post" enctype="multipart/form-data" class="register">

                    <p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
                        <label for="reg_sr_firstname">First Name <span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="user_name" id="reg_sr_firstname" value="" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>

                    <p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
                        <label for="reg_sr_lastname">Last Name <span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="user_lastname" id="reg_sr_lastname" value="" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>


                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_email">Email address <span class="required">*</span></label>
                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="user_mail" id="reg_email" value="" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>


                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_password">Password <span class="required">*</span></label>
                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="password" id="reg_password" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>

                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_password">Number <span class="required">*</span></label>
                        <input type="number" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="user_number" id="reg_number" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>

                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="reg_password">Profil Fotoğrafı <span class="required">*</span></label>
                        <input type="file"name="profile_picture" id="profile_picture" accept="image/*" class="woocommerce-Input woocommerce-Input--text input-text form-control"
                            name="user_number" id="reg_number" required="">
                    <div class="invalid-feedback">This field is required</div>
                    </p>




                    <!-- Spam Trap -->
                    <div style="left: -999em; position: absolute;"><label for="trap">Anti-spam</label><input type="text"
                            name="email_2" id="trap" tabindex="-1" autocomplete="off"></div>




                    <p class="form-row form-row-wide mailchimp-newsletter"><input
                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                            id="mailchimp_woocommerce_newsletter" type="checkbox"
                            name="mailchimp_woocommerce_newsletter" value="1" checked="checked"> <label
                            for="mailchimp_woocommerce_newsletter"
                            class="woocommerce-form__label woocommerce-form__label-for-checkbox inline"><span>Subscribe
                                for Sales &amp; New Themes</span></label>
                    <div class="invalid-feedback">This field is required</div>
                    </p>
                    <div class="clear"></div>
                    <div class="woocommerce-privacy-policy-text"></div>
                    <p class="woocomerce-FormRow form-row">
                        <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
                            value="569404f04c"><input type="hidden" name="_wp_http_referer" value="/signup/"> <input
                            type="submit" class="btn btn-outline-dark" name="register" value="Sign Up">
                    <div class="invalid-feedback">This field is required</div>
                    </p>

                    <p class="woocommerce-simple-registration-login-link">
                        <a href="loginpage.php">Log
                            in</a>
                    <div class="invalid-feedback">This field is required</div>
                    </p>


                </form>

            </div>

            <p class="text-gray-soft text-center small mb-2">By clicking "Sign up" you agree to our <a
                    href="sozlesme.php">Terms of Service</a>.</p>
            <p class="text-gray-soft text-center small mb-2">Already have an account? <a
                    href="https://themes.getbootstrap.com/signin/">Sign in</a></p>

        </div>

    </div>
</body>




</html>