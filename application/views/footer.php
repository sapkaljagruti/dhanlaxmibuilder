<!-- Contact -->
<div class="contactaits">

    <div class="col-md-12 col-sm-12 contact-grid contact-grid-2">
        <h3>CONTACT</h3>
        <div class="contact-info">
            <img src="<?php echo base_url('assets/images/phone.png'); ?>" alt="">
            <h4>GOT QUESTIONS?</h4>
            <p>Contact our customer support team if you have any further questions/doubts regarding our work.</p>

            <div class="comms">
                <!-- Email -->
                <div class="email">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>Email : <a href="mailto:info.dhanlaxmibulider@gmail.com"> info.dhanlaxmibulider@gmail.com</a></p>
                </div>
                <!-- //Email -->

                <!-- Phone -->
                <div class="phone">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>Phone : <a href="tel:+919825134741"> +919825134741 </a> / <a href="tel:+912602669941"> +912602669941 </a></p>
                </div>
                <!-- //Phone -->
                <div class="clearfix"></div>
            </div>
            <p>L-35/4 ,Dhanlaxmi Residency ,Shree Ambica Park ,Vapi-Silvasa Main Rd ,</p><p>Lavachha- 396 193. ta. vapi ,Dist. Valsad ,gujrat ,india.</p>
        </div>
    </div>
    <div class="clearfix"></div>

</div>
<!-- //Contact -->



<!-- Footer -->
<div class="footerw3layouts" id="footer">
    <div class="container">

        <div class="col-md-4 col-sm-4 footer-grid footer-grid-1">
            <ul>
                <li><a class="scroll" href="<?php echo site_url('/') ?>">Home</a></li>
                <li><a class="scroll" href="<?php echo site_url('about') ?>">About</a></li>
                <li><a class="scroll" href="<?php echo site_url('projects') ?>">Projects</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-4 footer-grid footer-grid-2">
            <ul>
                <li><a href="<?php echo site_url('booking') ?>">Booking</a></li>
                <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-4 footer-grid footer-grid-3">
            <form id="subscribtion">
                <input type="email" placeholder="Email" id="subscriber" name="subscriber" required=""/>
                <input type="submit" value="SUBSCRIBE" id="subscribe">
            </form>
            <div id="subscription_message" style="display: none;"></div>
        </div>

        <div class="clearfix"></div>

        <!-- Copyright -->
        <div class="copyright">
            <p>&copy; 2016 Dhanlaxmi Builder. All Rights Reserved | Developed by <a href="http://mjinfoworld.com/" target="_blank"> MJ INFOWORLD </a></p>
        </div>
        <!-- //Copyright -->

    </div>
</div>
<!-- Footer -->



<!-- Custom-JavaScript-File-Links -->


<!-- Necessary-JS-File-For-Bootstrap --> <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- Slider-JavaScript -->
<script src="<?php echo base_url('assets/js/responsiveslides.min.js'); ?>"></script>
<script>
    $(function () {
        $("#slider1, #slider2").responsiveSlides({
            auto: true,
            nav: true,
            speed: 1500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Slider-JavaScript -->

<!-- Countdown-Timer-JavaScript -->
<script src="<?php echo base_url('assets/js/simplyCountdown.js'); ?>"></script>
<script>
    var d = new Date(new Date().getTime() + 48 * 120 * 120 * 2000);

// default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

// inline example
    simplyCountdown('.simply-countdown-inline', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        inline: true
    });

//jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
<!-- //Countdown-Timer-JavaScript -->

<!-- Slide-To-Top JavaScript -->
<script type="text/javascript">
    $(document).ready(function () {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 100,
            easingType: 'linear'
        };
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#" class="W3layoutsw3lts Agileitsaits" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!-- //Slide-To-Top JavaScript -->

<!-- Smooth-Scrolling-JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- //Smooth-Scrolling-JavaScript -->

<!-- //Custom-JavaScript-File-Links -->

<script>
    $('#subscribtion').submit(function () {
        var subscriber = $('#subscriber').val();
        $('#subscribe').val('PROCEEDING');
        $('#subscribe').prop('disabled', true);
        $('#subscriber').fadeOut('slow');
        $.ajax({
            url: 'subscribe',
            type: 'POST',
            data: {
                subscriber: subscriber
            },
            success: function (data) {
                $('#subscription_message').html('<p>' + data + '</p>');
                $('#subscribtion').fadeOut('slow');
                $('#subscription_message').fadeIn('slow');
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('#subscription_message').html('<p>Something went wrong. Please try again letter.</p>');
                $('#subscribtion').fadeOut('slow');
                $('#subscription_message').fadeIn('slow');
            }
        });
        return false;
    });
</script>

</body>
<!-- //Body -->

</html>