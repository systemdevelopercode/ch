<?php
if(isset($_SESSION["admin"])){
  header("location:home.php");
}
//Setting visible_elements False
//SET VISIBLE_ELEMENTS OFF
$no_visible_elements = true; 
?>
<?php 
//#INCLUDE CONFIG DEFAULT TIMEZONE
include 'config.php' 

//#TRAINING START
?>
<!-- #HTML5 CONFIG -->
<!DOCTYPE html>
<!-- #LANGUAGE SETTING -->
<html lang="en">

<!-- #HEADER START-->
<head>
<!-- #META CONFIG -->
    <meta charset="utf-8">
    <title>Continental Horizon Training</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- #STYLE INCLUDE -->
    <!-- #CERULEAN -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <!-- #CHARISMA -->
    <link href="css/charisma-app.css" rel="stylesheet">
    <!-- #FULLCALENDAR -->
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <!-- #FULLCALENDAR PRINT -->
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <!-- #CHOSEN -->
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <!-- #COLORBOX -->
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <!-- #RESPONSIVE-TABLES -->
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <!-- #BOOTSTRAP-TOUR -->
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <!-- #NOTY -->
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <!-- #NOTY_THEME_DEFAULT -->
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <!-- #ELFINDER -->
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <!-- #ELFINDER THEME -->
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <!-- #JQUERY IPHONE TOGGLE -->
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <!-- #UPLOADIFY -->
    <link href='css/uploadify.css' rel='stylesheet'>
    <!-- #ANIMATE -->
    <link href='css/animate.min.css' rel='stylesheet'>

<!-- #JAVASCRIPT INCLUDE -->
    <!-- #JQUERY -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- #HTML5 shim: for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]:>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- #FAVICON icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
<!-- #HEADER END -->
</head>

    <!-- #WELL CENTER ALERT ALERT-INFO #COL-MD-5 LOGIN-HEADER TITLE-->
    <div class="well center">
    </div><!--/row-->
    <div class="col-md-12 center login-header">
            <h2 class="title">Continental Horizons Administration</h2>        
    </div>
    <!--#ROW -->
    <div class="row">

        <!-- #WELL COL-MD-5  CENTER LOGIN-BOX -->
        <div class="well col-md-5 center login-box">

            <!-- #ALERT ALERT-INFO -->
            <div class="alert alert-info">
                Please login with your Email Address and Password.
            </div>

            <!-- #FORM-HORIZONTAL-->
            <form class="form-horizontal" method="post" action="login.php">
                <fieldset>
                    <div style="margin-left:55px; width:350px;" class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                        <input type="email" name="email_address" class="form-control" placeholder="admin@ch.com" required>
                    </div>
                    <!-- #CLEARFIX-->
                    <div class="clearfix"></div><br>

                    <div style="margin-left:55px; width:350px;" class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock blue"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        
                    </div>
                    <div class="clearfix"></div>
					
                    <div class="clearfix"></div>
                    <p class="center col-md-5">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            <!--FORM-HORIZONTAL END-->
            </form>	

        <!-- #WELL COL-MD-5  CENTER LOGIN-BOX END-->		
        </div>

    <!-- #ROW END-->
    </div>

<!-- PLUGIN FOOTER-->	
<?php require('footer.php'); ?>