<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title> simic logistics</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/bootstrap.min.css') ?>">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css') ?>">
  <!-- Animation -->
  <link rel="stylesheet" href="<?= base_url('plugins/animate-css/animate.css') ?>">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick-theme.css') ?>">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?= base_url('plugins/colorbox/colorbox.css') ?>">
  <!-- <link rel="stylesheet" href="sli.css"> -->
<!-- Template styles -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

</head>
<body>
  <div class="body-inner">

   <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <!--<li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                    </li>-->
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/simiclogistics81.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      
                      <a title="Instagram" href="https://simiclogistics81">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.php">
                  <img loading="lazy" src="images/NEW15.png"  alt="sli">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle">530-301-7581</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">simiclogistics81@gmail.com</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">DOT Number</p>
                          <p class="info-box-subtitle">3438557</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="<?= base_url('contact') ?>">Contact Us</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?= $this->include('menu') ?>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        

        
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

<?= $this->renderSection('content') ?>

  <footer id="footer" >
    <div class="footer-main" >
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            
            
            <p>Simic logistics Inc. aimed to provide servicing best to its clients. in this fast paced life we understand every clients requirements. we  pay weekly and hourly basis. </p>
            <div class="footer-social">
              <ul>
            <li><a href="https://facebook.com/simiclogistics" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i></a></li>
                
              <li><a href="https://instagram.com/simiclogistics" aria-label="Instagram">
                  <i class="fab fa-instagram"></i></a></li>

               <li><a href="https://gmail.com/simiclogistics81@gmail.com" aria-label="gmail">
                  <i class="fab fa-gmail"></i></a></li>
                
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 7 days a week. Contact us for futher details.
              <br><br> Monday - Friday: <span class="text-right">10:00 - 04:00 </span>
              <br> Saturday: <span class="text-right">12:00 - 03:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li>Load services</li>
              <li>Refrigerator Load</li>
              <li>Dry Load</li>
              <li>Weather Updates for ease of truckers</li>
              <li>Owner Opeartor Welcome</li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
               @ simiclogistics81@gmail.com
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled mb-0">
                <li><a href="about.php">About</a></li>
                <li><a href="team.php">Our services</a></li>
                <li><a href="faq.php">Faq</a></li>
                
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="<?= base_url('plugins/jQuery/jquery.min.js')?>"></script>
  <!-- Bootstrap jQuery -->
  <script src="<?= base_url('plugins/bootstrap/bootstrap.min.js')?>" defer></script>
  <!-- Slick Carousel -->
  <script src="<?= base_url('plugins/slick/slick.min.js')?>"></script>
  <script src="<?= base_url('plugins/slick/slick-animation.min.js')?>"></script>
  <!-- Color box -->
  <script src="<?= base_url('plugins/colorbox/jquery.colorbox.js')?>"></script>
  <!-- shuffle -->
  <script src="<?= base_url('plugins/shuffle/shuffle.min.js')?>" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="<?= base_url('plugins/google-map/map.js')?>" defer></script>

  <!-- Template custom -->
  <script src="<?= base_url('js/script.js')?>"></script>

  </div><!-- Body inner end -->
  </body>

  </html>