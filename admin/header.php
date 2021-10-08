<?php require ('session.php'); ?>
<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Continental Horizons Training</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="editor" content="Magumise Liberty">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
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

    <!-- User Styles-->
    <link href='css/profile.css' rel='stylesheet'>
    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>

<!-- Require session  for access to pages that inherit this header  -->
<?php require ('include/database.php'); ?>

<!-- Require session  for access to pages that inherit this header  -->
<?php require ('session.php'); ?>


<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"> <img alt="Logo" height="80" width="80" src="img/logo.png" class="hidden-xs"/>
                <span>CONTINENTAL HORIZONS</span></a>
                <span><h3>CONTINENTAL HORIZONS</h3></span>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                    <?php
                        include('include/database.php');
                        $user_query=mysqli_query($conn,"select *  from ch_users where user_email='$id_session'")or die(mysqli_error($conn));
                        $row=mysqli_fetch_array($user_query); {
                    ?>
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $row['user_firstname']; ?></span>
                        <span class="caret"></span>
                    </button>
                    <?php } ?>
                <ul class="dropdown-menu">
                   <li><a href="user_profile.php"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </div>

            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->
        </div>
        
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li>
                        <a class="nav-item active" href="home.php"><i class="glyphicon glyphicon-home"></i><span> Home</span></a></li>
                        <li class="nav-item">
                            <a href="clients.php"><i class="glyphicon glyphicon-tasks"></i><span> Clients</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="companies.php"><i class="glyphicon glyphicon-tasks"></i><span>Companies</span></a>
                        </li>                        
                        <li class="nav-item">
                            <a href="training.php"><i class="glyphicon glyphicon-tasks"></i><span>Training</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="payments.php"><i class="glyphicon glyphicon-tasks"></i><span>Payments</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="communication.php"><i class="glyphicon glyphicon-tasks"></i><span>Communication</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="reporting.php"><i class="glyphicon glyphicon-tasks"></i><span>Reporting</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="settings.php" class="ajax-link"><i class="glyphicon glyphicon-tasks"></i><span>Settings</span></a>
                        </li>
					</ul>
                </div>
            </div>
        </div>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
        <?php } ?>


