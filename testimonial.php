<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Read testimonials from our satisfied customers and see the organizations that trust our organic food products">
    <meta name="author" content="">
    <meta name="keywords" content="organic food testimonials, customer reviews, trusted organic brands">
    <meta name="robots" content="all">
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <title>Customer Testimonials | <?php echo htmlentities($_SESSION['compname']);?></title>
    <style>
        /* Testimonials Page Styles */
        .testimonials-page {
            padding: 30px 0;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .page-header h1 {
            color: #2a7f2a;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 40px 0;
            background-color: #f9f9f9;
            margin-bottom: 40px;
        }
        
        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            width: 100%;
            max-width: 350px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .testimonial-card:before {
            content: """;
            font-family: Georgia, serif;
            font-size: 80px;
            color: #e0e0e0;
            position: absolute;
            top: 10px;
            left: 10px;
            line-height: 1;
        }
        
        .testimonial-content {
            margin-bottom: 20px;
            font-style: italic;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid #2a7f2a;
        }
        
        .author-info h4 {
            margin: 0;
            color: #2a7f2a;
            font-weight: 600;
        }
        
        .author-info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #777;
        }
        
        
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            /* .brand-slider .item {
                flex: 0 0 calc(25% - 30px);
                max-width: calc(25% - 30px);
            } */
        }
        
        @media (max-width: 768px) {
            /* .brand-slider .item {
                flex: 0 0 calc(33.333% - 30px);
                max-width: calc(33.333% - 30px);
            }
             */
            .testimonial-card {
                max-width: 100%;
            }
        }
        
        @media (max-width: 576px) {
            /* .brand-slider .item {
                flex: 0 0 calc(50% - 30px);
                max-width: calc(50% - 30px);
            } */
            
            .page-header h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">
        <?php include('includes/top-header.php');?>
        <?php include('includes/main-header.php');?>
        <?php include('includes/menu-bar.php');?>
    </header>
    <!-- ============================================== HEADER : END ============================================== -->

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <?php include('includes/side-menu.php');?>
                </div>
                
                <!-- Main Content -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <div class="testimonials-page">
                        <!-- Page Header -->
                        <div class="page-header">
                            <h1>Customer Testimonials</h1>
                            <p class="lead">Hear what our customers say about our organic products</p>
                        </div>
                        
                        <!-- Testimonials Section -->
                        <section class="testimonials-section">
                            <div class="container">
                                <div class="testimonial-container">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <p>I've been buying organic produce from this website for over a year now and the quality is consistently excellent. The vegetables are fresh, flavorful, and last longer than supermarket produce.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson" class="author-img">
                                            <div class="author-info">
                                                <h4>Sarah Johnson</h4>
                                                <p>Regular Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Testimonial 2 -->
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <p>The delivery is always on time and the packaging is eco-friendly. I love that I can trust the organic certification of all their products. My family's health has improved since we switched.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="author-img">
                                            <div class="author-info">
                                                <h4>Michael Chen</h4>
                                                <p>Health Coach</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Testimonial 3 -->
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <p>As a restaurant owner, finding reliable organic suppliers was challenging until I discovered this website. Their bulk ordering options and consistent quality have been game-changers.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emma Rodriguez" class="author-img">
                                            <div class="author-info">
                                                <h4>Emma Rodriguez</h4>
                                                <p>Restaurant Owner</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <p>As a restaurant owner, finding reliable organic suppliers was challenging until I discovered this website. Their bulk ordering options and consistent quality have been game-changers.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emma Rodriguez" class="author-img">
                                            <div class="author-info">
                                                <h4>Emma Rodriguez</h4>
                                                <p>Restaurant Owner</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <p>As a restaurant owner, finding reliable organic suppliers was challenging until I discovered this website. Their bulk ordering options and consistent quality have been game-changers.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emma Rodriguez" class="author-img">
                                            <div class="author-info">
                                                <h4>Emma Rodriguez</h4>
                                                <p>Restaurant Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Brands Section -->
                        <section class="brands-section">
                            <div class="container">
                                <!-- <div id="brands-carousel" class="logo-slider">
                                    <h3 class="section-title">Our Certifications & Partners</h3>
                                    
                                </div> -->
                                <?php include('includes/brands-slider.php');?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    
    <!-- JavaScripts -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>