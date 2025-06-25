

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Connect Digitally</h2>
                       <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Inquiry</li>
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
                <div class="  offset-md-1 col-md-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Thank you for your interest. <br>Please fill out the form to kick start our Digital Connection</h4>
                        </div>
                        <form action="<?php echo base_url();?>parikhandassociates/submit_inquiry" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="fullname" placeholder="Name" maxlength="50" pattern="[a-zA-Z\s]+" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control mb-30" name="mobile" placeholder="Phone" pattern="[7896][0-9]{9}" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="organization" placeholder="Organization" maxlength="50"  required>
                                    </div>
                                </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <select class="form-control mb-30" name="service_name" required>
                                           <option value="">Select Option</option>
                                           <?php foreach($main_menu as $val){?>
                                           <option value="<?php echo $val->main_header_name;?>"><?php echo $val->main_header_name;?></option>
                                          
                                           
                                        <?php } ?>
                                         <option value="Other">Other</option>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn uza-btn btn-3 mt-15" value="Connect">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Single Contact Card -->
               
            </div>

          
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

  

       <div class="border-line"></div>
    

   