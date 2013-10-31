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
        <link rel="stylesheet" href="css/colorbox.css" />
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
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
                <div class="col-md-12">
                    <article class="col-md-8">         
                      <a href="http://g.co/maps/tc5ay" target="_blank">
                        <div id="map_listing" style="width: 100%; height: 350px;"></div>
                      </a>
                      <div class="row">
                        <div class="col-md-12 well well-md top-margin  text-center">
                          <h2>Our Current Promotion</h2>
                          <p>Our competition training has helped many RTF athletes reach their goals and achieve top ranks in national competition</p>
                          <button class="btn btn-secondary">Sign Up Today</button>
                        </div>
                      </div><!-- end promotion block -->
                    </article> <!-- end left content block -->
                    <aside class="col-md-4">
                        <?php include"php/form.php";?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="well well-md">
                            <?php include "php/snippet-fitnessfeed.php";?>
                            </div>
                          </div>
                        </div>
                    </aside> <!-- end sidebar -->
                </div> <!-- end left content and sidebar parent column -->
            </section> <!-- end content wrapper -->
            <!-- modal -->
            <?php include "php/snippet-aboutusmodalbio.php";?>

        </div> <!-- end container --> 
        <?php include "php/footer.php";?>
        <!-- scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="js/map.js"></script>
        <script src="js/jquery.colorbox-min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
