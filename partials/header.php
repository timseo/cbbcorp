<!-- main header -->
<header class="main-header style-one">
    <?php 
        $basename = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    ?>
    <!-- header-lower -->
    <div class="header-lower custom-nav-style">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-topbar">
                        <figure class="logo">
                            <a href="index.html"><img src="assets/images/logo.svg" alt="" /></a>
                        </figure>
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <div class="navigation-wrap">
                                <ul class="navigation clearfix">
                                    <li <?php echo $basename === "index" ? 'class="current"' : ''?>><a href="/">HOME</a></li>
                                    <li <?php echo $basename === "news" ? 'class="current"' : ''?>><a href="news.php">NEWS</a></li>
                                    <li <?php echo $basename === "why-us" ? 'class="current"' : ''?>><a href="why-us.php">WHY US</a></li>
                                </ul>
                                <figure class="logo">
                                    <a href="/"><img src="assets/images/logo.svg" alt="" /></a>
                                </figure>
                                <ul class="navigation clearfix">
                                    <li <?php echo $basename === "products" ? 'class="current"' : ''?> ><a href="products.php">PRODUCTS</a></li>
                                    <li <?php echo $basename === "faq" ? 'class="current"' : ''?> ><a href="faq.php">FAQ</a></li>
                                    <li><a href="./contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header custom-nav-style">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo">
            <a href="index.html"><img src="assets/images/logo.svg" alt="" title="" /></a>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li>
                    <a href="index.html"><span class="fab fa-twitter"></span></a>
                </li>
                <li>
                    <a href="index.html"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                    <a href="index.html"><span class="fab fa-pinterest-p"></span></a>
                </li>
                <li>
                    <a href="index.html"><span class="fab fa-instagram"></span></a>
                </li>
                <li>
                    <a href="index.html"><span class="fab fa-youtube"></span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->