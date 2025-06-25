
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Blog</h2>
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
    <div class="uza-blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-8">
                   <!-- 1 --> <?php foreach($blog_detail as $value){?>
                    <div class="single-blog-post h-250 bg-img mb-40 " >
                        <!-- Post Content -->
                       
                        <div class="post-content" style="padding: 20px;">
                            <span class="post-date"><span></span><?php echo date('d-M-Y',strtotime($value->now_date)) ;?></span>
                            <a href="<?php echo base_url();?>parikhandassociates/single_blog/<?php echo $value->blog_id;?>" class="post-title"><?php echo $value->title;?></a>
                            <p><?php echo $value->description1;?> </p>
                            <a href="<?php echo base_url();?>parikhandassociates/single_blog/<?php echo $value->blog_id;?>" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a>
                        </div>
                        
                    </div>
                  <?php } ?>
                    
                    <!-- 6 -->
                   
                   <div>
                		<p class="fathead">Trending</p>
                		<ul class="latest_blog">
                            <?php foreach ($link_blog as $key) {?>
                            
                			<li>
                				<img src="<?php echo base_url().'tranding_img/'.$key->tra_img;?>" alt="<?php echo $key->title;?>" class="thumb">
                				<span class="blog_title"><a href="<?php echo $key->tra_url;?>" title="<?php echo $key->title;?>" target="_blank"><?php echo $key->title;?></a></span>
                			</li>
                			<?php } ?>
                			
                		</ul>
                	</div>
                    
                </div>


                <div class="col-lg-4">
                	<div>
                		<p class="fathead">Trending</p>
                		<ul class="latest_blog">
                            <?php foreach ($link_blog as $key) {?>
                            
                			<li>
                				<img src="<?php echo base_url().'tranding_img/'.$key->tra_img;?>" alt="<?php echo $key->title;?>" class="thumb">
                				<span class="blog_title"><a href="<?php echo $key->tra_url;?>" title="<?php echo $key->title;?>" target="_blank"><?php echo $key->title;?></a></span>
                			</li>
                			<?php } ?>
                			
                		</ul>
                	</div>
                </div>    
            </div>
            
           
        </div>
    </div>
    <!-- ***** Blog Area End ***** -->
