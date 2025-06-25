
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <?php foreach($once_profile as $key){?>
                        <h2 class="title"><?php echo $key->name_team;?></h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates/our_team">Our Team</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $key->name_team;?></li>
                            </ol>
                        </nav>-->

                        <?php } ?>
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

    <!-- ***** Blog Details Area Start ***** -->
    <section class="blog-details-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-details-content">
                        <!-- Post Details Text -->
                             <?php foreach($once_profile as $key){?>

                        <div class="post-details-text">

                            <div class="row justify-content-center">
                               
                               
                                <div class="col-12 col-lg-10">
                                   
                                    
                                  
                                    <!-- Related News Area -->
                                    <div class="related-news-area">
                                      <!--  <h2 class="mb-4"><?php echo $key->name_team;?></h2>-->

                                        <div class="row">
                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-lg-6">
                                                <div class="single-blog-post bg-img mb-50" >
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                      <img src="<?php echo base_url().'our_team/'.$key->profile_img;?>" alt="<?php echo $key->name_team;?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-lg-6">
                                                <div class="single-blog-post bg-img mb-50" >
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                          <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact </h4>
                        <p><b>Contact No : +91 <?php echo $key->mobile;?></b></p>
                         <p><b>Email Id : <?php echo $key->email_id;?></b></p>
                       

                        <!-- Social Info -->
                        <div class="footer-social-info">

                            <a href="<?php echo $key->fac_url;?>" target="_blank" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $key->twitr_url;?>" target="_blank" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            
                            <a href="<?php echo $key->insta_url;?>" target="_blank" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $key->linked_url;?>" class="instagram" data-toggle="tooltip" data-placement="top" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <div>
                                    
                                    <ul class="team_certificate">
                                       
                                    </ul>
                                    <?php echo $key->description;?>
                                       
                                       
                                   </div>
                                 
                                  
                                   
                                </div>
                            </div>
                        </div>


                    <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Details Area End ***** -->

  
 <div class="border-line"></div>
    <!-- ***** Footer Area Start ***** -->
  