<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>E-chimie | Contact</title>
    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">    

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body style="background-color:#E0E0E0">
  
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>contact@e-chimie.ma</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>+212 9999999</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
          <!-- IMG BASED LOGO  -->
                    <a class="navbar-brand" href="index.php"><img style="margin-top: -20px;" src="assets/img/per.png" alt="logo"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>                    
            <li><a href="Login.php">connexion</a></li>
            <li><a href="inscrit.php">Inscription</a></li>
            <li class="active"><a href="contact.php">Contact</a></li> 
             <li><a href="#">Notre travail</a></li> 
              <li><a href="#">a propos Nous</a></li>          
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb"style="background-color:black">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Contact</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active"style="color:red">Contact</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Get in Touch</h2>
            <p>We welcome comments and enquiries about any of our activities and services. You can contact us in a number of ways.</p>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <?php
include_once('./class/contact.php');
if(isset($_POST['submit'])){
  $author = $_POST['author'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
 $object = new contact();
 $object->insertcontact($author,$emaiDl,$subject,$comment);
}
?>
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                  <form action="" method="POST" class="contactform">                  
                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input type="text"  required="required" size="30" value="" name="author">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Subject</label>
                      <input type="text" name="subject">  
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Message</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3375.4823231875575!2d-7.93784638451257!3d32.21817721957519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaf7a3feab1f407%3A0xbd50c8e7902ffbf9!2z2KzYp9mF2LnYqSDZhdit2YXYryDYp9mE2LPYp9iv2LMg2YXYqti52K_Yr9ipINin2YTYqtiu2LXYtdin2Kog2KfZhNiq2YLZhtmK2Kk!5e0!3m2!1sen!2sma!4v1639281168173!5m2!1sen!2sma" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

 <!-- Start footer -->
 <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top"style="background-color:black">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="Login.php">Connexion</a></li>
                  <li><a href="inscrit.php">inscription</a></li>
                  <li><a href="">a propos nous</a></li>
                  <li><a href="">Notre Travail</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Lot 660, Hay Moulay Rachid, Ben Guerir 43150 MA</p>
                  <p>Phone: +212 64343-7464  </p>
                  <p>Website: www.e-chimie.ma</p>
                  <p>Email: contact@e-chimie.ma</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="" rel="nofollow">Halim Team</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->




  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>