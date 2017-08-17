<?php
if (isset($_POST['send_comment'])) {
    $name = "";
    $contact_no = "";
    $company = "";
    $designation = "";
    $email = "";
    $subject = "";
    $comment = "";
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['contact_no'])) {
        $contact_no = $_POST['contact_no'];
    }
    if (isset($_POST['company'])) {
        $company = $_POST['company'];
    }
    if (isset($_POST['designation'])) {
        $designation = $_POST['designation'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
    }
    //print_r($name.$contact_no.$company.$designation.$email.$subject.$comment);
    $mail_content = "Name:" . $name . ", Contact No:" . $contact_no . ", Compnay:" . $company . ", Designation:" . $designation . ", Email:" . $email . ", Comment:" . $comment;
    $headers = "From: " . $email;
    mail("riad.cse13.sust@gmail.com", $subject, $mail_content, $headers);
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
                            <a href="index.php"><img class="img-responsive margin-top-bottom-10px" src="images/logo.png" alt="Logo"></a>
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
                                        <li class="active"><a class="hvr-rectangle-out" href="company-profile.php">Company Profile</a></li>
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
            </header>
            <!--            <div class="container">
                            <section id="top-section">
                                <header>
                                    <h1>Company Profile</h1>
                                </header>
                            </section>
                        </div>-->
            <div class="container">
                <div class="row margin-top-bottom-25px">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h4 class="wow fadeInLeftBig" data-wow-duration="1s">FSMC is a registered company in Singapore  as a industry fire safety solution provider. FSMC's 
                            aim is to provide very innovative and cost effective solutions to the industry building/plant/yard
                            owner via its strong engineering background. FSMC is established to provide quality and professional
                            fire safe managers in the industry to prevent any major fire incident in singapore. We will strive
                            for continious improvement on the services and the business we do care about.  </h4>
                    </div>
                </div>
                <!--                <div class="row margin-top-bottom-25px">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="wow fadeInUp" data-wow-duration="1s">For further enquiries or after-sales service, please fill out the form and we will get back to you as soon as possible.  </h4>
                                    </div>
                                </div>
                                <div class="row margin-top-20px">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h4 class="wow fadeInDown" data-wow-duration="1s">Address/Contact Info :  </h4>
                                    </div>
                                </div>
                                <div class="row margin-top-10px">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-duration="1s">
                                        <h5>CONTACT PERSONS</h5>
                                        Mr. S. Chowdhory / Mr. SK <br>
                                        Email: sales@fsmcsg.com <br>
                                        HP: +65 9229 9454 / +65 8578 6896 <br><br>
                
                                        General inquiries <br>
                                        Email : sales@fsmcsg.com
                
                                    </div>
                                </div>
                                <form action="company-profile.php" method="post">
                                    <div class="row form-group margin-top-50px">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label class="wow fadeInLeftBig fade-timer-1st">Name</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <input type="text" class="form-control wow fadeInRightBig fade-timer-1st" name="name">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label class="wow fadeInLeftBig fade-timer-2nd">Contact No.</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <input type="text" class="form-control wow fadeInRightBig fade-timer-2nd" name="contact_no">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label class="wow fadeInLeftBig fade-timer-3rd" >Company</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <input type="text" class="form-control wow fadeInRightBig fade-timer-3rd" name="company">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label class="wow fadeInLeftBig fade-timer-4th">Designation</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <input type="text" class="form-control wow fadeInRightBig fade-timer-4th" name="designation">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label class="wow fadeInLeftBig fade-timer-5th">Email</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <input type="text" class="form-control wow fadeInRightBig fade-timer-5th" name="email">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label  class="wow fadeInLeftBig fade-timer-6th">Subject</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <input type="text" class="form-control wow fadeInRightBig fade-timer-6th" name="subject">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                                            <label class="wow fadeInLeftBig fade-timer-7th">Comments</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                                            <textarea rows="5" class="form-control wow fadeInRightBig fade-timer-7th" name="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <button name="send_comment" type="submit" class="custom-button pull-right wow fadeInRightBig fade-timer-8th">Submit</button>
                                        </div>
                                    </div>
                                </form>-->
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