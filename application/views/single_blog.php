
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <?php foreach($single_blog_detail as $value){?>
                        <h2 class="title">Blog</h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates/blog">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $value->title;?></li>
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
                        <div class="post-details-text">
                                <?php foreach($single_blog_detail as $val){?>
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <div class="post-content text-center mb-50">
                                        <a href="#" class="post-date"><span></span><?php echo date('d-M-Y',strtotime($val->now_date)) ;?></a>
                                        <h2><?php echo $val->title;?></h2>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <img class="mb-50" src="<?php echo base_url().'blog_image/'.$val->blog_img;?>" alt="">
                                </div>
                                <div class="col-12 col-lg-10">
                                   
                                    <!-- Blockquote -->
                                   
                                   <?php echo $val->description2;?>
                                    <!-- Post Catagories & Post Share -->
                                     <div class="border-line"></div>
                                    <!-- Related News Area -->
                                    <div class="related-news-area">
                                        <h2 class="mb-4">Related Blog</h2>

                                        <div class="row">
                                            <!-- Single Blog Post -->
                                            <?php foreach ($related_blog as $value) {?>
                                            
                                            <div class="col-12 col-lg-6">
                                                <div class="single-blog-post bg-img mb-50 h-380" >
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <span class="post-date"><span></span><?php echo date('d-M-Y',strtotime($value->now_date)) ;?></span>
                                                        <a href="#" class="post-title"><?php echo $value->title;?></a>
                                                        <p><?php echo $value->description1;?></p>
                                                        <a href="<?php echo base_url();?>parikhandassociates/single_blog/<?php echo $value->blog_id;?>" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                                <?php } ?>
                                            <!-- Single Blog Post -->
                                          


                                        </div>
                                    </div>

                                  
                                 
                                </div>





                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Details Area End ***** -->

   
   
    
         <div class="border-line"></div>
   