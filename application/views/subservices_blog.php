

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <?php foreach($service_detail as $value){?>
                        <h2 class="title"><?php echo $value->sub_menu_name;?></h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates/services_detail/<?php echo $value->header_manu_fk_id;?>/<?php echo $value->header_sub_menu_fk_id;?>"><?php echo $value->sub_menu_name;?></a></li>
                               <li class="breadcrumb-item active" aria-current="page"> <?php echo $value->sub_menu_name;?></li>
                            </ol>
                        </nav> -->

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
        <div class="row justify-content-center">
            <div class="related-news-area">
                <div class="row">
                     <?php foreach($service_detail as $value){?>

                    <div class="col-12 col-lg-8">
                        <div class="service_details">
                            <img src="<?php echo base_url().'services_img/'.$value->long_image;?>">              
                          <?php echo $value->description;?>
                        </div>
                    </div>


                       <?php } ?>
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post bg-img mb-50">
                               <?php foreach($service_detail as $value){?>
                            <div class="main_product_tittle">
                                <h3 ><?php echo $value->main_header_name;?></h3>
                            </div>
                            <div class="post-content  ">
                                <ul class="service_list">
                                    <?php foreach($sub_type as $key2){ if($key2->main_menu_id == $value->header_manu_fk_id){
                                    ?>
                                    <li><a href="<?php echo base_url();?>parikhandassociates/services_detail/<?php echo $key2->main_menu_id;?>/<?php echo $key2->sub_menu_id;?>"><?php echo $key2->sub_menu_name;?></a></li>
                                    <?php } } ?>
                                </ul>
                            </div>
                                 <?php } ?>


                        </div>
                    </div>
                  

                </div>
            </div>
       </div>
    </div>
</section>
    <!-- ***** Blog Details Area End ***** -->

  
  <div class="border-line"></div>
    <!-- ***** Footer Area Start ***** -->
   