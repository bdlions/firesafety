<?php
if (isset($_POST['quick-msg-send-btn'])) {
    $footer_name = "";
    $footer_email = "";
    $footer_message = "";
    if (isset($_POST['footer_name']) && !empty($_POST['footer_name'])) {
        $footer_name = $_POST['footer_name'];
    }
    if (isset($_POST['footer_email']) && !empty($_POST['footer_email'])) {
        $footer_email = $_POST['footer_email'];
    }
    if (isset($_POST['footer_message']) && !empty($_POST['footer_message'])) {
        $footer_message = $_POST['footer_message'];
    }
    //print_r($footer_name.$footer_email.$footer_message);
    $mail_content = "Name:" . $footer_name . ",\r\nEmail:" . $footer_email . ",\r\nMessage:" . $footer_message;
    $headers = "From: " . $footer_email;
    //print_r($mail_content.$headers);
    mail("sales@fsmcsg.com", $footer_email, $mail_content, $headers);
}
?>
<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row margin-top-bottom-25px">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="footer-text">Fire safety © 2017. Singapore Fire Safety Managers. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="quick-msg-section">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-11 col-sm-offset-4 col-sm-8 col-md-offset-8 col-md-4 col-lg-offset-9 col-lg-3">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="small-msg-box"> 
                        <i class="fa fa-envelope-o" aria-hidden="true"> Leave a Message</i> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="large-msg-box"> 
                        <div class="large-msg-box-header">
                            <div class="row">
                                <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 text-center">
                                    <div class="large-msg-box-header-text">
                                        Support
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                                    <div id="close" class="close-msg-box">
                                        <img src="images/closeButton.png" alt="close"/>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                        <div class="large-msg-box-white-content-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>Leave a message and we'll get back to you.</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="name" title="Name">Name</label>
                                        <input class="form-control" type="text" placeholder="Your Name" name="footer_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="email" title="Email">Email</label>
                                        <input class="form-control" type="text" placeholder="Your Email" name="footer_email">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="message" title="Message">Message</label>
                                        <textarea rows="3" class="form-control" placeholder="Your Message" name="footer_message"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <button class="form-control custom-button" id="quick-msg-send-btn" name="quick-msg-send-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--JS starts-->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
    $(document).ready(function(){$("#small-msg-box").click(function (){$("#small-msg-box").hide();$("#large-msg-box").show();});$("#close").click(function (){$("#large-msg-box").hide();$("#small-msg-box").show();});});
</script>
<!--JS ends-->

</body>
</html>

