
<!doctype html>

<html lang="en" class="no-js">

<head>

    <!-- meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- title and favicon -->

    <title>Boots4 :: Portfolio Template</title>
    <link rel="icon" href="assets/img/icon/fav_icon.gif">
    

    <!--necessary stylesheets -->

    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">    
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>


<body>
    
    <!-- Preloader -->
    
    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <!-- home-page -->
    
    <div class="home-page">
        
        <!-- Introduction -->
        
        <div class="introduction">
            <!-- <div class="mask">
            </div> -->
            <div class="intro-content">
                <!-- <h1>HELLO<br>
                I'M <span>JOHN</span> DOE</h1> -->
                <h1>
                    Hi, We are
                </h1> 
                <span>boots</span><span class="number">4</span>
                <p class="slogan-text text-capitalize">leading creative tech company</p>

                <div class="social-media hidden-xs">
                    <a href="#" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
                    <a href="#" class="fa fa-twitter" data-toggle="tooltip" title="Twitter"></a>
                    <a href="#" class="fa fa-plus" data-toggle="tooltip" title="Google+"></a>
                    <a href="#" class="fa fa-linkedin" data-toggle="tooltip" title="Linkedin"></a>
                    <a href="#" class="fa fa-behance" data-toggle="tooltip" title="Behance"></a>
                    <a href="#" class="fa fa-flickr" data-toggle="tooltip" title="Flicker"></a>
                    <a href="#" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
                </div>
            </div>
            
            <!-- Social Media Icons [ END ] -->
        </div>
        
        <!-- Navigation Menu -->
        
        <div class="menu">
            <div class="profile-btn">
                <img alt="" src="assets/img/about.jpg" style="width:100%; height:100%;">
                <div class="mask">
                </div>
                <div class="heading">
                    <i class="ion-ios-people-outline hidden-xs"></i>
                    <h2>Profile</h2>
                </div>
            </div>
            
            <!-- Single Navigation Menu Button -->
            
            <div class="portfolio-btn">
                <img alt="" src="assets/img/portfolio.jpg">
                <div class="mask">
                </div>
                <div class="heading">
                    <i class="ion-ios-briefcase-outline hidden-xs"></i>
                    <h2>Portfolio</h2>
                </div>
            </div>
            
            <!-- Single Navigation Menu Button [ END ]  -->
            
            <div class="service-btn">
                <img alt="" src="assets/img/service.jpg">
                <div class="mask">
                </div>
                <div class="heading">
                    <i class="ion-ios-lightbulb-outline hidden-xs"></i>
                    <h2>Services</h2>
                </div>
            </div>
            
            <!-- Single Navigation Menu Button [ END ]  -->
            
            <div class="contact-btn">
                <img alt="" src="assets/img/contact.jpg">
                <div class="mask">
                </div>
                <div class="heading">
                    <i class="ion-ios-chatboxes-outline hidden-xs"></i>
                    <h2>Contact</h2>
                </div>
            </div>
            
            <!-- Single Navigation Menu Button [ END ]  -->
            
        </div>
    </div>
    
    <!--
    4 ) Close Button
    -->
    
    <div class="close-btn"></div>
    
    <!--
    5 ) Profile Page
    -->
    
    <div class="profile-page container-fluid page">
        <div class="row">
            <!--( a ) Profile Page Fixed Image Portion -->
            
            <div class="image-container col-md-3 col-sm-12">
                <div class="mask">
                </div>
                <div class="main-heading">
                    <h1>Profile</h1>
                </div>
            </div>
            
            <!--( b ) Profile Page Content -->
            
            <div class="content-container col-md-9 col-sm-12">
                
                <!--( A ) Story of Profile -->
                
                <div class="clearfix">
                    <h2 class="small-heading">Your Profile</h2>
                    <div class="alert alert-warning" style="color: #FFF;width:90%;margin-left:50px;margin-top:-20px;background-color:#535E6E;border-color:#999C8D;font-size:13pt;">
                <div class="row">
                <div class="col-md-12">
                        <div class="name">&nbsp;&nbsp;&nbsp;&nbsp;{{ $user[0]->first_name }} {{ $user[0]->last_name }}
                        <div class="act"><a href="{{ url('/editprofile/'.$user[0]->id) }}">
                        <i class="fa fa-pencil-square-o" style="color:#fff;"></i></a></div></div><br>
                        <div><center><img class="pp" src="{{ url('images/'.$user[0]->profile_photo) }}" /></center></div>
                        <br><br><br>
                        <div class="about">
                            <table style="width:100%;">
                            <tr>
                            <td>Gender</td>
                            <td class="g"><i class="fa fa-mars-stroke"></i> {{$user[0]->gender }}</td>
                            </tr>
                            <tr>
                            <td>Email</td>
                            <td class="e"><i class="fa fa-inbox"></i> {{ $user[0]->email }} </td>
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

          
                
                <!--( D ) Footer -->
                
                <div class="footer clearfix">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="copyright">Copyright &copy; 2015 
                                        <a href="#">kingTASK</a>
                                    </p>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="author">
                                        Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                    </p>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    



    <div class="portfolio-page container-fluid page">

        <div class="row">

            <!--( a ) Portfolio Page Fixed Image Portion -->
            
            <div class="image-container col-md-3 col-sm-12">
                <div class="mask">
                </div>
                <div class="main-heading">
                    <h1>Portfolio</h1>
                </div>
            </div>

            <!--( b ) Portfolio Page Content -->
            
            <div class="content-container col-md-9 col-sm-12">
                
                <!--( A ) Portfolio -->
                
                <div class="portfolio clearfix full-height">
                    <h2 class="small-heading">PORTFOLIO</h2>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="project-container">
                                <div class="row">
                                    <div class="project-controls">
                                        <button class="filter" data-filter="all">All</button>
                                        <button class="filter" data-filter=".graphic-design">Graphic Design</button>
                                        <button class="filter" data-filter=".web-design">Web Designs</button>
                                        <button class="filter" data-filter=".app-development">App Development</button>
                                    </div>
                                    
                                    <!-- Portfolio Control Buttons [ END ] -->
                                    
                                    <div id="projects" class="projet-items clearfix">
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_1.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-1" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-1">
                                            <img alt="" src="assets/img/portfolio/image_1.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_2.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-2" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-2">
                                            <img alt="" src="assets/img/portfolio/image_2.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_3.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-3" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-3">
                                            <img alt="" src="assets/img/portfolio/image_3.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_4.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-4" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-4">
                                            <img alt="" src="assets/img/portfolio/image_4.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_5.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-5" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-5">
                                            <img alt="" src="assets/img/portfolio/image_5.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_6.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-6" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-6">
                                            <img alt="" src="assets/img/portfolio/image_6.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_7.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-7" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-7">
                                            <img alt="" src="assets/img/portfolio/image_7.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix graphic-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_8.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-8" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-8">
                                            <img alt="" src="assets/img/portfolio/image_8.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix app-development">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_9.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-9" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-9">
                                            <img alt="" src="assets/img/portfolio/image_9.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                        
                                        
                                        <!-- Portfolio Image -->
                                        
                                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix web-design">
                                            <div class="project">
                                                <img src="assets/img/portfolio/thumbs/image_10.jpg" alt="">
                                                <div class="ovrly">
                                                </div>
                                                <div class="buttons">
                                                    <a href="#" class="fa fa-link"></a>
                                                    <a href="#portfolio-10" class="fa fa-search show-popup"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Popup Content -->
                                        
                                        <div class="pop-up-box" id="portfolio-10">
                                            <img alt="" src="assets/img/portfolio/image_10.jpg" class=" hidden-xs">
                                            <div class="popup-content">
                                                <h3>PROJECT NAME</h3>
                                                <p>
                                                    Quisque in tempor sapien, et cursus neque. Nunc pulvinar diam ac dapibus mollis. Etiam id iaculis lorem. Donec bibendum volutpat ante, eu consequat nisi suscipit at. Etiam interdum augue dolor, id auctor felis volutpat sed. Phasellus id ex ultrices, tempus leo eget, volutpat diam. In sit amet magna faucibus, molestie nisi in, hendrerit libero. Morbi auctor velit sagittis, elementum lorem eget, imperdiet nisl.
                                                </p>
                                                <a href="#">PREVIEW</a>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Portfolio Item [ END ] -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
                
                <!-- Footer -->
                
                <div class="footer clearfix">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="copyright">Copyright &copy; 2015 
                                        <a href="#">kingTASK</a>
                                    </p>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="author">
                                        Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                    </p>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    <!--
    7 ) Service Page
    -->
    
    <div class="service-page container-fluid page">
        <div class="row">
            <!--( a ) Portfolio Page Fixed Image Portion -->
            
            <div class="image-container col-md-3 col-sm-12">
                <div class="mask">
                </div>
                <div class="main-heading">
                    <h1>Service</h1>
                </div>
            </div>
            
            <!--( b ) Portfolio Page Content -->
            
            <div class="content-container col-md-9 col-sm-12">
                
                <!--( A ) Portfolio -->
                
                <div class="clearfix">
                    <h2 class="small-heading">WHAT WE DO BEST</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="row">

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="faq-desc-item">
                                        <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                            <div class="flipper">
                                                <div class="front">
                                                    <i class="fa fa-mobile"></i>
                                                    <h5>Applications</h5>
                                                </div>
                                                <div class="back">
                                                    <h5>Applications</h5>
                                                    <p>Mozilla Web Developer, MooTools &amp; jQuery Consultant, MooTools Core Developer, Javascript Fanatic, CSS Tinkerer, PHP Hacker, and web lover.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="faq-desc-item">
                                        <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                            <div class="flipper">
                                                <div class="front">
                                                    <i class="fa fa-lightbulb-o"></i>
                                                    <h5>Productions</h5>
                                                </div>
                                                <div class="back">
                                                    <!-- <i class="fa fa-lightbulb-o fa-fw"></i> -->
                                                    <h5>Productions</h5>
                                                    <p>Mozilla Web Developer, MooTools &amp; jQuery Consultant, MooTools Core Developer, Javascript Fanatic, CSS Tinkerer, PHP Hacker, and web lover.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="faq-desc-item">
                                        <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                            <div class="flipper">
                                                <div class="front">
                                                    <i class="fa fa-paint-brush"></i>
                                                    <h5>Web Designing</h5>
                                                </div>
                                                <div class="back">
                                                    <!-- <i class="fa fa-paint-brush fa-fw"></i> -->
                                                    <h5>Web Designing</h5>
                                                    <p>Mozilla Web Developer, MooTools &amp; jQuery Consultant, MooTools Core Developer, Javascript Fanatic, CSS Tinkerer, PHP Hacker, and web lover.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="clearfix">
                    <h2 class="small-heading">CHOSSE YOUR PLAN</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                    <div class="price-box">
                                        <p class="pricing-catagory-name">Basic</p>
                                        <p><span class="price">$19</span>/Month</p>
                                        <ul>
                                            <li>15 Projects</li>
                                            <li>30 GB Storage</li>
                                            <li class="unavailabe">Unlimited Data Transfer</li>
                                            <li class="unavailabe">50 GB Bandwith</li>
                                            <li class="unavailabe">Enhanced Security</li>
                                        </ul>

                                        <a href="#" class="btn">learn more</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                    <div class="price-box">
                                        <p class="pricing-catagory-name">Business</p>
                                        <p><span class="price">$29</span>/Month</p>
                                        <ul>
                                            <li>15 Projects</li>
                                            <li>30 GB Storage</li>
                                            <li>Unlimited Data Transfer</li>
                                            <li class="unavailabe">50 GB Bandwith</li>
                                            <li class="unavailabe">Enhanced Security</li>
                                        </ul>

                                        <a href="#" class="btn">learn more</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                    <div class="price-box">
                                        <p class="pricing-catagory-name">Premium</p>
                                        <p><span class="price">$39</span>/Month</p>
                                        <ul>
                                            <li>15 Projects</li>
                                            <li>30 GB Storage</li>
                                            <li>Unlimited Data Transfer</li>
                                            <li>50 GB Bandwith</li>
                                            <li class="unavailabe">Enhanced Security</li>
                                        </ul>

                                        <a href="#" class="btn">learn more</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 price-catagory">
                                    <div class="price-box">
                                        <p class="pricing-catagory-name">Ultimate</p>
                                        <p><span class="price">$49</span>/Month</p>
                                        <ul>
                                            <li>15 Projects</li>
                                            <li>30 GB Storage</li>
                                            <li>Unlimited Data Transfer</li>
                                            <li>50 GB Bandwith</li>
                                            <li>Enhanced Security</li>
                                        </ul>

                                        <a href="#" class="btn">learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: pricing section -->


                <div class="clearfix full-height">
                    <h2 class="small-heading">OUR VALUABLE CLIENTS</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div id="sponsor-list" class="owl-carousel owl-theme">

                                <div class="item">
                                    <img src="assets/img/sponsor1.png" alt="sponsor1" class="center-block" style="width: 165px; height: 127px;">
                                </div>

                                <div class="item">
                                    <img src="assets/img/sponsor2.png" alt="sponsor2" class="center-block" style="width: 165px; height: 127px;">
                                </div>

                                <div class="item">
                                    <img src="assets/img/sponsor3.png" alt="sponsor3" class="center-block" style="width: 165px; height: 127px;">
                                </div>

                                <div class="item">
                                    <img src="assets/img/sponsor4.png" alt="sponsor4" class="center-block" style="width: 165px; height: 127px;" >
                                </div>

                                <div class="item">
                                    <img src="assets/img/sponsor5.png" alt="sponsor5" class="center-block" style="width: 165px; height: 127px;">
                                </div>

                                <div class="item">
                                    <img src="assets/img/sponsor6.png" alt="sponsor6" class="center-block" style="width: 165px; height: 127px;">
                                </div>

                            </div> <!--  / #sponsor-list /.owl-carousel -->
                        </div>
                    </div>
                </div>
                <!-- end: valuable clients -->




                <!-- Footer -->
                
                <div class="footer clearfix">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="copyright">Copyright &copy; 2015 
                                        <a href="#">kingTASK</a>
                                    </p>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="author">
                                        Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                    </p>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    
    <!--
    8 ) Contact Page
    -->
    
    <div class="contact-page container-fluid page">
        <div class="row">
            <!--( a ) Contact Page Fixed Image Portion -->
            
            <div class="image-container col-md-3 col-sm-12">
                <div class="mask">
                </div>
                <div class="main-heading">
                    <h1>contact</h1>
                </div>
            </div>
            
            <!--( b ) Contact Page Content -->
            
            <div class="content-container col-md-9 col-sm-12">
                
                <!--( A ) Contact Form -->
                
                <div class="clearfix full-height">
                    <h2 class="small-heading">COME IN TOUCH</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="data">
                                            <i class="fa fa-map-marker"></i>
                                            <span>
                                                House -3, Road-2, Block - F, <br>
                                                 Akhalia Ghat R/A, Sylhet. <br>
                                            </span>
                                        </div>

                                        <div class="data">
                                            <i class="fa fa-envelope"></i>
                                            <span>
                                                hello@boots4.com
                                            </span>
                                        </div>

                                        <div class="data">
                                            <i class="fa fa-phone"></i>
                                            <span>
                                                +880 12345 - 67890
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="map-canvas"></div>
                                    </div>
                                </div>
                                    
                            </div>

                            <div class="row">
                                <form  id="contactForm" class="contact-form" method="post" action="php/contact-form.php">
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <textarea name="massage" type="text" class="form-control" id="message" rows="5" required="required" placeholder="  Message"></textarea>
                                    </div>
                                    
                                    <div class="col-md-4 col-xs-12">
                                        <input type="submit" id="cfsubmit" class="btn btn-send" value="Say Hello">
                                    </div>
                                    <div id="contactFormResponse" class="col-md-8 col-xs-12"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ( D ) Footer -->
                
                <div class="footer clearfix">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="copyright">Copyright &copy; 2015 
                                        <a href="#">kingTASK</a>
                                    </p>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p class="author">
                                        Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                    </p>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--  
    9 ) Javascript
    - -->
    
    <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.popup.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="assets/js/contact.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>