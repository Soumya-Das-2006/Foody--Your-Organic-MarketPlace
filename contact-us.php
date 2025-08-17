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
    <meta name="description" content="Contact our organic food team for inquiries, support, or partnership opportunities">
    <meta name="author" content="">
    <meta name="keywords" content="contact organic food, customer support, farm inquiries, organic partnership">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <title>Contact Us | <?php echo htmlentities($_SESSION['compname']);?></title>
    <style>
        /* Contact Page Styles */
        .contact-page {
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
        
        /* Contact Info Section - Kept original style */
        .contact-info {
            padding: 30px;
            background-color: rgb(30, 240, 30);
            color: white;
            font-weight: bold;
            border-radius: 10px;
            height: 100%;
        }
        
        h4 {
            color: rgb(0, 0, 0);
            font-weight: bold;
        }

        .contact-info h3 {
            color: white;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .contact-info h3:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: white;
        }
        
        .contact-info p {
            margin-bottom: 20px;
        }
        
        .contact-icon {
            margin-right: 10px;
            color: rgb(0, 47, 255);
        }
        .social-links {
            margin-top: 30px;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .social-links a:hover {
            background-color: white;
            color: #2a7f2a;
        }

        
        /* Contact Form Section - Kept original style */
        .contact-form {
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }
        
        .form-control {
            height: 50px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        textarea.form-control {
            height: auto;
            min-height: 150px;
        }
        
        .btn-submit {
            background-color: #2a7f2a;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-submit:hover {
            background-color: #1e5a1e;
            transform: translateY(-2px);
        }
        
        /* Modified Full Width Map Section */
        .full-width-map {
            width: 100%;
            margin: 40px 0;
            position: relative;
            left: 0;
        }
        
        .map-container-wrapper {
            width: 100vw;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .map-container {
            height: 400px;
            width: 100%;
            max-width: 1200px; /* Adjust this to match your nav width */
            margin: 0 auto;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .map-heading {
            text-align: center;
            margin-bottom: 20px;
        }
        
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .contact-info {
                margin-bottom: 30px;
            }
            
            .page-header h1 {
                font-size: 28px;
            }
            
            .map-container {
                max-width: 100%;
                padding: 0 15px;
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
                    <div class="contact-page">
                        <!-- Page Header -->
                        <div class="page-header">
                            <h1>Get In Touch</h1>
                            <p class="lead">We'd love to hear from you! Contact us with questions, feedback, or partnership inquiries.</p>
                        </div>
                        
                        <div class="row">
                            <!-- Contact Info - Original Layout -->
                            <div class="col-md-5">
                                <div class="contact-info">
                                    <h3><b>Contact Information</b></h3>
                                    <h4>Office Address</h4>
                                    <p><i class="fa fa-map-marker contact-icon"></i> 123 Organic Farm Road, Green Valley, Kolkata-700 003, West Bengal, India</p>
                                    <h4>Call Us</h4>
                                    <p><i class="fa fa-phone contact-icon"></i> +91 98765 43210</p>
                                    <h4>Email Us</h4>
                                    <p><i class="fa fa-envelope contact-icon"></i> contact@<?php echo strtolower(htmlentities($_SESSION['compname'])); ?>.com</p>
                                    <h4>Opening Time</h4>
                                    <p><i class="fa fa-clock-o contact-icon"></i> Monday-Saturday: 9:00 AM - 7:00 PM</p>
                                    
                                    <div class="social-links">
                                        <h4>Follow Us</h4>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contact Form - Original Layout -->
                            <div class="col-md-7">
                                <div class="contact-form">
                                    <h3><b>Send Us a Message</b></h3>
                                    <p>Thank you for reaching out! Your message has been received and we’ll get back to you as soon as possible.</p><br/>
                                    <form action="contact-process.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modified Full Width Map Section -->
        <div class="full-width-map">
            <div class="container">
                <h3 class="map-heading"><b>Our Location</b></h3>
            </div>
            <div class="map-container-wrapper">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.33439927742!2d88.34735275!3d22.53542735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1737608593941!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
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