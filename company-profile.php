<?php $title = "Compnay Profile"; ?>
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
<?php include './header.php'; ?>
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
                    <h1 class="font-size-24 wow fadeInLeftBig" data-wow-duration="1s">FSMC is a registered company in Singapore  as a industry fire safety solution provider. FSMC's 
                        aim is to provide very innovative and cost effective solutions to the industry building/plant/yard
                        owner via its strong engineering background. FSMC is established to provide quality and professional
                        fire safe managers in the industry to prevent any major fire incident in singapore. We will strive
                        for continious improvement on the services and the business we do care about.  </h1>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
    <?php include './footer.php'; ?>