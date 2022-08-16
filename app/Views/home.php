<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="banner-carousel banner-carousel-1 mb-0">
  
  <div class="banner-carousel-item" style="background-image:url(<?php   if($list){ echo base_url('public/photos/slider/'.$list[0]['img'] );} ?>); height:400px">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft"><?php if($list){ echo $list[0]['subtitle'];} ?></h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight"><?php  if($list){ echo $list[0]['title'];} ?></h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                 <a href="<?= base_url('services') ?>" class="slider btn btn-primary">Our Services</a>
            <a href="<?= base_url('contact') ?>" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

 
  <div class="banner-carousel-item" style="background-image:url(<?php   if($list){ echo base_url('public/photos/slider/'.$list[1]['img'] );} ?>); height: 400px">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                
                <h3 class="slide-sub-title" data-animation-in="fadeIn"><?php if($list){ echo $list[1]['title'];} ?></h3>
                <p class="slider-description lead" data-animation-in="slideInRight"><?php if($list){ echo $list[1]['subtitle'];} ?></p>
                <div data-animation-in="slideInLeft">
                    <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Give Us Your Feedback</a>
                    
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>


<div class="banner-carousel-item" style="background-image:url(<?php   if($list){ echo base_url('public/photos/slider/'.$list[2]['img'] );} ?>); height: 400px">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                
                <h3 class="slide-sub-title" data-animation-in="fadeIn"><?php if($list){ echo $list[2]['title'];} ?></h3>
                <p class="slider-description lead" data-animation-in="slideInRight"><?php if($list){ echo $list[2]['subtitle'];} ?></p>
                <div data-animation-in="slideInLeft">
                    <a href="contact.php" class="slider btn btn-primary" aria-label="contact-with-us">Email</a>
                    
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>

</div>

<section class="call-to-action-box no-padding"  >
  <div class="container" >
    <div class="action-style-box" >
        <div class="row align-items-center">
          <div class="col-md-12 text-center text-md-center">
              <div class="call-to-action-text">
                <h3 class="action-title">WE PROVIDE BEST SERVICES</h3>
              </div>
          </div><!-- Col end -->
          
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
            <!-- <h2 class="into-title">About Us</h2>-->
              <h3 class="into-sub-title">We deliver loads on time</h3>
              <p>We fulfill the promises and dedicated services provided to our clients.you can get load as per your specifications.</p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We've Repution for Excellence</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We Build Partnerships</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Guided by Commitment</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">A Team of Professionals</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">Our Values</h3>
          <p>Our values matters.</p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Safety
                      </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Truckers safety matters first,we let them know before about weather condition.And provide safety tools in case an emergency.
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Customer Service
                      </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                      we take care the customer's needs by providing help and high-quality service. And provide proper assistance before,after and during.
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Integrity
                      </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Work in tranparency and assist accurately .
                    </div>
                </div>
              </div>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <!--<div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
          </div><!-- Col end -->

          <!--<div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
          </div><!-- Col end -->
      <?php if($find){  ?>
          <div class="col-md-6 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="<?= base_url('public/photos/founder/'.$find[0]['photo'])?>" style="height: 150px" alt="facts-img">
              </div>
              <div>
                <!--<h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>-->
                <h2 ><?= $find[0]['name'] ?></h2>
                <h2><?= $find[0]['designation'] ?></h2>
              </div>
          </div><!-- Col end -->
        <?php }else{ ?>

          <div class="col-md-6 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/rs.jpg" style="height: 150px" alt="facts-img">
              </div>
              <div>
                <!--<h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>-->
                <h2 >RAHUL SIMIC</h2>
                <h2>Founder Of Simic Logistics</h2>
              </div>
          </div>
          <?php } ?>
          <div class="col-md-6 col-sm-6 ts-facts mt-5 mt-md-0">
              
              <div >
                <!--<h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>-->
                <p style="text-align: center; font-size: 25px"> Initially Started work as a trucker 6 years back and now registered own company. Simic Logitics Inc provide state wise services. Providing Best services To Its Clients &  Co-Operate Wih Everyone.</p>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">We Are Specialists In</h2>
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-6">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <!--<img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">-->
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title" style ="font-color:red" ;>Truck Load Services</a></h3>
                <p>From  truck loading to unloading process, we keep  watch to  the whole process. And provide help accordingly. </p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <!--<img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">-->
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Dedicated Load</a></h3>
                <p>We have dedicated loads from  tie-up with cooperative companies. there will be complete schedule provide who wants to get the services.</p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
               <!-- <img loading="lazy" src="images/icon-image/service-icon3.png"  alt="service-icon">-->
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Refrigerator Load</a></h3>
                <p>We have dedicated refrigrator load, and reefer also. which include good maintenance of cooling and freezing points.</p>
              </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        
        <div class="col-lg-6 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <!--<img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">-->
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Dry load</a></h3>
                <p>Dry dedicated load as per weather. which are local and interstate also. </p>
              </div>
          </div>


           <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <!--<img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">-->
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">On-Time Delivery & Services</a></h3>
                <p>Simic logistics mark its words in providing  excellent services to its clients and future dealing ,and on-time delivery services.</p>
              </div>
          </div>


           <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <!--<img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">-->
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Dedicated Customer Service</a></h3>
                <p>Here  we have dedicated customer services, providing  solution on the time.you can send your query anytime via email, phone or walk in person.</p>
              </div>
          </div>








          <!-- Service 4 end -->
         <!-- Service 5 end -->

          <!-- Service 6 end -->
        </div><!-- Col end -->




    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->


          </div><!-- shuffle item 3 end -->

       
          </div><!-- shuffle item 4 end -->

       
            </div>
          </div><!-- shuffle item 5 end -->

       
          </div><!-- shuffle item 6 end -->
        </div><!-- shuffle end -->
      </div>

       

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

                </div><!-- Quote item end -->
              </div>
            
                </div><!-- Quote item end -->
              </div>
             
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

       <!-- <div class="col-lg-6 mt-5 mt-lg-0">

          <!--<h3 class="column-title">Happy Clients</h3>

        
              </div><!-- Client 1 end -->

            
              </div><!-- Client 2 end -->

            
              </div><!-- Client 3 end -->

             
              </div><!-- Client 4 end -->

              </div><!-- Client 5 end -->

              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding" >
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3> How We Can Help?</h3>
              <h4>+530-301-7581</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0"> Sign-up For</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="your email and hit enter" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end --
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->

              </div>
          </div><!-- Latest post end -->
        </div><!-- 2nd post col end -->

          </div><!-- Latest post end -->
        </div><!-- 3rd post col end -->
    </div>
    
  <!--/ Container end -->
</section>
<!--/ News end -->

  

<?= $this->endSection() ?>