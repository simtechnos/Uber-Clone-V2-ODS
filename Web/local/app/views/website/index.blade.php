<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->

    <head>
        <?php
        $logo = '/image/logo.png';
        $favicon = '/image/favicon.ico';
        if (Config::get("database.connections.mysql.database") != "") {
            $theme = Theme::all();
            foreach ($theme as $themes) {
                $logo = '/uploads/' . $themes->logo;
                $favicon = '/uploads/' . $themes->favicon;
            }
            if ($logo == '/uploads/') {
                $logo = '/image/logo.png';
            }
            if ($favicon == '/uploads/') {
                $favicon = '/image/favicon.ico';
            }
        }
        ?>
        <meta charset="UTF-8">
        <title><?= Config::get('app.website_title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--<link rel="shortcut icon" href="favicon.ico">-->
        <link rel="icon" type="image/ico" href="<?php echo asset_url() . $favicon; ?>">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/animate.css">

        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>/website/css/styles.css">
        <script src="<?php echo asset_url(); ?>/website/js/modernizr.custom.32033.js"></script>

    <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="pre-loader">
            <div class="load-con">
                <!--<img src="<?php echo asset_url() ?><?php echo $logo; ?>" class="animated fadeInDown" alt="" width="200">-->
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>

        <!-- Wrap all page content here -->
        <div id="wrap">

            <header class="masthead">
                <div class="slider-container" id="slider">
                    <div class="container">
                        <div class="row mh-container">
                            <h1><span><?= Config::get('app.website_title') ?></span></h1>
                            <h3>Pick Your <?= Config::get('app.website_title') ?></h3>
                            <div class="col-md-2 col-sm-4 col-xs-6" style="margin:0 auto;float:none;">
                                <div class="btn-group btn-group-justified btn-lg small">
                                    <div class="btn-group text-right">
                                        <a href="<?= Config::get('app.ios_client_app_url') ?>" onclick="window.open('<?= Config::get('app.ios_client_app_url') ?>');
                                                window.open('<?= Config::get('app.ios_provider_app_url') ?>');
                                                return false;" target="_blank" class="btn btn-default scrollpoint sp-effect6"> <?php /* echo Config::get('app.ios_client_app_url') */ ?>
                                            <span class="apple"></span>
                                        </a>
                                    </div>
                                    <div class="btn-group text-left">
                                        <a href="<?= Config::get('app.android_client_app_url') ?>" onclick="window.open('<?= Config::get('app.android_client_app_url') ?>');
                                                window.open('<?= Config::get('app.android_provider_app_url') ?>');
                                                return false;" target="_blank" class="btn btn-default scrollpoint sp-effect6">
                                            <span class="play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-push-1 mh-slider col-xs-12">
                                <div class="row">
                                    <div class="col-md-3 col-xs-12 bt col-md-offset-3">
                                        <a href="#download" class="btn btn-default side">Get Application Now</a>
                                    </div>
                                   
                                    <div class="col-md-3 col-xs-12 bt">
                                        <a href="#features" class="btn btn-empty side">Features</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fixed navbar -->
                <div class="navbar navbar-static-top" id="nav" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-align-justify"></i>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo asset_url(); ?><?php echo $logo; ?>" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#slider">Home</a></li>
                                <li><a href="#features">features</a></li>
                                <li><a href="#download">Get Application Now</a></li>
                                <li><a href="#signup">Signin</a></li>
                                <li><a href="#contact">contact</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.navbar -->

            </header>

            <section id="signup">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?= Config::get('app.website_title') ?><span> Sign In</span></h3>
                                <span class="divider"></span>
                            </div>
                        </div>

                    </div>
                    <div class="row text-center">
                        <a href="<?php echo web_url(); ?>/user/signin" class="btn btn-sign-up">Passenger</a>
                        <a href="<?php echo web_url(); ?>/provider/signin" class="btn btn-sign-up">Driver</a>
                    </div>

                </div>

            </section>

            <section id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?= Config::get('app.website_title') ?><span> Features</span></h3>
                                <span class="divider"></span>
                                <p>Explore the latest trends with the <?= Config::get('app.website_title') ?> features.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-thumbs-up fa-4x"></i>
                                                    </div>
                                                    <h4>Convenience</h4>
                                                    <p>Book within seconds and get instant confirmations. Easy online payments or cash on delivery. Booking car rentals will never be a headache again!</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-star fa-4x"></i>
                                                    </div>
                                                    <h4>Quality</h4>
                                                    <p>Our cars are audited for cleanliness, safety and comfort. Our drivers are well trained and reliable. Sit back and enjoy the Ola experience!</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect1">
                                                    <div class="icon">
                                                        <i class="fa fa-inr fa-4x"></i>
                                                    </div>
                                                    <h4>Control</h4>
                                                    <p>We have clear and transparent pricing listed online. Never haggle with drivers again on payments and be confident and assured of what you are being charged for!.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-calendar fa-4x"></i>
                                                    </div>
                                                    <h4>Liability</h4>
                                                    <p>The information, recommendations provided to you on or through the Website, or the Application is for general information purposes only and does not constitute advice. </p>
                                                </div>
                                            </div>
                                            </div>
					</div>
                                            <div class="item">
					    <div class="row">
                                             <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-taxi fa-4x"></i>
                                                    </div>
                                                    <h4>Automated locating</h4>
                                                    <p>All smartphones and tablets can track your current position using GPS. By touching the radar icon your position is automatically pinpointed.</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-search fa-4x"></i>

                                                    </div>
                                                    <h4>Tracking of the taxi’s arrival status</h4>
                                                    <p>Your taxi’s approach and estimated arrival time can easily be tracked from now on.</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-comment-o fa-4x"></i>
                                                    </div>
                                                    <h4>24/7 telephone service</h4>
                                                    <p>For individual questions or additional information you may contact the local taxi call centre any time – around the clock on 365 days a year.</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature scrollpoint sp-effect2">
                                                    <div class="icon">
                                                        <i class="fa fa-check fa-4x"></i>
                                                    </div>
                                                    <h4>Individual service requests</h4>
                                                    <p>With the taxi.eu app you can book the right cab for each requirement of daily life – whether you would like to take your pet with you, need a big vehicle for travelling in a group.</p>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                        </div>
                                    </div>
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="download">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                            <h1><span>Get </span> Application <span>Now</span></h1>
                            <h4>Everyday cars for everyday use.
								<?= Config::get('app.website_title') ?> app.<br>
                            Better, faster, and cheaper than a taxi.</h4>
                        </div>
                        <div class="btn-group btn-group-justified btn-lg">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="btn-group scrollpoint sp-effect4">
                                            <a href="<?= Config::get('app.ios_client_app_url') ?>" onclick="window.open('<?= Config::get('app.ios_provider_app_url') ?>');" target="_blank" class="btn btn-default">
                                                <span class="appstore"></span>
                                            </a>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="btn-group scrollpoint sp-effect4">
                                            <a href="<?= Config::get('app.android_client_app_url') ?>" onclick="window.open('<?= Config::get('app.android_provider_app_url') ?>');" target="_blank" class="btn btn-default">
                                                <span class="playstore"></span>
                                            </a>
                                        </div>  
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="settings">
                <div class="container">
                    <div class="col-md-7">
                        <img src="<?php echo asset_url(); ?>/website/img/weather.png" alt="" class="scrollpoint sp-effect3">
                        <h2 class="scrollpoint sp-effect3"><?= Config::get('app.website_title') ?> <span>App</span></h2>
                        <p class="first">You may download <?= Config::get('app.website_title') ?>  application on your device for availing the Service. By downloading the Application, you also agree to the User Terms.. <?= Config::get('app.website_title') ?>  will store the information provided for contacting you for all service related matters. You may promptly inform <?= Config::get('app.website_title') ?>  on any change in the information provided, in order to serve you better.</p>

                        <p>
                            <a href="#download" class="btn btn-default scrollpoint sp-effect1">Get Application Now</a>
                            <a href="#features" class="btn btn-empty scrollpoint sp-effect2">Features</a>
                        </p>
                    </div>
                    <div class="col-md-5 scrollpoint sp-effect5">
                        <img src="<?php echo asset_url(); ?>/website/img/iphone1.png" class="img-responsive hidden-xs iphone-settings" alt="">
                    </div>
                </div>
            </section>

            <!--<section id="screenshots">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 hidden-xs">
                            <span class="owl-prev"><i class="fa fa-chevron-left fa-2x"></i></span>
                        </div>
                        <div class="col-md-8">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?= Config::get('app.website_title') ?> App<span> screen shots</span></h3>
                                <span class="divider"></span>

                            </div>
                        </div>
                        <div class="col-md-2 hidden-xs">
                            <span class="owl-next"><i class="fa fa-chevron-right fa-2x"></i></span>
                        </div>                 
                    </div>
                </div>
                <div id="owl-screenshots" class="owl-carousel">
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen1.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen2.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen3.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen4.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen5.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen6.jpg" alt=""></div>
                    <div><img src="<?php echo asset_url(); ?>/website/img/screen7.jpg" alt=""></div>

                </div>
            </section>-->

            <footer id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><span> get in touch</span></h3>
                                <span class="divider"></span>
                                <p>And when you have the itch to contact us, we are right here at <a style="color:#fff;" href="mailto:<?= Config::get('app.developer_company_email') ?>" ><?= Config::get('app.developer_company_email') ?>.</a> Shoot a mail and we would solve your queries.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="social">
                                <ul>
                                    <li><a href="<?= Config::get('app.developer_company_twitter_link') ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href="<?= Config::get('app.developer_company_fb_link') ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                                </ul>
                            </div>
                            <p class="rights">
                                2017 <span><?= Config::get('app.website_title') ?></span> 
                             <!--   Developed by <a href="<?= Config::get('app.developer_company_web_link') ?>" target="_blank"><span><?= Config::get('app.developer_company_name') ?></span></a>  -->|
                                
                                 <a href="{{route('termsncondition')}}"><span>Terms and Conditions</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo asset_url(); ?>/website/js/bootstrap.min.js"></script>
        <script src="<?php echo asset_url(); ?>/website/js/owl.carousel.min.js"></script>
        <script src="<?php echo asset_url(); ?>/website/js/waypoints.min.js"></script>

   <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

     jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="<?php echo asset_url(); ?>/website/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>/website/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="<?php echo asset_url(); ?>/website/js/script.js"></script>
        <script>
                                                $(document).ready(function () {
                                                    appMaster.preLoader();
                                                });
        </script>

    </body>

</html>
