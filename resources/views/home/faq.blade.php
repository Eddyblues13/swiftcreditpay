@include("home.header");

<div class="page-title-area jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Frequently Asked Questions</h2>
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

<!-- Start FAQ Area -->
<section class="faq-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="faq-content">
                    <h2>When you have banking questions, we have answers.</h2>
                    <div class="bar"></div>
                    <p align="justify">Below is a list of answers to the most frequently asked by our clients. If you
                        don't see
                        what you're looking for here, feel free to <a href="contact-2.html">Contact us</a>.</p>

                    <div class="faq-image">
                        <img src="public/contents/synline/assets/img/faq.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                What will I need to provide when I open an account?
                            </a>

                            <p class="accordion-content show">You will need documents that show your legal name,
                                permanent street address, and date of birth. Appropriate forms of ID include a
                                driver’s license, state-issued identification or valid passport.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                Where do I find my bank account number?
                            </a>

                            <p class="accordion-content">You get your account number sent to your email address
                                upon sign up and you can view them in your Online Banking dashboard.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                How do I sign on to Online Banking?
                            </a>

                            <p class="accordion-content">From the Swift Credit Pay home page, you will see a "Sign Up"
                                button in the upper right corner of the page. Enter your Email Address and
                                Password in the input fields and click "SIGN IN."</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                How do I change my address and phone number?
                            </a>

                            <p class="accordion-content">If you have access to Swift Credit Pay Online Banking, you can
                                update this information within your Profile Settings, or you can <a
                                    href="contact-2.html">contact us</a>.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                What information is needed for a wire transfer?
                            </a>

                            <p class="accordion-content">To send a wire, you will be asked to provide your name,
                                complete street address, Swift Credit Pay account number and crediting information. The
                                crediting information includes the bank name, complete street address, routing
                                number and the recipient’s name, complete street address and account number.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                How do I dispute a debit or credit card transaction?
                            </a>

                            <p class="accordion-content">Charges can be disputed through Online Banking or by
                                phone. To submit a dispute by phone, please contact our support via
                                support@astrocrestonunion.com.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                How do I access my available balance?
                            </a>

                            <p class="accordion-content">It's easy to monitor your available balance through
                                Online Banking, or by sending us a message.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="#" onclick="return false;">
                                <i class="fas fa-plus"></i>
                                What is a pending transaction?
                            </a>

                            <p class="accordion-content">A pending transaction is a transaction that has not
                                been posted to your account, but is reflected in your available balance.</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End FAQ Area -->
@include("home.footer");