<!doctype html>
<html class="no-js" lang="en">
<head>

    <?php include 'partials/head.php'; ?>
    <!-- /head -->

</head>
<body>

<?php include 'partials/header.php'; ?>
<!-- /header -->

<div id="slides" class="hero">
    <div class="slides-container">
        <div class="slide-item">
            <img src="images/content/home/home-first.jpg"/>
            <div class="slide-content">
                <h2>We Put Learning Into Practice</h2>
                <p>Educators and clinicians partnering for a successful and sustainable workforce.</p>
                <p>
                    <a class="button button-outline button-white" href="about.php">About US</a>
                </p>
            </div>
        </div>
        <div class="slide-item">
            <img src="images/content/home/home-pharm.jpg"/>
            <div class="slide-content">
                <h2>Optimal Clinical Learning Environment</h2>
                <p>Standardizing and simplifying the clinical experience process.</p>
                <p><a href="services.php" class="button button-outline button-white">Our Services</a></p>
            </div>
        </div>
        <div class="slide-item">
            <img src="images/content/home/home-records.jpg"/>
            <div class="slide-content">
                <h2>The right learning. The right place. The right time.</h2>
                <p>Over 200 health professions programs partnering with Pacific Northwest hospitals.</p>
                <p><a href="partners.php" class="button button-outline button-white">Our Members</a></p>
            </div>
        </div>
        <div class="slide-item">
            <img src="images/content/home/home-pt.jpg"/>
            <div class="slide-content">
                <h2>Partnering for Excellence in Clinical Education </h2>
                <p>Serving students throughout the Pacific Northwest.</p>
                <p><a href="about.php" class="button button-outline button-white">About Us</a></p>
            </div>
        </div>
        <div class="slide-item">
            <img src="images/content/home/home-rt.jpg"/>
            <div class="slide-content">
                <h2>Connecting Knowledge with Experience </h2>
                <p>The link between education and professional healthcare practice. </p>
                <p><a href="get_started.php" class="button button-outline button-white">Get Started</a></p>
            </div>
        </div>


    </div>
</div>
<!-- /hero -->

<div class="main">
    <section>
        <div class="row">
            <div class="small-12 medium-8 medium-push-2 columns">
                <h1 class="line-after text-center">Welcome to CPNW</h1>
                <p class="text-center">
                    Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna
                    mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui.
                    Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.
                    Maecenas sed diam eget risus varius blandit sit amet non magna.
                </p>


                <div id="login1" class="reveal-modal" data-reveal aria-labelledby="login or sign up" aria-hidden="true"
                     role="dialog">
                    <div class="row">
                        <div class="large-6 columns auth-plain">
                            <div class="signup-panel left-solid">
                                <p class="welcome">Registered Users</p>
                                <form>
                                    <div class="row collapse">
                                        <div class="small-2  columns">
                                            <span class="prefix"><i class="fi-torso-female"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                            <input type="text" placeholder="username">
                                        </div>
                                    </div>
                                    <div class="row collapse">
                                        <div class="small-2 columns ">
                                            <span class="prefix"><i class="fi-lock"></i></span>
                                        </div>
                                        <div class="small-10 columns ">
                                            <input type="text" placeholder="password">
                                        </div>
                                    </div>
                                </form>
                                <a href="#" class="button ">Log In </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>


<?php include 'partials/contact-form.php'; ?>

<!-- /main -->

<?php include 'partials/footer.php'; ?>
<!-- /footer -->


<?php include 'partials/footer-scripts.php'; ?>
<!-- /footer scripts -->


<script>

    $(document).ready(function () {
        HeaderBackground();
        SliderBg();

        $('#slides').superslides({
            hashchange: false,
            play: 5000,
            pagination: true
        });
    });


</script>
</body>
</html>
