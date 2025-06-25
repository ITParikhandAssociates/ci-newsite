
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Join Us</h2>
                        <!--<nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>parikhandassociates"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Join Us</li>
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

    <!-- ***** Join us Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="  offset-md-1 col-md-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                          <div class="cta-content mb-80">
                            <h2>Interested in working with us?</h2>
                            <h6> Fill below Form</h6>
                        </div>
                        </div>
                        <form action="<?php echo base_url();?>parikhandassociates/submit_join_detail" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="fullname" pattern="[a-zA-Z\s]+" maxlength="50" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email_id" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="40" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control mb-30" name="mobile" placeholder="Mobile Number" pattern="[7896][0-9]{9}" maxlength="10" required>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="address" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                     <div class="form-group">
                                       <select class="form-control mb-30" name="group_by" required>
                                           <option value="">--- Select Qullification ---</option>
                                           <option value="Articleship">Articleship</option>
                                           <option value="Semi Qualified">Semi Qualified</option>
                                           <option value="CA">CA</option>
                                           <option value="Other">Other</option>
                                       </select>
                                     
                                    </div>
                                </div>



                                 <div class="col-lg-6">
                                     <div class="form-group">
                                       <select class="form-control mb-30" name="exp" required>
                                           <option value="">--- Experience ---</option>
                                           <option value="0-6 Month">0-6 Month</option>
                                           <option value="1 Year">1 Year </option>
                                           <option value="2 Year">2 Year </option>
                                            <option value="3 Year">3 Year </option>
                                           <option value="4 Year">4 Year </option>
                                            <option value="5 Year">5 Year </option>
                                           <option value="6 Year">6 Year </option>
                                            <option value="7 Year">7 Year </option>
                                           <option value="8 Year">8 Year </option>
                                            <option value="9 Year">9 Year </option>
                                           <option value="10 Year">10 Year </option>
                                            <option value="11+ Year">11+ Year </option>
                                           
                                         
                                       </select>
                                     
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Addition Information" required></textarea>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="custom-file">
                                       <!--  <label>Upload Your Resume</label> -->
                                         <input type="file" id="input_7" name="image" required />
                                     </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn uza-btn btn-2 mt-15" />
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
    
