
<?php include '../config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Continental Horizon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="editor" content="Liberty">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="css/charisma-app.css" rel="stylesheet">-->
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    <link href='css/styler.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/demo.css' rel='stylesheet'>
    <link href='css/slidecss.css' rel='stylesheet'>
    <!-- Normalize CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    -->
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
      <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
     <!-- Style CSS -->


    <!-- jQuery -->
    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrapv4/bootstrap.min.js'></script>
    <script src='js/jquery.easing.min.js'></script>
    <script src='js/intlTelInput.js'></script>
    <script src='js/popper.min.js'></script>
    <script src='js/jquery.nice-select.min.js'></script>
    <script src="js/script.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <style>
    .nav-link{
        /*padding:10px;*/
        width:100px;
        height:50px;
        margin:5px;
        shadow:5px;
        margin-top:20px;
        margin-bottom:20px;
        font:"Times New Roman",;
    }
    .nav-link:hover{
        background:#661112;
    }
    .nav-item{
        list-style:none;
    }
    .sticky-navbar {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        overflow: hidden;
        opacity: 0.9; b 
        z-index: 50;
    }
    </style>

</head>
<body>
<header class="row">
    <section class="col-sm-6">
        <img src="../img/img/crop.png" width="120" height="120" alt="Site Logo" style="width:80;height:80;">
        <span style="font-size:20px;color:blue;">Continental Horizons</span>
        <sub>-WE ALL WORK TO HELP </sub></span> 
    </section>
    <section class="col-sm-3">
        <span class="">Have a Question?</span><br>
        <span class="glyphicon glyphicon-envelope">admin@continentalhorizons.org</span><br>
        <span class="glyphicon glyphicon-earphone">+263 778 816 135</span><br>
        <span class="glyphicon glyphicon-phone-alt">+263 54 22 31011</span><br>
    </section>
    <section class="col-sm-3">
        <span class="">Follow Us</span><br>
        <span class="fa fa-facebook">Facebook</span><br>
        <span class="fa fa-twitter">Twitter</span><br>
        <span class="fa fa-instagram">Instagram</span><br>
        <span class="fa fa-linkedin">LinkedIn</span><br>
    </section>
</header>
<?php //require ('include/database.php'); ?>
<?php //require ('session.php'); ?>


<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

    <nav class="navbar navbar-inverse sticky-navbar"><!--navbar-fixed-top-->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<img class="navbar-brand" src="img/img/continental_logo.png" alt="continental" style="width:120px;height:100px;">
            -->
        <a class="navbar-brand" href="index.php">Continental Horizons</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
                <li class="nav-item active">
                    <a class="nav-link btn btn-info" href="../index.php">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link btn btn-info" href="../training/index.php">Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="index.php">Consultancy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../products/index.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../partners.php">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../about.php">About-Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../contact-us.php">Contact-Us</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
<?php } ?>