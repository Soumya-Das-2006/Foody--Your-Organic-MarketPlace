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
    <meta name="description" content="Discover what makes our organic food marketplace unique - from farm-fresh quality to sustainable delivery">
    <meta name="author" content="">
    <meta name="keywords" content="organic food features, farm fresh delivery, sustainable shopping, organic benefits">
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
    <title>Our Features | <?php echo htmlentities($_SESSION['compname']);?></title>
    <style>
        /* Features Page Styles */
        .features-page {
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
        
        /* Hero Feature Section */
        .hero-feature {
            padding: 40px 0;
            background-color: #f9f9f9;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .hero-feature img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Features Grid Section */
        .features-grid {
            padding: 40px 0;
            margin-bottom: 40px;
        }
        
        .features-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            font-size: 50px;
            color: #2a7f2a;
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            color: #2a7f2a;
        }
        
        /* How It Works Section */
        .how-it-works {
            padding: 60px 0;
            background-color: #f9f9f9;
            margin-bottom: 40px;
        }
        
        .steps-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
            position: relative;
        }
        
        .step-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            width: 100%;
            max-width: 250px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .step-number {
            width: 50px;
            height: 50px;
            background-color: #2a7f2a;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            margin: 0 auto 20px;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .steps-container:before {
                display: none;
            }
            
            .page-header h1 {
                font-size: 28px;
            }
            
            .feature-card {
                max-width: 100%;
            }
        }
        
        /* Animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
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
                    <div class="features-page">
                        <!-- Page Header -->
                        <div class="page-header">
                            <h1>Why Choose Our Organic Marketplace</h1>
                            <p class="lead">Discover what makes <?php echo htmlentities($_SESSION['compname']);?> different</p>
                        </div>
                        
                        <!-- Hero Feature Section -->
                        <section class="hero-feature">
                            <div class="container">
                                <img src="assets/images/sliders/hero-organic.jpg" alt="Fresh Organic Produce" class="pulse">
                                <h2>Farm-Fresh Quality You Can Taste</h2>
                                <p class="lead">We connect you directly with organic farmers, cutting out the middleman to deliver fresher, more flavorful produce at fair prices.</p>
                            </div>
                        </section>
                        
                        <!-- Features Grid Section -->
                        <section class="features-grid">
                            <div class="container">
                                <h2 class="section-title text-center">Our Key Features</h2>
                                <div class="features-container">
                                    <!-- Feature 1 -->
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fa fa-certificate"></i>
                                        </div>
                                        <h3>Certified Organic</h3>
                                        <p>Every product in our marketplace is certified organic by USDA standards. We verify all certifications so you don't have to.</p>
                                    </div>
                                    
                                    <!-- Feature 2 -->
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <h3>Harvested Fresh</h3>
                                        <p>Produce is picked at peak ripeness and shipped directly to you, often within 24 hours of harvest.</p>
                                    </div>
                                    
                                    <!-- Feature 3 -->
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fa fa-leaf"></i>
                                        </div>
                                        <h3>Sustainable Packaging</h3>
                                        <p>We use 100% biodegradable or recyclable packaging materials to minimize environmental impact.</p>
                                    </div>
                                    
                                    <!-- Feature 4 -->
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <h3>Carbon-Neutral Delivery</h3>
                                        <p>All shipments are carbon offset through our partnership with environmental organizations.</p>
                                    </div>
                                    
                                    <!-- Feature 5 -->
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <h3>Fair Prices</h3>
                                        <p>By working directly with farmers, we cut out middlemen to offer you better prices while paying farmers fairly.</p>
                                    </div>
                                    
                                    <!-- Feature 6 -->
                                    <div class="feature-card">
                                        <div class="feature-icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <h3>Health Guarantee</h3>
                                        <p>Not satisfied with your order? We offer a 100% satisfaction guarantee on all our products.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- How It Works Section -->
                        <section class="how-it-works">
                            <div class="container">
                                <h2 class="section-title text-center">How Our Service Works</h2>
                                <div class="steps-container">
                                    <!-- Step 1 -->
                                    <div class="step-card">
                                        <div class="step-number">1</div>
                                        <h3>Browse Selection</h3>
                                        <p>Explore our seasonal offerings from trusted organic farms across the country.</p>
                                    </div>
                                    
                                    <!-- Step 2 -->
                                    <div class="step-card">
                                        <div class="step-number">2</div>
                                        <h3>Place Order</h3>
                                        <p>Select your favorite organic products and choose delivery frequency.</p>
                                    </div>
                                    
                                    <!-- Step 3 -->
                                    <div class="step-card">
                                        <div class="step-number">3</div>
                                        <h3>Farm Harvests</h3>
                                        <p>Farmers harvest your items at peak freshness, often the same day as shipping.</p>
                                    </div>
                                    
                                    <!-- Step 4 -->
                                    <div class="step-card">
                                        <div class="step-number">4</div>
                                        <h3>Fast Delivery</h3>
                                        <p>Receive your order within 1-3 days in eco-friendly packaging.</p>
                                    </div>
                                    
                                    <!-- Step 5 -->
                                    <div class="step-card">
                                        <div class="step-number">5</div>
                                        <h3>Enjoy Freshness</h3>
                                        <p>Experience the taste and quality difference of truly fresh organic food.</p>
                                    </div>
                                </div>
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