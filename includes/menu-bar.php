<!-- Navigation Bar -->
<div class="header-nav animate-dropdown" style="background-color:rgb(151, 245, 163);">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:black;"></span>
                    <span class="icon-bar" style="background-color:black;"></span>
                    <span class="icon-bar" style="background-color:black;"></span>
                </button>
            </div>

            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav" style="font-size:16px; display: flex; align-items: center;">
                            <li class="active dropdown yamm-fw">
                                <a href="index.php" style="color:black; padding: 15px 18px;">
                                    <i class="fas fa-home"></i> Home
                                </a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="about-us.php" style="color:black; padding: 15px 18px;">
                                    <i class="fas fa-info-circle"></i> About Us
                                </a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black; padding: 15px 18px;">
                                    <i class="fas fa-shopping-basket"></i> Products
                                </a>
                                <ul class="dropdown-menu">
                                    <?php 
                                    $sql = mysqli_query($con, "SELECT id, categoryName FROM category LIMIT 10");
                                    while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                        <li>
                                            <a href="category.php?cid=<?php echo $row['id']; ?>" style="color:black;">
                                                <?php echo htmlentities($row['categoryName']); ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li class="dropdown yamm">
                                <a href="features.php" style="color:black; padding: 15px 18px;">
                                    <i class="fas fa-star"></i> Our Features
                                </a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="testimonial.php" style="color:black; padding: 15px 18px;">
                                    <i class="fas fa-comment"></i> Our Testimonials
                                </a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="contact-us.php" style="color:black; padding: 15px 18px;">
                                    <i class="fas fa-envelope"></i> Contact Us
                                </a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="admin/" class="admin-btn" style="padding: 15px 18px;">
                                    <i class="fas fa-lock"></i> Admin Login
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add required libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Navigation CSS -->
<style>
    .header-nav {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar-nav {
        margin: 0;
        padding-left: 0;
        list-style: none;
        font-size: 16px;
        font-weight: 500;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-nav > li {
        display: inline-block;
    }

    .navbar-nav > li > a {
        display: block;
        color: black;
        transition: all 0.3s ease;
        padding: 15px 18px !important;
        text-decoration: none;
    }

    .nav > li > a i {
        margin-right: 6px;
        width: 16px;
        font-size: 14px;
        text-align: center;
    }

    .nav > li > a:hover,
    .dropdown-menu > li > a:hover {
        background-color: rgb(0, 190, 44) !important;
        color: white !important;
    }

    .dropdown-menu {
        background-color: #fff;
        min-width: 160px;
        padding: 4px 0;
        border-radius: 0;
        border: 1px solid #ccc;
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        font-size: 14px;
        font-weight: normal;
    }

    .dropdown-menu > li > a {
        color: black !important;
        padding: 10px 20px !important;
        display: block;
        transition: all 0.2s ease;
    }

    .navbar-nav > li.active > a {
        background-color: rgb(0, 190, 44) !important;
        color: white !important;
        font-weight: 600;
    }

    .admin-btn {
        background-color: red !important;
        color: white !important;
        border-radius: 4px;
        margin: 5px 10px 5px 10px;
        padding: 10px 14px !important;
        font-size: 14px;
        font-weight: 500;
    }

    .admin-btn:hover {
        background-color: darkred !important;
    }

    /* Responsive Styles */
    @media (max-width: 767px) {
        .navbar-nav {
            display: block;
            background-color: rgba(151, 245, 163, 0.95);
        }

        .navbar-nav > li {
            display: block;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .navbar-nav > li > a {
            padding: 12px 15px !important;
        }

        .dropdown-menu {
            display: none;
            position: static;
            float: none;
            width: 100%;
            margin-top: 0;
            background-color: rgba(255,255,255,0.95);
            border: none;
            box-shadow: none;
            padding-left: 15px;
        }

        .dropdown.open .dropdown-menu {
            display: block;
        }

        .dropdown-menu > li > a {
            padding: 10px 15px !important;
            color: black !important;
        }

        .navbar-nav .dropdown-toggle:after {
            content: " ▼";
            float: right;
            margin-right: 10px;
        }

        .navbar-nav .dropdown.open .dropdown-toggle:after {
            content: " ▲";
        }

        .admin-btn {
            margin-left: 15px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .navbar-toggle {
            margin-right: 0;
            border: none;
        }
    }
</style>

<!-- Navigation Script -->
<script>
$(document).ready(function() {
    // Bootstrap dropdown init
    $('.dropdown-toggle').dropdown();

    // Mobile menu toggle
    $('.navbar-toggle').click(function() {
        $('#mc-horizontal-menu-collapse').toggleClass('in');
    });

    // Mobile dropdown menu open/close (change slide toggle to dropdown toggle)
    $('.navbar-nav .dropdown > a').click(function(e) {
        if ($(window).width() <= 767) {
            e.preventDefault();
            $(this).parent().toggleClass('open');
            $(this).next('.dropdown-menu').toggle();
        }
    });

    // Highlight active menu item
    function setActiveMenuItem() {
        const fullPath = window.location.pathname;
        const currentPage = fullPath.split('/').pop().split('?')[0];
        const currentDir = fullPath.split('/')[1];

        $('.navbar-nav a').each(function() {
            const href = $(this).attr('href');
            if (!href || href === '#') return;

            const linkPage = href.split('/').pop().split('?')[0];
            const linkDir = href.split('/')[0];

            const isMatch =
                (currentPage === linkPage) ||
                (currentPage === '' && linkPage === 'index.php') ||
                (currentDir === 'admin' && href.startsWith('admin/'));

            if (isMatch) {
                $('.navbar-nav li').removeClass('active');
                $(this).parent().addClass('active');
            }
        });
    }

    setActiveMenuItem();
});
</script>
