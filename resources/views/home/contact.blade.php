@include("home.header");
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Contact Us</h2>
        </div>




        <center>
            <div id="google_translate_element" style="height:50px;"></div>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
            </script>

            <script type="text/javascript"
                src="translate.google.com/translate_a/elementa0d8a0d8a0d8.html?cb=googleTranslateElementInit"></script>
        </center>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Drop us a message for any query</h2>
            <div class="bar"></div>
            <p align="justify">We’re happy to answer any questions you may have, just send us a message via our in-app
                chat support.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Address</span>
                            <a href="#">221B Baker Street, London, NW1 6XE, United Kingdom</a>
                            <br /> <br />
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>

                            <a href="mailto:support@swiftcreditpay.com ">support@swiftcreditpay.com </a>

                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <br /><br />
                            <!--span>Mobile Number</span>
                            <a href="tel: +1 404-XXX-5898">
                                 +1 404-XXX-5898
                            </a-->
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <form id="" method="post" action="#">

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name" value="" minlength="3"
                                        maxlength="60">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email" value="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone"
                                        value="" minlength="8" maxlength="15">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                        data-error="Please enter your subject. (min. characters: 5)"
                                        placeholder="Subject" minlength="5" maxlength="60">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                        required data-error="Write your message (min. characters: 20)"
                                        placeholder="Your Message" minlength="20" maxlength="1000"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="contact-nonce">
                                <input type="hidden"
                                    id="94fd9df0467b7ff0aef9229f298b30d54d07ab3f7ed8d30a755af3525691e389"
                                    name="94fd9df0467b7ff0aef9229f298b30d54d07ab3f7ed8d30a755af3525691e389"
                                    value="a01f91716e" /><input type="hidden" name="_wp_http_referer"
                                    value="/contact" />
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="contents/synline/assets/img/bg-map.png" alt="image"></div>
</section> <!-- End Contact Area -->

<!-- Start Account Create Area -->
<section class="account-create-area">
    <div class="container">
        <div class="account-create-content">
            <h2>Apply for an account in minutes</h2>
            <p align="justify">
                Open an account with ease through our online banking platform. With just a few clicks, you can apply in
                minutes, enjoy 24/7 access, and manage your finances from anywhere. Banking made simple and secure!</p>
            <a href="get-started.html" class="btn btn-primary">Get Started</a>
        </div>
    </div>
</section>
<!-- End Account Create Area -->
@include("home.footer");