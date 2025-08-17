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
    <meta name="description" content="Learn about our mission to provide the freshest organic food directly from farm to your table">
    <meta name="author" content="">
    <meta name="keywords" content="about organic food, our story, farm to table, organic mission">
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
    <title>About Us | <?php echo htmlentities($_SESSION['compname']);?></title>
    <style>
        /* About Us Page Styles */
        .about-page {
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
        
        /* Our Story Section */
        .our-story {
            padding: 40px 0;
            margin-bottom: 40px;
        }
        
        .story-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
        }
        
        .story-text {
            flex: 1;
            min-width: 300px;
        }
        
        .story-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        
        .story-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Mission Section */
        .mission-section {
            padding: 60px 0;
            background-color: #f9f9f9;
            margin-bottom: 40px;
        }
        
        .mission-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        
        .mission-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .mission-icon {
            font-size: 50px;
            color: #2a7f2a;
            margin-bottom: 20px;
        }
        
        /* Team Section */
        .team-section {
            padding: 40px 0;
            margin-bottom: 40px;
        }
        
        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        
        .team-member {
            text-align: center;
            max-width: 250px;
        }
        
        .member-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 3px solid #2a7f2a;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .story-content {
                flex-direction: column;
            }
            
            .story-text, .story-image {
                flex: 100%;
            }
            
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
                    <div class="about-page">
                        <!-- Page Header -->
                        <div class="page-header">
                            <h1>Our Organic Story</h1>
                            <p class="lead">Committed to bringing you the freshest organic produce straight from farm to table</p>
                        </div>
                        
                        <!-- Our Story Section -->
                        <section class="our-story">
                            <div class="container">
                                <div class="story-content">
                                    <div class="story-text">
                                        <h1 style="color:green;">How We Started ---</h1>
                                        <p>Founded in 2010, <?php echo htmlentities($_SESSION['compname']);?> began as a small family farm with a simple mission: to provide fresh, organic food to our local community. What started as a weekend farmers' market stand has grown into a trusted online organic marketplace serving thousands of customers nationwide.</p>
                                        <p>Our founder, John Greenfield, grew up on conventional farms but became disillusioned with industrial agriculture practices. After converting his family's farm to organic methods, he discovered not only better tasting produce but also the profound health and environmental benefits of organic farming.</p>
                                        <p>Today, we partner with over 200 certified organic farms across the country to bring you the widest selection of seasonal organic produce, pantry staples, and specialty items.</p>
                                    </div>
                                    <div class="story-image">
                                        <img src="assets\images\sliders\about.jpg" alt="Our farm family" height="350px" width="400px">
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Mission Section -->
                        <section class="mission-section">
                            <div class="container">
                                <h2 class="section-title text-center">Our Core Values</h2>
                                <div class="mission-cards">
                                    <!-- Mission 1 -->
                                    <div class="mission-card">
                                        <div class="mission-icon">
                                            <i class="fa fa-leaf"></i>
                                        </div>
                                        <h3>100% Organic</h3>
                                        <p>We guarantee all our products meet strict USDA organic standards. No synthetic pesticides, GMOs, or chemical fertilizers are ever used.</p>
                                    </div>
                                    
                                    <!-- Mission 2 -->
                                    <div class="mission-card">
                                        <div class="mission-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <h3>Farm to Table</h3>
                                        <p>Our short supply chain means produce is harvested at peak ripeness and delivered to you faster, retaining more nutrients and flavor.</p>
                                    </div>
                                    
                                    <!-- Mission 3 -->
                                    <div class="mission-card">
                                        <div class="mission-icon">
                                            <i class="fa fa-recycle"></i>
                                        </div>
                                        <h3>Sustainable Practices</h3>
                                        <p>We're committed to eco-friendly packaging, carbon-neutral shipping, and supporting regenerative farming methods.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Team Section -->
                        <section class="team-section">
                            <div class="container">
                                <h2 class="section-title text-center">Meet Our Team</h2>
                                <div class="team-members">
                                    <!-- Team Member 1 -->
                                    <div class="team-member">
                                        <img src="assets/images/team/john.jpg" alt="John Greenfield" class="member-image">
                                        <h3>Soumya Das</h3>
                                        <p>Founder & CEO</p>
                                    </div>
                                    
                                    <!-- Team Member 2 -->
                                    <div class="team-member">
                                        <img src="assets/images/team/sarah.jpg" alt="Rajib Das" class="member-image">
                                        <h3>Rajib Das</h3>
                                        <p>Head of Operations</p>
                                    </div>
                                    
                                    <!-- Team Member 3 -->
                                    <div class="team-member">
                                        <img src="assets/images/team/michael.jpg" alt="Uma Das" class="member-image">
                                        <h3>Uma Das</h3>
                                        <p>Organic Sourcing</p>
                                    </div>
                                    
                                    <!-- Team Member 4 -->
                                    <div class="team-member">
                                        <img src="assets/images/team/emma.jpg" alt="Soumik Das" class="member-image">
                                        <h3>Soumik Das</h3>
                                        <p>Customer Experience</p>
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