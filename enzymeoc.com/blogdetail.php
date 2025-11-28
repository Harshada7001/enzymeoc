<!DOCTYPE html>
<html lang="in">



<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ENZYME ORGANISATIONAL CONSULTING">

    <!-- ========== Page Title ========== -->
    <title>Blog</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>
             <style>
                 
 .containers {
	 margin: 0 auto;
	 /*padding: 4rem;*/
	 width: 48rem;
}
 .article-image{
     height: 220px;
    width: 250px;
    margin:auto;
 }
 .article-body{
     font-size:18px;
     padding: 21px;
 }
 
             </style>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

     <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-two-lines bg-dark text-light">
        <div class="container">
            <div class="row">
             
                <div class="user-login text-right col-md-12">
                    
                    <a href= "mailto: Info@gmail.com"> Mail: yadavi@enzymeoc.com </a>
                    <a href="tel:+91 8380073988"> <i class="fas fa-phone"></i>+91 9067997733</a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.jpg"  class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="index.html"   >Home</a>
                            
                               
                        <li class="dropdown ">
                            <a href="about-us.html" >About Us</a>
                            
                                        
                                    
                        </li>
                        
                        
                        
                        <li class="dropdown">
                            <a href="service.html">Services</a>
                            
                        </li>

                        <li class="dropdown">
                            <a href="blog.php">Blog</a>
                            
                        </li>
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
    
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Detail</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

<div id="content" class="site-content">
   <div class="containers">

    <div id="content" class="site-content">
        <div class="container">
            <div class="blog-detail">
                <div class="blog-header">
                    <h1><?=$blog['blogtitle']?></h1>
                    <!--<img src="<?//php //echo "http://enzymeoc.com/Add_Blogs/blog/uploads/".$blog['blogimg']; ?>" alt="<?//=$blog['blogtitle']?>" />-->
                </div>
                <div class="blog-body">
                    <p><?=$blog['blogtext']?></p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


    <!-- Start Blog
    ============================================= -->
          <div class="container container-flex">
              <?php
 include'datasource.php';
 $id=$_GET['id'];
              
                $query1="SELECT * FROM `blog` where blogid='$id'";
                // echo $query1;
                $result1=$conn->query($query1);
                if($result1->num_rows> 0){
                if($row=$result1->fetch_assoc()){
?>
            <main role="main">
               <article class="article-featured">

    <p class="article-body" id="articleBody">
 
        <center><h1 class="article-title"><?=$row['blogtitle']?></h1></center>
                    <img src="<?php echo "http://enzymeoc.com/Add_Blogs/blog/uploads/".$row['blogimg']; ?>" alt="enzyme blog" class="article-image">
                    <!--<p class="article-info">July 23, 2019 | 3 comments</p>-->
                    <p class="article-body"><?=$row['blogtext']?>
    </p>
    
</article>

 
                
    
            </main>
            <?php }} ?>
            
        </div>
 
    <!-- End Blog -->

      <!-- Start Footer 
    ============================================= -->
   <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <h4>Enzyme Organisational Consulting</h4>
                            <p>
                                " At Enzyme Organisational Consulting, we deliver value through strategic business consulting, driving performance and engagement for tangible business results."
                            </p>
                            
                            <div class="subscribe">
                                <form action="#">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="Index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="service.html">Services</a>
                                </li>
                               
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-md-3 item">
                        <div class="f-item address">
                            <h4>Address</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p><b>Email </b><span><a href="mailto:yadavi@enzymeoc.com">yadavi@enzymeoc.com </a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p><b>Office </b><span>  501, A Wing, Avadh Enclave, Kamathwade, Nashik 422010.</span>
                                </li>

                                <li>
                                    <i class="fas fa-phone"></i> 
                                    <p><b>Contact</b><span>+91 9067997733</span></p>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                      <div class="col-md-3 item">
                        <div class="f-item address">
                            <h4>Location</h4>
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7499.788369242782!2d73.73937249221933!3d19.970951825706614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddede89339059f%3A0xff750a67fa26e242!2sAvadh%20Enclave%20Apartment!5e0!3m2!1sen!2sin!4v1713417524670!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>></iframe>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6" style="color:#fff;">
                            &copy; 2024 Enzyme | Developed by <a  style="color:#ffb606;" href="https://www.spandigitsocial.com/">
                            SpanDigit Social 
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>


</html>