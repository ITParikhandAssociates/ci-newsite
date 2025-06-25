<!DOCTYPE html>
<html lang="en">



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Parikh & Associates | Home </title>
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>design_front/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>design_front/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>design_front/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>design_front/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>design_front/css/default-assets/classy-nav.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>design_front/css/animate.css">
     
      
        
         <link rel="stylesheet" href="<?php echo base_url();?>design_front/css/owl.carousel.min.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="<?php echo base_url();?>parikhandassociates/search_data" method="post">
                            <input type="text" name="key_word" class="form-control" placeholder="Search and hit enter..." required>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>design_front/img/logo_new.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li ><a href="<?php echo base_url();?>">Home</a></li>
                                <li ><a href="<?php echo base_url();?>Parikhandassociates/about">Who We Are</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates">Our Services</a>
                                    <ul class="dropdown">
                                        <?php foreach ($main_menu as $key) {?>
                                        
                                        <li><a href="#"> <?php echo $key->main_header_name;?> </a>
                                            <ul class="dropdown">
                                                <?php foreach ($sub_menu as $value) {
                                                    if($key->main_header_id == $value->main_menu_id) {?>
                                                
                                                <li><a href="<?php echo base_url();?>parikhandassociates/services_detail/<?php echo $value->main_menu_id;?>/<?php echo $value->sub_menu_id;?>"><?php echo $value->sub_menu_name;?></a></li>
                                               
                                                <?php }} ?>
                                            </ul>
                                        </li>
                                       <?php } ?>
                                      
                                       
                                         
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/our_team">Our Team</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/join">Join Us</a></li>
                                <li><a href="<?php echo base_url();?>parikhandassociates/blog">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url();?>parikhandassociates/blog/">Blog</a></li>
                                        <li><a href="<?php echo base_url();?>parikhandassociates/blog/#news">News Publications</a></li>
                                    </ul>
                                </li>
                                
                                        
                                <li><a href="<?php echo base_url();?>parikhandassociates/contact">Contact</a></li>
                                <li><a href="<?php echo base_url();?>profile/Firm Profile P&A.pdf">Profile</a></li>
                            </ul>
                               

                            <!-- Get A Quote -->
                            <!-- <div class="get-a-quote ml-4 mr-3">
                                <a href="<?php echo base_url();?>parikhandassociates/inquiry" class="btn uza-btn">Connect Digitally</a>
                            </div> -->

                          
                            <!-- Search Icon -->
                            <!-- <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div> -->
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->