<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
        <script src="html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
       
        <div class="container container-bg">
            <?php include "php/nav.php";?>
            <header>
                <div>
                    <h1 class="text-center">Real Training. Real Fitness. <span class="red">Real Results.</span></h1>
                </div>
            </header>
            <section class="row">
                <div class=" nopad col-lg-12">
                <?php include "php/snippet-carousel.php";?>
                </div>
            </section>
            <section class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="home-blocks gf">
                        <img src="img/pt_icon.png" alt="">
                        <h2>Results</h2>
                        <p class="text-center">We specialize in sport specific training, weight loss, muscle and strength gain and injury rehabilitation </p>
                        <a href="#" class="btn btn-primary btn-lg">Fitness Classes</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="home-blocks pt">
                        <img src="img/gf_icon.png" alt="">
                        <h2>Training</h2>
                        <p class="text-center">We specialize in sport specific training, weight loss, muscle and strength gain and injury rehabilitation </p>
                        <a href="training.php" class="btn btn-primary btn-lg">Personal Training</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="home-blocks mb">
                        <img src="img/pt_icon.png" alt="">
                        <h2>Membership</h2>
                        <p class="text-center">We specialize in sport specific training, weight loss, muscle and strength gain and injury rehabilitation </p>
                        <a href="#" class="btn btn-primary btn-lg">Sign Up Today</a>
                    </div>
                </div>
            </section> <!-- end home blocks -->
            <section class="row competition">
                <div class="col-md-12 well well-md  text-center">
                    <h2>Our Current Promotion</h2>
                    <p>This content block is where you can update current promotions that your are currently offering.</p>
                </div>
            </section> <!-- end competition block --> 
            <section class="row">
                <div class="col-md-6">
                    <h2 class="text-center"><span class="glyphicon glyphicon-calendar"></span> Group Fitness Schedule</h2>
                   <?php include "php/classes-accordion.php";?> 
                </div> <!-- end classes accordion -->
                <div class="col-md-6 fitness-feed">
                    <?php include "php/snippet-fitnessfeed.php";?>
                </div> <!-- end fitness news feed -->
            </section> <!-- end fitness schedule and fitness feed -->
            
        </div> <!-- end content container --> 
        <?php include "php/footer.php";?>
        <!-- scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="js/map.js"></script>
        <script src="js/respond.js"></script>
    </body>
</html>
