<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>

<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">

        <?php include './partials/ageGateVerification.php' ?>
        <?php include './partials/header.php' ?>

        <!-- content -->

        <!-- google-map-section -->
        <section class="google-map-section" style="background-color: #E0E0E0;">
            <div class="map-inner">
                <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188432.71530880212!2d-119.51144572364964!3d45.851047337802456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54a2b9026e29d2d7%3A0x82ea06f10bd63cbb!2sHermiston%2C%20OR%2C%20USA!5e0!3m2!1sen!2sco!4v1666649584491!5m2!1sen!2sco" width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="info-section">
                <div class="auto-container">
                    <div class="info-inner clearfix">
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-23"></i></div>
                            <h4>Office Location</h4>
                            <p>2250 S Highway 395, Hermiston OR 97838</p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-59"></i></div>
                            <h4>Phone Number</h4>
                            <p><a href="tel:5413039257">(541) 303-9257</a></p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-60"></i></div>
                            <h4>Email Address</h4>
                            <p><a href="mailto:sales@cbbio.us">sales@cbbio.us</a><br /><a href="mailto:support@cbbio.us">support@cbbio.us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad" style="background-color: #E0E0E0;">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Columbia Basin Bioscience</h6>
                    <h2>Contact Us</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Full Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn-one" type="submit" name="submit-form">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->

        <!-- content end -->

        <?php include './partials/footer.php' ?>
    </div>

    <?php include './partials/scripts.php' ?>

</body>

</html>