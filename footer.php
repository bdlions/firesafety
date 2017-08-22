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
<section>
    <div class="row">
        <div class="col-xs-offset-2 col-xs-11 col-sm-offset-4 col-sm-8 col-md-offset-8 col-md-4 col-lg-offset-9 col-lg-3">
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
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                        <div class="large-msg-box-white-content-area">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>Leave a message and we'll get back to you.</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>Email</label>
                                    <input class="form-control" type="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>Message</label>
                                    <textarea rows="3" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <button class="form-control custom-button" id="quick-msg-send-btn" name="quick-msg-send-btn">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<script>
    $(document).ready(function () {
        $("#small-msg-box").click(function () {
            $("#small-msg-box").hide();
            $("#large-msg-box").show();
        });
        $("#close").click(function () {
            $("#large-msg-box").hide();
            $("#small-msg-box").show();
        });
    });
</script>
