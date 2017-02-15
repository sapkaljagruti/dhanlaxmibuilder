<!DOCTYPE html>
<html>

    <!-- Head -->
    <head>

        <title>Dhanlaxmi Builder</title>

        <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="charset=utf-8">
        <meta name="keywords" content="">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Meta-Tags -->

        <!-- Custom-Stylesheet-Links -->
        <!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css" media="all">
        <!-- Index-Page-CSS --> <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" media="all">
        <!-- Portfolio-CSS --> 	<link rel="stylesheet" href="<?php echo base_url('assets/css/smoothbox.css'); ?>" type="text/css" media="all">
        <!-- //Custom-Stylesheet-Links -->

        <!-- Fonts -->
        <!-- Body -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" type="text/css" media="all">
        <!-- Logo -->	 <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Neuton:300,400,700,800" type="text/css" media="all">
        <!-- Heading --> <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" type="text/css" media="all">
        <!-- //Fonts -->

        <!-- Font-Awesome-File-Links -->
        <!-- CSS --> <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>" type="text/css" media="all">
        <!-- TTF --> <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-webfont.ttf'); ?>" type="text/css" media="all">
        <!-- //Font-Awesome-File-Links -->

        <!-- Supportive-JavaScript --> <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/logo.png'); ?>" />
    </head>
    <!-- //Head -->



    <!-- Body -->
    <body>

        <!-- Header -->
        <div class="header-aits" id="home">

            <div class="header-info-w3ls">
                <div class="top-contact-aits-w3l container">
                    <p>Call us directly @ <a href="tel:+919825134741"> +919825134741 </a> or mail us to <a class="mail" href="mailto:info.dhanlaxmibulider@gmail.com">info.dhanlaxmibulider@gmail.com</a> between 10:00 and 16:00</p>
                </div>

                <!-- Navigation -->
                <nav class="navbar container navbar-inverse navbar-default">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <div class="logo">
                            <a class="navbar-brand logo-w3l button" href="<?php echo site_url('/') ?>">DHANLAXMI BUILDER</a>
                            <!--<a class="navbar-brand logo-w3l button" href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></a>-->
                        </div>
                        <!-- //Logo -->
                    </div>

                    <div id="navbar" class="navbar-collapse navbar-right collapse">
                        <ul class="nav navbar-nav navbar-right cross-effect" id="cross-effect">
                            <li><a class="cross-effect" href="<?php echo site_url('/') ?>">Home</a></li>
                            <li><a class="cross-effect" href="<?php echo site_url('about') ?>">About</a></li>
                            <li><a class="cross-effect" href="<?php echo site_url('projects') ?>">Projects</a></li>
                            <li><a class="cross-effect" href="<?php echo site_url('contact') ?>">Contact</a></li>
                        </ul>
                    </div><!-- //Navbar-Collapse -->

                </nav>
                <!-- //Navigation -->

            </div>



            <?php
            if ($show_main_sliders == 1) {
                $this->load->view('main_sliders');
            }
            ?>

        </div>
        <!-- //Header -->