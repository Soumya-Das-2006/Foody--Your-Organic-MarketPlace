<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <?php 
            $sql=mysqli_query($con,"select id,categoryName from category");
            while($row=mysqli_fetch_array($sql)) {
            ?>
            <li class="dropdown menu-item">
                <a href="category.php?cid=<?php echo $row['id'];?>" class="dropdown-toggle">
                    <i class="icon fa fa-desktop fa-fw"></i>
                    <?php echo $row['categoryName'];?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</div>

<style>
    /* Side Menu Container */
    .side-menu.outer-bottom-xs {
        background: #fff;
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    /* Menu Head */
    .side-menu .head {
        padding: 12px 15px;
        background: #e74c3c; /* Your theme color */
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        border-radius: 3px 3px 0 0;
    }

    .side-menu .head i {
        margin-right: 8px;
    }

    /* Navigation Items */
    .side-menu .nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .side-menu .nav > li {
        position: relative;
        border-bottom: 1px solid #f5f5f5;
    }

    .side-menu .nav > li:last-child {
        border-bottom: none;
    }

    /* Menu Links */
    .side-menu .nav > li > a {
        display: block;
        padding: 12px 15px;
        color: #333;
        font-size: 13px;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
    }

    /* Forward arrow indicator */
    .side-menu .nav > li > a:after {
        content: "\f105"; /* FontAwesome chevron-right */
        font-family: 'FontAwesome';
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
    }

    /* Hover Effects */
    .side-menu .nav > li > a:hover {
        background-color: #f9f9f9;
        color: #e74c3c;
        padding-left: 20px;
    }
    .side-menu .nav > li > a:hover:after {
        color: #e74c3c;
    }

    /* Active State */
    .side-menu .nav > li.active > a {
        background-color: #f5f5f5;
        color: #e74c3c;
        font-weight: 600;
    }

    /* Mobile Responsiveness */
    @media (max-width: 767px) {
        .side-menu {
            margin-bottom: 15px;
        }
    }
</style>

<script>
    $(document).ready(function() {
        // Make category links clickable
        $('.side-menu .nav > li > a').on('click', function(e) {
            // Remove this if you want links to work normally
            // e.preventDefault();
            
            // For dropdown functionality (if needed later)
            var $parent = $(this).parent();
            $('.side-menu .menu-item').not($parent).removeClass('open');
            $parent.toggleClass('open');
            
            // If you want the links to work immediately:
            window.location = $(this).attr('href');
        });
    });
</script>