<!DOCTYPE html>
<html lang="en">
<head>

     <title>job4u.com | Latest job opening</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/css/owl.carousel.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Job4U</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li class="active"><a href="index.html">Home</a></li>
                         <li><a href="job-listing.html">Jobs</a></li>
                         <li><a href="about-us.html">About Us</a></li>
                         <li><a href="blog-posts.html">Blog</a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="team.html">Team</a></li>
                                   <li><a href="testimonials.html">Testimonials</a></li>
                                   <li><a href="terms.html">Terms</a></li>
                              </ul>
                         </li>
                         <li><a href="contact.html">Contact Us</a></li>
                         <!-- <li><a href="">Sign-In</a></li>
                         <li><a href="">Register</a></li>     -->
                    </ul>
                    <form action="<?php echo base_url();?>registration">
                         <button type="submit" class="btn btn-warning pull-right">Register</button>
                    </form> 
                    <form action="<?php echo base_url();?>login">
                         <button type="submit" class="btn btn-primary pull-right">Login</button>
                    </form>
                    
                    
                    
               </div>

          </div>
          
     </section>