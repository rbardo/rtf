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
            <section class="row" id="training">
                <div class="col-md-12">
                    <article class="col-md-8">
                      <h2>Change The Way You Train</h2>
                      <p>Real Training and Fitness offers its members the benefit of choosing the type of training that fits their style and preference. Whether you want one-on-one trianing to meet your fitness goals, enjoy group fitness classes, or have the desire to compete, we've got you covered by offering three types of trianing:</p>
                      <div class="row">
                        <div class="col-md-4 col-sm-4 hidden-xs ">
                          <div class=" training-types pt">
                            <h3>Personal Training</h3>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 hidden-xs ">
                          <div class=" training-types gf">
                            
                            <h3>Group Fitness</h3>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 hidden-xs ">
                          <div class=" training-types mb ">
                            
                            <h3>Competition Training</h3>
                          </div>
                        </div>
                      </div> <!-- end types of training -->
                      <div class="row">
                        <div class="col-md-12 top-margin hidden-xs">
                        <img class="img-responsive img-thumbnail " src="img/pt1.jpg" alt="">
                       </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <?php include "php/training-accordion.php";?>
                        </div>
                      </div>
                      <h3>Our Personal Trainers</h3>
                        <?php include "php/snippet-trainersmodal.php";?>
                   
                    </article> <!-- end left content block -->
                    <aside class="col-md-4">
                      <div class="row">
                          <div class="col-md-12">
                            <h2 class="text-center"><span class="glyphicon glyphicon-calendar"></span> Group Fitness Schedule</h2>
                            <?php include "php/classes-accordion.php";?>
                          </div>
                        </div>
                        <?php include"php/form.php";?>
                    </aside> <!-- end sidebar -->
                </div> <!-- end main content column -->
            </section> <!-- end content wrapper -->
            <!-- modal -->
            

        </div> <!-- end container --> 
        <?php include "php/footer.php";?>
        <!-- scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="js/map.js"></script>
    </body>
</html>
