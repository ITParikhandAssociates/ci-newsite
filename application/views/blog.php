
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <!--<a href="#blog"><h2 class="title">Blog</h2></a>
                        <a href="#news"><h2 class="title">News Publications</h2></a> -->
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
    <div class="uza-blog-area section-padding-40">
        <div class="container">
            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-12">
                    <a name="blog"></a>
                    <h5 class="fathead">Trending Videos</h5>
                		<div class="latest_blog">
                            <?php foreach ($link_blog as $key) {?>
                            
                			<div class="col-lg-4 col-md-6 col-sm-12 blogbox">
                				<a href="<?php echo $key->tra_url;?>"><img src="<?php echo base_url().'tranding_img/'.$key->tra_img;?>" alt="<?php echo $key->title;?>" class="thumb"></a>
                				<span class="blog_title"><a href="<?php echo $key->tra_url;?>" title="<?php echo $key->title;?>" target="_blank"><?php echo $key->title;?></a></span>
                	
                			<?php foreach($pdf_blog as $value){
                			   
                			if($key->trand_id == $value->tr_typ){?>
                			| <a target="_blank"  href="<?php echo base_url().'tranding_img/'.$value->tra_pdf;?>" alt="">PDF</a>
                			<?php } } ?>
                			</div>
                			<?php } ?>
                			
                		</div>
                		
                   <!-- 1 --> <?php foreach($blog_detail as $value){?>
                    <div class="single-blog-post h-250 bg-img mb-40">
                        <!-- Post Content -->
                       <div class="latest_blog">
                            <?php foreach ($link_blog as $key) {?>
                            
                			<div class="col-lg-12 col-md-12 col-sm-12 ">
                				<img src="<?php echo base_url().'tranding_img/'.$key->tra_img;?>" alt="<?php echo $key->title;?>" class="thumb">
                				<span class="blog_title"><a href="<?php echo $key->tra_url;?>" title="<?php echo $key->title;?>" target="_blank"><?php echo $key->title;?></a></span>
                			</div>
                			<?php } ?>
                			
                		</div>
                		
                        <div class="post-content" style="padding: 20px;">
                            <span class="post-date"><span></span><?php echo date('d-M-Y',strtotime($value->now_date)) ;?></span>
                            <a href="<?php echo base_url();?>parikhandassociates/single_blog/<?php echo $value->blog_id;?>" class="post-title"><?php echo $value->title;?></a>
                            <p><?php echo $value->description1;?> </p>
                            <a href="<?php echo base_url();?>parikhandassociates/single_blog/<?php echo $value->blog_id;?>" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                        
                    </div>
                  <?php } ?>
                    
                    <!-- 6 -->
                </div>
                
                <div class="col-12 col-lg-12">
                     <a name="news"></a>
                    <h6 class="fathead">Publications and Content</h6>
                    <ul class="pdfview">

                        <?php foreach($pdf_blog as $value){?>

                        <li class="col-lg-4 col-md-6 col-sm-12" style="float: left;"> 
                            <a target="_blank"  href="<?php echo base_url().'tranding_img/'.$value->tra_pdf;?>" alt="<?php echo $value->tra_pdf; ?>">
                                <?php
                                    $pdf_link =$value->tra_pdf;
                                 echo wordwrap($pdf_link,37,"<br/>\n",true); 
                                ?>
                            </a>
                        </li>
                            <?php  } ?>
                    </ul>
                </div>
            </div>
            
           
        </div>
    </div>
    <!-- ***** Blog Area End ***** -->
