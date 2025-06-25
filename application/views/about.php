
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Who we are</h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Who we are</li>
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

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-12">

                    
                       <?php foreach($about_company as $value2){?>
                    </div>
                        
                   <div>
                      <?php echo $value2->description;?>
                            
                        
                       </div>
                       <?php } ?>
              
                <!-- About Us Content -->
             <!--    <div class="col-12 col-lg-6">
                   <div>
                       <div class=" mb-4">
                        <h2>Profile : </h2>
                    </div>
                            
                              
                             <ul class="profile">
                                 <li><b>Name of the Firm : </b>M/s. Parikh & Associates Chartered Accountants </li>
                                 <li><b>ICAI Firm Registration No : </b>146545W</li>
                                 <li><b>Constitution : </b>Partnership Firm</li>
                                 <li><b>No. of Partners: </b>Three (3) </li>
                             </ul>
                        
                       </div>
                </div> -->
            </div>
        </div>
<div class="border-line"></div>    
        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="<?php echo base_url();?>design_front/img/core-img/curve-2.png" alt="">
        </div>
    </section>


<section>
      <div class="section-padding-60">
       
            <div class="container">
                
                   <div class="row">
                     <?php foreach($about_blog as $value3){?>
                	<div class="col-lg-1"></div>
                	<div class="col-lg-4">
                		<div class="mb-4"><h2><?php echo $value3->blog_title;?></h2></div>
                     	<div>
                     		<img src="<?php echo base_url().'company_about_img/'.$value3->blog_img;?>" alt="Mission">	
                            <p style="padding-top: 15px;"><?php echo $value3->description;?></p>    
                     	</div>
                	</div>
                	<div class="col-lg-1">
                	</div>
                        <?php } ?> 

                     </div>
                    

    
            </div>
               
            </div>	

      
      
          
            <div class="border-line"></div>

</section>

    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach ($why_choose as $key5) {?>
                
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80 ">
                        <div class="mb-4">
                            <h2>Why Choose Us</h2>
                        </div>
                        
                           <!--  <li><i class="fa fa-check" aria-hidden="true"></i>we understand the value of your time which helps us meeting all deadlines in timely manner.</li>
                           <li><i class="fa fa-check" aria-hidden="true"></i>we consider what you spend is not your expense it’s your investment </li>
                           <li><i class="fa fa-check" aria-hidden="true"></i>we believe loyalty is not just a word it’s our identity Because we cater your A3 business requirements – Accounting, Advisory, and Assurance </li> -->
                           <?php echo $key5->description;?>
                            
                    
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="<?php echo base_url().'company_about_img/'.$key5->choose_img;?>" alt="why choose us ">
                    </div>
                </div>
                <?php } ?>



            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->
   <div class="border-line"></div>
    