<!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">
                
                    <?php foreach ($contact_detail as $key) {?>
                    
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Footer Content -->
                        <div class="footer-content mb-15">
                            <h3 style="font-size: 20px;"> <a href="tel:+91<?php echo $key->mobile; ?>" 
       style="text-decoration: none; color: inherit;"><i class="fa fa-phone"></i>
        (+91) <?php echo $key->mobile; ?>
    </a></h3>
                            <p>
    <a href="https://maps.app.goo.gl/ZqutpqNDkrPuYrxT9?q=<?php echo urlencode($key->address); ?>" target="_blank" style="text-decoration: none; color: inherit;">
    <i class="fa fa-map-marker"></i> 
    <?php echo $key->address; ?>
    </a>
</p>
                            <a href="mailto:<?php echo $key->email_id; ?>"><i class="fa fa-envelope"></i> <?php echo $key->email_id; ?></a>
                           </p>
                        </div>
                        <p class="mb-0">
    <i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Sat: 11:00 Hrs to 18:00 Hrs
</p>
<p class="mb-0">
    <i class="fa fa-calendar" aria-hidden="true"></i> 2nd & 4th Saturday Closed<br> 
    &nbsp;&nbsp;&nbsp;&nbsp;Sunday Closed
</p>                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Quick Link</h4>

                        <!-- Nav -->
                        <nav>
                            <ul class="our-link">
                                <li><a href="<?php echo base_url();?>parikhandassociates">Home</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/about">Who We Are</a></li>
                               <!--  <li><a href="#">Services</a></li> -->
                                <li><a href="<?php echo base_url();?>parikhandassociates/our_team">Our Team</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/join">Join Us</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/blog">Blog</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Service</h4>

                        <!-- Nav -->
                        <nav>
                           <ul class="our-link">
                            <?php foreach ($sub_menu_type as $key10) {?>
                                
                              
                                
                                <li><a href="<?php echo base_url();?>parikhandassociates/services_detail/<?php echo $key10->main_header_id;?>/<?php echo $key10->sub_menu_id;?>"><?php echo $key10->main_header_name;?></a></li>
                                
                            <?php  } ?>
                              
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p> <?php echo $key->about_comany;?>  </p>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="https://www.facebook.com/Parikh-Associates-375678853069318/" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            
                            <a href="https://www.instagram.com/Parikhandassociate/" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/parikhandassociates" class="instagram" data-toggle="tooltip" data-placement="top" title="Linkedin" target="_blank" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

 <div class="row" style="margin-bottom: 30px; padding-left: 10px;">
Copyright &copy; 2019. All rights reserved | Design by :<a href="https://parikhandassociates.in/">&nbsp;Parikh & Associates</a> 
</div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="<?php echo base_url();?>design_front/js/jquery.min.js" type="text/javascript"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>design_front/js/popper.min.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>design_front/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- All js -->
    <script src="<?php echo base_url();?>design_front/js/uza.bundle.js" type="text/javascript"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>design_front/js/default-assets/active.js" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>-->
<!-- <script type="text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->

<!--<script src="<?php echo base_url();?>design_front/ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer=""></script>-->
</body>


</html>