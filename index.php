<script type="text/javascript">
    $(document).ready(function () {
        //$('.carousel').carousel({interval: 3000});
        $('#carouselFade').carousel();
    });
</script>
<style>
    #small-msg-box{
        padding: 8px 32px!important; 
    }
    .large-msg-box-header{
        padding: 3px 10px!important;  
    }
    .close-msg-box{
        margin-top: 8px!important;  
    }



</style>
<?php include './header.php'; ?>
<body>
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="header-bg">
                    <div class="row margin-top-bottom-10px">
                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-5">
                            <a href="index.php"><img class="img-responsive margin-top-bottom-10px" src="images/logo.png" alt="Logo"></a>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7">
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
                    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselFade" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselFade" data-slide-to="1"></li>
                        </ol>
                        <!-- Controls -->
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
                        <div class="welcome-note wow fadeInLeftBig" data-wow-duration="1s">Welcome to <b>"FSMC"</b> Fire Safety Management Consultancy</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h4 class="welcome-para text-justify wow fadeInRightBig" data-wow-duration="1s">FSMC  is established by a team of registed and very experienced
                            fire safety managers from Singapore. We wanted to provide innovative, practical and cost effective
                            solutions to our coustomer for long term relationship thus ensuring us one of the unique industrial 
                            service provider in the globe.</h4>
                    </div>
                </div>

                <div class="row mission-vision">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <h3 class="wow fadeInUpBig" data-wow-duration="1s">MISSION</h3>
                        <p class="text-uppercase mission-text wow fadeInLeftBig" data-wow-duration="1s">EXCEED COUSTOMER EXPECTATION THROUGH PROVIDING HIGEST QUALITY SERVICE AND PROFESSIONALISM</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <h3 class="wow fadeInDownBig" data-wow-duration="1s">VISION</h3>
                        <p class="text-uppercase vision-text wow fadeInRightBig" data-wow-duration="1s">TO BE ONE OF THE BEST FIRE SAFETY SOLUTION PROVIDER FOR INDUSTRY.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
    <?php include './footer.php'; ?>
