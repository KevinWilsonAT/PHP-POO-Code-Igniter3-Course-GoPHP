<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/#">
    <title>Document</title>
</head>
<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">    
                    <ul class="top_nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>">About</a></li>
                        <li><a href="<?php echo base_url(); ?>">Contact</a></li>
                        <?php
                            if ($this->session->has_userdata("login_true")) {
                        ?>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome to <?php echo $this->session->userdata("username"); ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>user">My Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>user/edit">Edit My Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>user/change_password">Change Password</a></li>
                                <li><a href="<?php echo base_url(); ?>user/avatar">Upload Avatar</a></li>
                                <li><a href="<?php echo base_url(); ?>user/logout">Logout</a></li>
                            </ul>
                            
                        <?php
                            }
                            else {
                        ?>

                                <li><a href="<?php echo base_url(); ?>register">Register</a></li>
                                <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                        <?php
                            }
                        ?>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="header_top_right">
                <p>Friday, 05/12/2045</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                <div class="logo_area"><a href="index.html" class="logo"><img src="<?php echo base_url(); ?>#" alt="#"></a></div>
                <div class="add_banner"><a href="index.html" class="logo"><img src="<?php echo base_url(); ?>#" alt="#"></a></div>
            </div>
        </div>
    </div>
</header>
<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=""></button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li><a href="#">Technology</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role=""></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Nokia</a></li>
                        <li><a href="#">Walton Mobile</a></li>
                        <li><a href="#">Sympony</a></li>
                    </ul>
                </li>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="pages/contact.html">Contact Us</a></li>
                <li><a href="pages/404.html">404 page</a></li>
            </ul>
        </div>
    </nav>
</section>