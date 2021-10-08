<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Continental Horizon Training</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components\bootstrap\dist\js\bootstrap.min.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <style>/*
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
<?php require ('include/database.php'); ?>
<?php require ('session.php'); 
//IF IS NOT SET VISIBLE NO VISIBLE ELEMENTS
?>
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
            <a class="navbar-brand" href="home.php">
            <img src="../img/img/crop.png" width="80" height="80" alt="Site Logo" style="width:80;height:80;">
             <span style="font-size:20px;color:blue;">CONTINENTAL HORIZONS</span></a>
                
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <?php
                    include('include/database.php');
                    $user_query=mysqli_query($conn,"select *  from clients where client_id='$id_session'")or die(mysqli_error($conn));
                    $row=mysqli_fetch_array($user_query); {
                ?>
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo $row['client_firstname']; ?></span>
                        <span class="caret"></span>
                    </button>
                <?php } ?>
                <ul class="dropdown-menu">
                    <li><a href="profile.php"><i class="glyphicon glyphicon-user"></i>Profile</a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- title navbar ends -->
<?php } 
//START OF LEFT MENU BAR
?>
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
                            <a class="ajax-link" href="home.php"><i class="glyphicon glyphicon-home"></i><span> Home</span></a>
                        </li>
                        <li>
                            <a class="ajax-link" href="trending.php"><i class="glyphicon glyphicon-th-list"></i><span>Trending</span></a></li>
                        </li>
                        <li>
                            <a class="ajax-link" href="trainings.php"><i class="glyphicon glyphicon-th-list"></i><span>Programmes</span></a></li>
                        </li>
                        <li>
                            <a class="ajax-link" href="pay.php"><i class="glyphicon glyphicon-th-list"></i><span>Pay Fees</span></a></li>
                        </li>
                        <li>
                            <a class="ajax-link" href="payments.php"><i class="glyphicon glyphicon-th-list"></i><span>My Payments</span></a></li>
                        </li>
                        <li>
                            <a class="ajax-link" href="gcrooms.php"><i class="glyphicon glyphicon-th-list"></i><span>Training</span></a>
                        </li>
                        <li>
                            <a class="ajax-link" href="timetable.php"><i class="glyphicon glyphicon-th-list"></i><span>Timetable</span></a>
                        </li>                       
						<li><a class="ajax-link" href="profile.php"><i class="glyphicon glyphicon-bookmark"></i><span>Profile</span></a></li>
					</ul>
                </div>
            </div>
        </div>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
        <?php } ?>

