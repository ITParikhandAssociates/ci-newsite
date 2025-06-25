 <!-- ***** Welcome Area Start ***** -->
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  ?>
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- 1 slider -->
             <?php $i=0; foreach ($slider as $value) {
                    if($i == 0){?>
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                 
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="<?php echo base_url();?>design_front/img/core-img/curve-1.png" alt="">
                </div>

              
                

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">  <span> <?php echo $value->slider_title;?> </span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms"><?php echo $value->description;?></h5>
                                  
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="<?php echo base_url().'slider_image/'.$value->slider_img;?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                     
          
            </div>
    <?php } else {?>
                   
                <div class="single-welcome-slide">
                 
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="<?php echo base_url();?>design_front/img/core-img/curve-1.png" alt="">
                </div>

              
                

                <!-- Welcome Content -->
               <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">  <span> <?php echo $value->slider_title;?> </span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms"><?php echo $value->description;?></h5>
                                  
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="<?php echo base_url().'slider_image/'.$value->slider_img;?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                     
          
            </div> 
            <?php } $i++; }?>       
           
            <!-- 2 slider -->
            <!-- Single Welcome Slide -->
            
         
                      
        </div>

    </section>
    <!-- ***** Welcome Area End ***** -->
 <div class="border-line"></div>
    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area">
        <div class="container">
            <div class="row align-items-center">
                 <?php foreach ($about_company as $key) {?>
                <!-- About Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="<?php echo base_url().'company_about_img/'.$key->abou_img;?>" alt="">
                       
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <p style="text-align: justify;"><?php echo $key->description;?></p>
                        <a href="https://localhost/PA/index.php/Parikhandassociates/about" class="btn uza-btn btn-2 mt-4" style="padding-top: 10px;">Read More</a>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="<?php echo base_url();?>design_front/img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Key Point</h2>
                        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                    <?php foreach ($key_point as $key) { if($key->key_id == 1) {?>
                    
                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                           <i class="fa fa-users"></i>
                        </div>
                        <h5><?php echo $key->key_point_title;?> </h5>
                        <p><?php echo $key->description;?></p>
                    </div>
                </div>
                        <?php } if($key->key_id == 2){ ?>
                <!-- Single Service Area -->
                 <div class="col-12 col-lg-4">
                   <div class="single-service-area mb-80">
                      
                       <div class="service-icon">
                           <i class="icon_piechart"></i>
                       </div>
                      <h5><?php echo $key->key_point_title;?></h5>
                       <p><?php echo $key->description;?></p>
                   </div>
               </div> 
                 <?php } if($key->key_id == 3){ ?>
                <!-- Single Service Area -->
                 <div class="col-12 col-lg-4">
                  <div class="single-service-area mb-80">
                    
                      <div class="service-icon">
                          <i class="icon_easel"></i>
                      </div>
                     <h5><?php echo $key->key_point_title;?></h5>
              
                      <p><?php echo $key->description;?></p>
                  </div>
              </div> 
                <?php } }?>
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Service</h2>
                        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">
                                
                                <?php foreach ($services as $key) {?>
                                
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="<?php echo base_url().'services_img/'.$key->small_image;?>" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4 ><?php echo $key->main_header_name;?></h4>
                            <p><?php echo $key->short_description;?></p>
                        </div>
                        <!-- View More -->

                        <div class="view-more-btn">
                            <h4 class="service-tittle"><?php echo $key->main_header_name;?></h4>
                            <a href="<?php echo base_url();?>parikhandassociates/services_detail/<?php echo $key->main_header_id;?>/<?php echo $key->header_sub_menu_fk_id;?>"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                                <?php } ?>
                 
                   
                   


                </div>
            </div>
        </div>

        <!-- Border -->
   <!--      <div class="container">
            <div class="border-line"></div>
        </div> -->

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="<?php echo base_url();?>design_front/img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">
        <!-- Background Curve -->
        <div class="blog-bg-curve">
            <img src="<?php echo base_url();?>design_front/img/core-img/curve-4.png" alt="">
        </div>

        <!-- CTA Area Start -->
        <div class="uza-cta-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Team</h2>
                       <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                        <?php foreach ($our_team as $key1) {?>
                        
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(<?php echo base_url().'our_team/'.$key1->profile_img;?>);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="avatar">
                                <a href="#">
                                    <img src="<?php echo base_url().'our_team/'.$key1->profile_img;?>" alt="">
                                </a>
                            </div>
                            <span class="post-date"><span><?php echo $key1->name_team;?></span> <br><b><?php echo $key1->designetion;?></b></span>
                            <p style="text-align: justify;"><?php echo $key1->short_description;?></p>
                            <a href="<?php echo base_url();?>parikhandassociates/team_detail/<?php echo $key1->profile_id;?>" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                    </div>
                </div>
                    <?php } ?>
                <!-- Single Blog Post -->
                
                <!-- Single Blog Post -->
               
            </div>
        </div>
            <!-- <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="cta-content mb-80">
                            <h2>Interested in working with us?</h2>
                            <h6> give us a call!</h6>
                        </div>
                    </div> -->

                    <!-- <div class="col-12 col-lg-5">
                        <div class="cta-content mb-80">
                            <div class="call-now-btn">
                                <?php foreach ($contact as $value1) {?>
                                
                                <a href="#"><span>Call Now : </span>(+91) <?php echo $value1->mobile;?></a>
                            <?php } ?>
                            </div>
                        </div>
                    </div> -->
                     <div class="border-line"></div>
                </div>
            </div>
        </div>
        <!-- CTA area End -->

        
    </section>
    <!-- ***** Blog Area End ***** -->

   <!-- ***** Counter Area Start ***** -->
<section class="uza-counter-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Single Counter for Team Strength -->
            <div class="col-12 col-md-3">
                <div class="single-counter text-center">
                    <div class="counter-icon mb-3">
                        <i class="fa fa-users fa-3x"></i>
                    </div>
                    <h2 class="count font-weight-bold" data-count="50">0</h2>
                    <p class="font-weight-bold">Team Strength</p>
                </div>
            </div>
            <!-- Single Counter for Years of Experience -->
            <div class="col-12 col-md-3">
                <div class="single-counter text-center">
                    <div class="counter-icon mb-3">
                        <i class="fa fa-clock-o fa-3x"></i>
                    </div>
                    <h2 class="count font-weight-bold" data-count="7">0</h2>
                    <p class="font-weight-bold">Years of Experience</p>
                </div>
            </div>
            <!-- Single Counter for Offices -->
            <div class="col-12 col-md-3">
                <div class="single-counter text-center">
                    <div class="counter-icon mb-3">
                        <i class="fa fa-building fa-3x"></i>
                    </div>
                    <h2 class="count font-weight-bold" data-count="2">0</h2>
                    <p class="font-weight-bold">Offices</p>
                </div>
            </div>
            <!-- Single Counter for Partners -->
            <div class="col-12 col-md-3">
                <div class="single-counter text-center">
                    <div class="counter-icon mb-3">
                        <i class="fa fa-handshake-o fa-3x"></i>
                    </div>
                    <h2 class="count font-weight-bold" data-count="3">0</h2>
                    <p class="font-weight-bold">Partners</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Counter Area End ***** -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.count');
    let hasRun = false;

    const runCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText || 0;

                const speed = 5000; // Adjust to make animation faster/slower
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10); // Adjust time interval
                } else {
                    counter.innerText = target;

                    // Add "+" for Team Strength and Years of Experience
                    if (counter.closest('.single-counter').querySelector('p').innerText === 'Team Strength' || 
                        counter.closest('.single-counter').querySelector('p').innerText === 'Years of Experience') {
                        counter.innerText = target + '+';
                    }
                }
            };
            updateCount();
        });
    };

    // Check if the counter section is in the viewport
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasRun) {
                hasRun = true;
                runCounters();
            }
        });
    });

    // Observe the counter section
    const counterSection = document.querySelector('.uza-counter-area');
    if (counterSection) {
        observer.observe(counterSection);
    } else {
        console.error("Counter section not found");
    }
});
</script>

<style>
    .single-counter {
        padding: 20px;
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 200px; /* Adjust as needed */
    }
    .counter-icon {
        color: #007bff;
    }
    .count {
        font-size: 3rem;
        font-weight: bold;
        margin: 10px 0;
        color: #333;
    }
    .single-counter p {
        font-size: 1.2rem;
        margin: 0;
        color: #666;
    }
    .font-weight-bold {
        font-weight: bold;
    }
</style>

   
    <!-- ***** Newsletter Area End ***** -->
  <div class="border-line"></div>
    