<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>

<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">

        <?php include './partials/ageGateVerification.php' ?>
        <?php include './partials/header.php' ?>

        <!-- content -->
        <!-- banner-section -->
        <section class="banner-section style-two style-three centred why-us-banner">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-15.png)"></div>
                <div class="pattern-2"></div>
            </div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="
                background-image: url(assets/images/cbb-why-us-main-banner-top.jpg);
              "></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>
                                YOUR PARTNER TODAY…<br />
                                …TOMORROW…AND BEYOND
                            </h2>
                            <p>
                                Your success is our success! Plain and simple but a reality we
                                hold dear to. While we focus on product innovation and
                                leadership in our industry, we realize that your growth and
                                success is our number one priority. To that end we are here to
                                listen and adapt to your changing needs and goals. This focus
                                on our customers has made us who we are as a company and makes
                                certain we will be here for decades to come.
                            </p>
                        </div>
                        <div class="image">
                            <img src="assets/images/cbb-why-us-slide-1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- manufacturing-section -->
        <section class="sec-pad-2 quality-section">
            <div class="auto-container">
                <div class="content_block">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>QUALITY ASSURANCE</h2>
                        </div>
                        <div class="text">
                            <p>
                                Government compliance standards go only so far. We uphold
                                higher standards of ethical business practices and transparent
                                sourcing. Through these elevated standards our quality
                                assurance procedures are more robust and inclusive from the
                                grow fields to the final products on shelf.
                            </p>
                        </div>
                    </div>
                    <img src="assets/images/cbb-why-us-logo-icon-corner.svg" alt="" />
                </div>
                <div class="product_image">
                    <img src="assets/images/cbb-why-us-packaging.png" alt="" />
                </div>
                <div class="text_content_block">
                    <h2>Your Go-To Cannabinoid Partner</h2>
                    <p>
                        High-growth wellness consumer market segments are propelled by our
                        science focused products, rooted in foundational ingredients for
                        the cannabinoid market.
                    </p>
                </div>
            </div>
        </section>
        <!-- manufacturing-section end -->

        <?php
            $backgroundColor = '#7b9cb3';
            include './partials/about.php'
        ?>

        <!-- manufacturing-section -->
        <section class="sec-pad-2 manufacturing-section">
            <div class="sec-title centred">
                <h2>MANUFACTURING</h2>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>
                                        Manufacturing <br />
                                        Excellence
                                    </h2>
                                </div>
                                <div class="text">
                                    <p>
                                        We are the industry leader of hemp-derived ingredients due
                                        to our professionalism, focus on our customers, and rigor
                                        of our entire manufacturing process.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>Supply Chain</h2>
                                </div>
                                <div class="text">
                                    <p>
                                        Since we control all aspects of our supply chain, we are
                                        nimble and able to evolve quickly based on regulatory
                                        needs or those of our customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>cGMP Manufacturing</h2>
                                </div>
                                <div class="text">
                                    <p>
                                        Our elevated quality assurance standards produce the most
                                        consistent and pure products from the grow fields to the
                                        final products on shelf.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>Good Packaging Practices</h2>
                                </div>
                                <div class="text">
                                    <p>
                                        Packaging of all products adhere to our strict processes
                                        and procedures assuring accurate labeling, diligent
                                        handing, and food-safe containers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/cbb-why-us-bg-texture.svg" alt="" class="shape" />
        </section>
        <!-- manufacturing-section end -->

        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="content_block_4">
                            <div class="content-box">
                                <h3>KEEP IN TOUCH</h3>
                                <p>
                                    Stay up to date on all the latest<br />
                                    updates and news from CBB
                                </p>
                                <form action="contact.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Contact Email" required="" />
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone Number" required="" />
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="theme-btn-one">
                                                SIGN UP
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <!-- content end -->

        <?php include './partials/footer.php' ?>
    </div>

    <?php include './partials/scripts.php' ?>

</body>

</html>