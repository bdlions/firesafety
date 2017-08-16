<?php
if (isset($_POST['send_message'])) {
    $name = "";
    $email = "";
    $subject = "";
    $message = "";
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }
    //print_r($name.$email.$subject.$message);
    $headers = "From: admin@fsmcsg.com";
    print_r(mail($email, $subject, $message, $headers));
}
?>

<!doctype html>
<html lang="">
    <head>
        <!--[if lt IE 8]>
           <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->
        <title>FSMC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="fire safety singapore industry building plant yead bukit batok crescent SCDF MOM WSHO WSHC ECO">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/custom.css">

        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <header id="header">
                <div class="container">
                    <div class="row margin-top-bottom-10px">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                            <a href="index.html"><img class="img-responsive margin-top-bottom-10px" src="images/logo.png" alt="Logo"></a>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
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
                                        <li><a class="hvr-rectangle-out" href="index.php">Home</a></li>
                                        <li><a class="hvr-rectangle-out" href="company-profile.php">Company Profile</a></li>
                                        <li><a class="hvr-rectangle-out" href="services.php">Services</a></li>
                                        <li><a class="hvr-rectangle-out" href="career.php">Available Positions</a></li>
                                        <li><a class="hvr-rectangle-out" href="links.php">Links</a></li>
                                        <li class="active"><a class="hvr-rectangle-out" href="contact-us.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!--            <div class="container">
                            <section id="top-section">
                                <header>
                                    <h1>Contact Us</h1>
                                </header>
                            </section>
                        </div>-->
            <div class="container">
                <div class="row form-group margin-top-bottom-50px">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeInDown" data-wow-duration="1s">
                        <h4> Address/Contact Info : </h4><br>                
                        21 Bukit Batok Crescent #12-79 Wcega <br>                                  
                        Tower Singapore 658065  <br> <br>     
                        Email: sales@fsmcsg.com        <br>                               
                        Tel no: +65 85786896 / 91697931
                    </div>
                </div>
                <form action="contact-us.php" method="post">
<!--                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-4 col-md-offset-3 col-md-4 col-lg-offset-3 col-lg-4">
                            <div class="error">Message sent Successfully</div>
                            <div class="success">Message not sent Successfully</div>
                        </div>
                    </div>-->
                    <div class="row form-group margin-top-50px">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <label class="wow fadeInLeftBig fade-timer-1st">Your Name (required)</label>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                            <input type="text" class="form-control wow fadeInRightBig fade-timer-1st" name="name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <label class="wow fadeInLeftBig fade-timer-2nd">Your Email (required)</label>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                            <input type="text" class="form-control wow fadeInRightBig fade-timer-2nd" name="email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <label class="wow fadeInLeftBig fade-timer-3rd">Your Contact No(required)</label>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                            <input type="text" class="form-control wow fadeInRightBig fade-timer-3rd" name="contact-no">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <label class="wow fadeInLeftBig fade-timer-4th">Company Name</label>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                            <input type="text" class="form-control wow fadeInRightBig fade-timer-4th" name="contact-name">
                        </div>
                    </div>
<!--                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <label class="wow fadeInLeftBig fade-timer-3rd">Subject</label>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                            <input type="text" class="form-control wow fadeInRightBig fade-timer-3rd" name="subject">
                        </div>
                    </div>-->
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <label class="wow fadeInLeftBig fade-timer-5th">Your Message</label>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                            <textarea rows="5" class="form-control wow fadeInRightBig fade-timer-5th" name="message"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <button name="send_message" type="submit" class="custom-button pull-right wow fadeInRightBig fade-timer-6th">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="push"></div>
        </div>
        <footer class="footer">
            <div class="footer-wrapper margin-top-50px">
                <div class="container">
                    <div class="row margin-top-bottom-25px">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p class="footer-text">Fire safety © 2017. Singapore Fire Safety Managers. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
