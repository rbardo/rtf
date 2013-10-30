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
                      <h2>Training &amp; Fitness That Delivers Results</h2>
                      <p>Real Training and Fitness was developed for one purpose; to provide the Erie Community with a facility focused on Results. Whether your goal is weight loss and toning up, injury rehabilitation, or athletic sports training we are the professionals to see. Our staff holds itself 100% responsible for you attaining your goals. Most importantly this level of service is given to each and every member.</p>
                      <h2>Photo Gallery</h2>
                      <?php include "php/snippet-aboutcolorbox.php";?> <!-- colorbox -->
                      <h2>Leadership Team</h2>
                      <p>Real Training and Fitness was developed for one purpose; to provide the Erie Community with a facility focused on Results. Whether your goal is weight loss and toning up</p>
                      <div class="row">
                          <div class="col-md-3 col-sm-4 col-xs-4 text-center ">
                              <img src="img/jackbio_tn.jpg" alt="" class="img-thumbnail">
                              <h3 class="title"><a data-toggle="modal" href="#jack-modal">Jack Sullivan</a></h3>
                              <small>Owner / CEO</small>
                          </div>
                          <div class="col-md-3 col-sm-4 col-xs-4 text-center modalphotos">
                              <img src="img/tonybio_tn.jpg" alt="" class="img-thumbnail">
                              <h3 class="title"><a data-toggle="modal" href="#tony-modal">Tony Bevaqua</a></h3>
                              <small>General Manager</small>
                          </div>
                      </div>  
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
                </div> <!-- end main content column -->
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
