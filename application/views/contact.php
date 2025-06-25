
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Contact</h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo base_url();?>design_front/img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <?php foreach($contact_detail as $key){?>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-5">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                        <h4>
    <i class="fa fa-phone"></i> Contact Us
</h4>

                            <h3>
    <a href="tel:+91<?php echo $key->mobile; ?>" 
       style="text-decoration: none; color: inherit;">
        (+91) <?php echo $key->mobile; ?>
    </a>
</h3>                           <!--  <h6><a href="#">care.stupidstorytellers@gmail.com</a></h6> -->
<i class="fa fa-clock"></i><h6>Mon - Sat: 11:00 Hrs to 18:00 Hrs <br>2nd & 4th Saturday Closed <br>Sunday Closed</h6>

                            
                            <h5 style="padding-top: 20px;">
    <i class="fa fa-envelope"></i> Email ID
</h5>
<a href="mailto:<?php echo $key->email_id; ?>" 
   style="text-decoration: none; color: inherit;">
    <?php echo $key->email_id; ?>
</a>

<h5 style="padding-top: 20px;">
    <i class="fa fa-map-marker"></i> Address
</h5>
<p>
    <a href="https://maps.app.goo.gl/ujrrtQvpgi4seA2E6" 
       target="_blank" 
       style="text-decoration: none; color: inherit;">
        <?php echo $key->address; ?>
    </a>
</p>


                        </div>

                        <!-- Single Sidebar Area -->
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                   <?php echo $key->contact_map;?>
                </div>
                <?php } ?>


            </div>

         
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    
    
     <div class="border-line"></div>
   

   