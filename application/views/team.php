

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Our Team</h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
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

    <!-- ***** Blog Area Start ***** -->
    <div class="uza-blog-area section-padding-80">
        <div class="container">
             <div class="row">
                        <?php foreach ($our_team_detail as $key1) {?>
                        
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(<?php echo base_url().'our_team/'.$key1->profile_img;?>);">
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="avatar">
                                <a href="<?php echo base_url();?>parikhandassociates/team_detail/<?php echo $key1->profile_id;?>">
                                    <img src="<?php echo base_url().'our_team/'.$key1->profile_img;?>" alt="<?php echo $key1->name_team;?>">
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
    </div>
    <!-- *****  End ***** -->

   
 <div class="border-line"></div>
 