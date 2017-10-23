<?php $title = "Fire Safety Manager"; ?>
<?php include './header.php'; ?>
<script>
    $(document).ready(function () {
        $("#carouselFade").carousel({interval: 3000});
    });

</script>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTVBVRZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="header-bg">
                    <div class="row margin-top-bottom-10px">
                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                            <a href="index.php"><img class="img-responsive margin-top-bottom-10px" src="images/logo.png" alt="Logo"></a>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                            <nav class="navbar navbar-default header-navbar-custom margin-top-bottom-50px">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle navbar-toggle-custom collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbar-collapse-custom " id="header-navbar-collapse">
                                    <ul class="nav navbar-nav nav-custom">
                                        <li class="active"><a class="hvr-rectangle-out" href="index.php">Home</a></li>
                                        <li><a class="hvr-rectangle-out" href="company-profile.php">Company Profile</a></li>
                                        <li><a class="hvr-rectangle-out" href="services.php">Services</a></li>
                                        <li><a class="hvr-rectangle-out" href="career.php">Available Positions</a></li>
                                        <li><a class="hvr-rectangle-out" href="links.php">Links</a></li>
                                        <li><a class="hvr-rectangle-out" href="contact-us.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/slide1.jpg" class="img-responsive carousel-img" alt="Slider Image One" ></div>
                            <div class="item"><img src="images/slide2.jpg" class="img-responsive carousel-img" alt="Slider Image Two"></div>
                            <div class="item"><img src="images/slide3.jpg" class="img-responsive carousel-img" alt="Slider Image Three"></div>
                            <div class="item"><img src="images/slide4.jpg" class="img-responsive carousel-img" alt="Slider Image Four"></div>
                        </div>

                        <!--Indicators--> 
                        <ol class="carousel-indicators">
                            <li data-target="#carouselFade" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselFade" data-slide-to="1"></li>
                            <li data-target="#carouselFade" data-slide-to="2"></li>
                            <li data-target="#carouselFade" data-slide-to="3"></li>
                        </ol>
                        <!--Controls--> 
                        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
                            <span class="tp-leftarrow " aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
                            <span class="tp-rightarrow" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>		
        </div>
        <div class="container">
            <div class="main-page-content-align">
                <div class="row home-layout-margin-align">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h1 class="welcome-note wow fadeInLeftBig" data-wow-duration="1s">Welcome to <strong>"FSMC"</strong> Fire Safety Management Consultancy</h1>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="welcome-para text-justify wow fadeInRightBig" data-wow-duration="1s">
                            FSMC  is established by a team of registed and very experienced
                            fire safety managers from Singapore. We wanted to provide innovative, practical and cost effective
                            solutions to our coustomer for long term relationship thus ensuring us one of the unique industrial 
                            service provider in the globe.</p>
                    </div>
                </div>

                <div class="row mission-vision">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <p class="mission-title wow fadeInLeftBig" data-wow-duration="1s">MISSION</p>
                        <p class="text-uppercase mission-text wow fadeInRightBig" data-wow-duration="1s">EXCEED COUSTOMER EXPECTATION THROUGH PROVIDING HIGEST QUALITY SERVICE AND PROFESSIONALISM</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <p class="vision-title wow fadeInRightBig" data-wow-duration="1s">VISION</p>
                        <p class="text-uppercase vision-text wow fadeInLeftBig" data-wow-duration="1s">TO BE ONE OF THE BEST FIRE SAFETY SOLUTION PROVIDER FOR INDUSTRY.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
    <?php include './footer.php'; ?>
