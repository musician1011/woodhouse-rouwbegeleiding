<?php
if ($_GET['formSend'] !== null){
    $isSend = $_GET['formSend'];
    $page = $_SERVER['PHP_SELF'];
    $sec = "5";
    header("Refresh: $sec; url=$page");
}else {
    $isSend = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Woodhouse Rouwbegeleiding - Contact</title>
    <meta content="Woodhouse Rouwbegeleiding in Gent en Knokke. Contacteer Marianne Staelens voor een gesprek, lutografie, access bars en/of wandeltherapie." name="description">
    <meta content="rouwbegeleiding, rouw, verlies, coaching, wandeltherapie, access bars, lutografie" name="keywords">
    <meta content="Marianne Staelens" name="author">

    <!-- Favicons -->
    <link href="assets/img/placeholders/favicon.png" rel="icon">
    <link href="assets/img/placeholders/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Knight - v4.9.1
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <script>
        function resizeIframe(obj) {
            obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
        }
    </script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index"><img src="assets/img/placeholders/favicon-v2.png" alt="" class="img-fluid">Woodhouse Rouwbegeleiding</a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="aanbod">Aanbod</a></li>
                    <li><a href="tarieven">Tarieven</a></li>
                    <li><a class="active" href="contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Neem gerust contact op!</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="info d-flex flex-column justify-content-center" data-aos="fade-right" style="text-align: right;">
                            <p>
                                Zou je graag een afspraak maken?<br> Zijn er zaken onduidelijk of heb je nog vragen?<br>
                                <br> Als het niet meteen telefonisch lukt, laat dan via het contactformulier, via e-mail of via Whatsapp weten wanneer je zelf te bereiken bent. Dan bel ik op het door jou gekozen moment terug.
                                <br>
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Naam" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Bericht" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message" style="display: <?= $isSend? 'block': 'none' ?>">Uw bericht is verstuurd. Hartelijk dank!</div>
                            </div>
                            <div class="text-center"><button type="submit">Verstuur bericht</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

        <!-- OV -->
        <!--Gent sint-pieters tot Heusden: https://bit.ly/3WFLL3U-->
        <!--Gent Dampoort tot Heusden: https://bit.ly/3RbvBOj-->
        <!--Melle tot Heusden: https://bit.ly/3XSa2Vk-->
        <!--Wetteren tot Heusden: https://bit.ly/3XZAhZV-->
        <!--Heist: https://bit.ly/3XGZbhg-->
        <!-- End OV -->


        <!-- ======= Contact Section ======= -->
        <section id="contact-gent" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Heusden (Destelbergen)</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="info d-flex flex-column justify-content-center" data-aos="fade-down">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4><a href="https://bit.ly/3ie8WDy" target="blank" style="color: #151515;">Adres:</a></h4>
                                <p><a href="https://bit.ly/3ie8WDy" target="blank" style="color: #484848;">Ter Vennen
                                        16<br>9070 Heusden
                                        (Destelbergen)</a></p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4><a href="mailto:marianne@woodhouse-rouwbegeleiding.be" style="color: #151515;">Email:</a></h4>
                                <p><a href="mailto:marianne@woodhouse-rouwbegeleiding.be" style="color:#484848">marianne@woodhouse-rouwbegeleiding.be</a></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4><a href="tel:+32471651557" style="color: #151515;">Bel:</a></h4>
                                <p><a href="tel:+32471651557" style="color: #484848;">0471 65 15 57</a></p>
                            </div>

                            <div class="whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                <h4><a href="https://wa.me/+32471651557" style="color: #151515;" target="blank">Whatsapp:</a></h4>
                                <p><a href="https://wa.me/+32471651557" style="color: #484848;" target="blank">Stuur een bericht</a></p>
                            </div>


                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0">

                        <!-- Start Google Map -->
                        <div class="row">
                            <!-- Start Map -->
                            <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=ter%20vennen%2016,%20destelbergen+(Woodhouse%20rouwbegeleiding)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                <!-- End Google Map -->

                            </div>
                        </div>


                    </div>
        </section>
        <!-- End Contact Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact-knokke" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Knokke-heist</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="info d-flex flex-column justify-content-center" data-aos="fade-down">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4><a href="https://bit.ly/3Gi81M7" target="blank" style="color: #151515;">Adres:</a></h4>
                                <p><a href="https://bit.ly/3Gi81M7" target="blank" style="color: #484848;">Westkapellestraat 60<br>8301
                                        Knokke-Heist</a></p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4><a href="mailto:marianne@woodhouse-rouwbegeleiding.be" style="color: #151515;">Email:</a></h4>
                                <p><a href="mailto:marianne@woodhouse-rouwbegeleiding.be" style="color:#484848">marianne@woodhouse-rouwbegeleiding.be</a></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4><a href="tel:+32471651557" style="color: #151515;">Bel:</a></h4>
                                <p><a href="tel:+32471651557" style="color: #484848;">0471 65 15 57</a></p>
                            </div>

                            <div class="whatsapp">
                                <i class="bi bi-whatsapp"></i>
                                <h4><a href="https://wa.me/+32471651557" style="color: #151515;" target="blank">Whatsapp:</a></h4>
                                <p><a href="https://wa.me/+32471651557" style="color: #484848;" target="blank">Stuur een bericht</a></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <!-- Start Google Map -->
                        <div class="row">
                            <!-- Start Map -->
                            <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=westkapellestraat%2060,%20knokke-heist+(Woodhouse%20Rouwbegeleiding)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                            <!-- End Google Map -->

                        </div>

                    </div>

                </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row" style="padding-top: 10%;">
                    <!-- end single footer -->
                    <div class="col-md-12">
                        <div class="footer-content ">
                            <div class="footer-head" style="text-align: center;">
                                <h4 style="color:#9EAB89;">Marianne Staelens</h4>
                                <h4 style="color: #9EAB89;">Woodhouse Rouwbegeleiding</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>