<!DOCTYPE html>
<html lang="en">
  
  <?php include './partials/head.php' ?>

  <!-- page wrapper -->
  <body>
    <div class="boxed_wrapper">
      
      <?php include './partials/ageGateVerification.php' ?>
      <?php //include './partials/preloader.php' ?>
      <?php include './partials/header.php' ?>

      <!-- banner-section -->
      <section class="banner-section style-two style-three centred home-banner">
        <div class="pattern-layer">
          <div
            class="pattern-1"
            style="background-image: url(assets/images/shape/shape-15.png)"
          ></div>
          <div class="pattern-2"></div>
        </div>
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
          <div class="slide-item">
            <div
              class="image-layer"
              style="
                background-image: url(assets/images/columbiabioscience-nature-hp-1.jpg);
              "
            ></div>
            <div class="auto-container">
              <div class="content-box">
                <h2>
                  WE’VE HAD YOUR BACK FOR YEARS.<br />
                  AS THE BEDROCK OF CBD/CBG PRODUCERS WE KNOW THE PAST AND ARE
                  WRITING THE FUTURE
                </h2>
                <p>
                  500g to 1000kgs  Sizing makes no difference, we will supply the
                  highest quality products with unwavering consistency
                  traceability.
                </p>
                <div class="btn-box">
                  <a href="./why-us.php" class="banner-btn-two">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner-section end -->

      <!-- service-section -->
      <section class="service-section">
        <div
          class="pattern-top wow zoomIn animated"
          data-wow-delay="500ms"
          data-wow-duration="1000ms"
        >
          <img src="assets/images/cbb-circle-dots-bg-grey-right.svg" alt="" />
        </div>
        <div class="auto-container">
          <div class="sec-title centred">
            <h2>Naturally made</h2>
            <h3>Refined to perfection</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
              <a href="./products.php">
                <img src="./assets/images/cbb-powder-fine-1.png" alt="cbd isolate fine powder" />
                <h4>isolates</h4>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
              <a href="./products.php">
                <img src="./assets/images/cbb-powder-coarse-2.png" alt="cbd full spectrun and broad spectrum" />
                <h4>Spectrums</h4>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
              <a href="./products.php">
                <img src="./assets/images/cbb-water-soluble-3.png" alt="cbd water soluble" />
              </a>
              <h4>solubles</h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
              <a href="./products.php">
                <img src="./assets/images/cbb-oil-soluble-4.png" alt="cbd oil based" />
                <h4>t-free</h4>
              </a>
            </div>
            <div class="col-sm-12 service-block centred">
              <a href="./products.php" class="theme-btn-one">ALL PRODUCTS</a>
            </div>
          </div>
        </div>
      </section>
      <!-- service-section end -->

      <?php 
        $backgroundColor = '#164f63';
        include './partials/about.php'
      ?>

      <!-- chooseus-section -->
      <section class="chooseus-section sec-pad-2">
        <div class="auto-container">
          <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
              <div class="image_block_7">
                <div class="image-box">
                  <figure class="image image-1 paroller">
                    <img src="assets/images/cbb-astm-post-hp-img.jpg" alt="" />
                  </figure>
                  <figure class="image image-2 paroller-2">
                    <img
                      src="assets/images/cbb-astm-post-hp-img-top.png"
                      alt=""
                    />
                  </figure>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
              <div class="content_block_6">
                <div class="content-box">
                  <div class="sec-title">
                    <h2>
                      OREGON-BASED COLUMBIA BASIN BIOSCIENCE AWARDED ASTM’S
                      GLOBAL CANNABIS CERTIFICATION FOR HEMP AND CANNABIS
                      OPERATORS
                    </h2>
                  </div>
                  <div class="text">
                    <p>
                      DENVER, PRNewswire/ — The Policy Center for Public Health
                      & Safety (PH&S) and global standards organization ASTM
                      International announced today that Oregon-based hemp
                      producer Columbia Basin Bioscience (CBB) is the first
                      extraction facility to be certified by ASTM’s CANNQ/HEMPQ
                      Certification Program, a program receiving input from
                      state Attorneys General and law enforcement.
                    </p>
                    <p>
                      ASTM International’s CANNQ/HEMPQ Certification Program is
                      the first independent, Good Manufacturing Process (GMP)
                      system and product safety certification for the cannabis
                      and hemp industry. The program is managed by the Safety
                      Equipment Institute (SEI), an affiliate of ASTM
                      International, in partnership with The GMP Collective....
                    </p>
                    <a href="./news.php" class="theme-btn-one">ALL NEWS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="assets/images/cbb-astm-bg-texture.svg" alt="" class="shape" />
      </section>
      <!-- chooseus-section end -->

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
                  <form action="sendemail.php" method="post">
                    <div class="row clearfix">
                      <div class="col-sm-12 form-group">
                        <input
                          type="text"
                          name="username"
                          placeholder="Name"
                          required=""
                        />
                      </div>
                      <div class="col-sm-12 form-group">
                        <input
                          type="email"
                          name="email"
                          placeholder="Contact Email"
                          required=""
                        />
                      </div>
                      <div class="col-sm-12 form-group">
                        <input
                          type="text"
                          name="phone"
                          placeholder="Phone Number"
                          required=""
                        />
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

      <?php include './partials/footer.php' ?>
    </div>
    
    <?php include './partials/scripts.php' ?>
    
  </body>
  <!-- End of .page_wrapper -->
</html>
