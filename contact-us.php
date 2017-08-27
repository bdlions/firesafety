<?php
if (isset($_POST['send_message'])) {
    $error_message = "";
    $success_message = "";
    $name = "";
    $email = "";
    $contact_no = "";
    $company_name = "";
    //$subject = "";
    $message = "";
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $error_message = "Name is requried.<br/>";
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error_message = $error_message . "Email is requried.<br/>";
    }
    if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
        $contact_no = $_POST['contact_no'];
    } else {
        $error_message = $error_message . "Contact No is requried.<br/>";
    }
    if (isset($_POST['company_name'])) {
        $company_name = $_POST['company_name'];
    }
    //if (isset($_POST['subject'])) {
    //    $subject = $_POST['subject'];
    //}
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }
    //print_r($name.$email.$contact_no.$company_name.$message);
    $mail_content = "Name:" . $name . ", Contact No:" . $contact_no . ", Compnay:" . $company_name . ", Email:" . $email . ", Message:" . $message;
    $headers = "From: " . $email;
    if (empty($error_message)) {
        if (mail("riad.cse13.sust@gmail.com", $email, $mail_content, $headers)) {
            $success_message = "Your messaage is sent successfully.";
        } else {
            $error_message = "Internal server error. Please try again later.";
        }
    }
}
?>

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
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 wow fadeInDown" data-wow-duration="1s">
                    <h4> Address/Contact Info : </h4><br>                
                    21 Bukit Batok Crescent #12-79 Wcega <br>                                  
                    Tower Singapore 658065  <br> <br>     
                    Email: sales@fsmcsg.com        <br>                               
                    Tel no: +65 85786896 / 91697931
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <form action="contact-us.php" method="post">
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-4 col-md-offset-3 col-md-4 col-lg-offset-3 col-lg-4">
                                <?php if (isset($success_message)) { ?>
                                    <div class="success"><?php echo $success_message; ?></div>
                                <?php } ?>
                                <?php if (isset($error_message)) { ?>
                                    <div class="error"><?php echo $error_message; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                <label class="wow fadeInLeftBig fade-timer-1st">Your Name (required)</label>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                <input type="text" class="form-control wow fadeInRightBig fade-timer-1st" name="name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                <label class="wow fadeInLeftBig fade-timer-2nd">Your Email (required)</label>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                <input type="text" class="form-control wow fadeInRightBig fade-timer-2nd" name="email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                <label class="wow fadeInLeftBig fade-timer-3rd">Your Contact No (required)</label>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                <input type="text" class="form-control wow fadeInRightBig fade-timer-3rd" name="contact_no">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                <label class="wow fadeInLeftBig fade-timer-4th">Company Name</label>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                <input type="text" class="form-control wow fadeInRightBig fade-timer-4th" name="company_name">
                            </div>
                        </div>
                        <!--                    <div class="row form-group">
                                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                                    <label class="wow fadeInLeftBig fade-timer-3rd">Subject</label>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                                    <input type="text" class="form-control wow fadeInRightBig fade-timer-3rd" name="subject">
                                                </div>
                                            </div>-->
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                                <label class="wow fadeInLeftBig fade-timer-5th">Your Message</label>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                                <textarea rows="5" class="form-control wow fadeInRightBig fade-timer-5th" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <button name="send_message" type="submit" class="custom-button pull-right wow fadeInRightBig fade-timer-6th">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="push"></div>
    </div>
    <?php include './footer.php'; ?>
