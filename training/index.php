<?php
//Setting visible_elements False
//SET VISIBLE_ELEMENTS OFF
//$no_visible_elements = true; 

?>
<!-- #WELL CENTER ALERT ALERT-INFO #COL-MD-5 LOGIN-HEADER TITLE-->
<?php include("indexheader.php"); ?>
<!--#ROW -->
<div class="container login">
<header class="page-header">
<h3>Continental Horizons Training</h3>
</header>
    <div class="row ">
        <div class="shadow-box box pull-center col-md-5">
            <div class="box-inner">
                <div class="box-header">
                <span style="text-align:center;text-shadow:2px 3px 2px blue;font-size:medium;color:green;" class="animated rubberBand">Continental Horizons Login</span>
                </div>
                <div class="box-content"><br><br>
                <img class="center" src="img/continental_logo.png" alt="logo" height="140" width="140">
                <!-- #FORM-HORIZONTAL-->
                <form class="form-horizontal" method="post" action="login.php">
                            <fieldset>

                                <!-- #INPUT-GROUP INPUT-GROUP-LG 
                                    #INPUT-GROUP-ADDON GLYPHICON GLYPHICON-USER RED 
                                    #FORM-CONTROL-->
                                <div style="margin-left:55px; width:350px;" class="input-group input-group-md">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                    <input type="email" name="email_address" class="email-input form-control" placeholder="email@address.com" required>
                                    <span class="validation-text" id="email-valid"></span>
                                </div>
                                <!-- #CLEARFIX-->
                                <div class="clearfix"></div><br>

                                <!-- #INPUT-GROUP INPUT-GROUP-LG 
                                    #INPUT-GROUP-ADDON GLYPHICON GLYPHICON-USER RED 
                                    #FORM-CONTROL-->
                                <div style="margin-left:55px; width:350px;" class="input-group input-group-md">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock blue"></i></span>
                                    <input type="password" name="password" class="pwd-input form-control" placeholder="password" required>
                                    <span class="validation-text" id="password-valid"></span>
                                </div>
                                <!--fix Forgot password to form control
                                    #PULL-RIGHT 
                                    #INPUT-GROUP-ADDON GLYPHICON GLYPHICON-USER RED 
                                    #FORM-CONTROL-->
                                <div style="margin-left:55px; width:350px;" class="pull-right"><a href="clientrecover.php">Forgot Password?</a></div>
                                <div class="clearfix"></div>
                                
                                <div class="clearfix"></div>

                                <!--login button
                                    #CENTER COL-MD-5
                                    #BTN BTN-PRIMARY-->
                                <p class="center col-md-5">
                                    <button type="submit" name="clogin" class="btn btn-primary">Login</button>
                                </p>
                            </fieldset>
                            <!--fix Forgot password to form control
                                    #ALERT ALERT-INFO-->
                            <div style="text-decoration:underline;color:green;" class="alert alert-info">Does not have Account?<a href="createclient.php"><span>Create Account</span></a></div>
                        
                        <!--FORM-HORIZONTAL END-->
                    </form>	
                </div>
            </div>
        </div>
    </div>
</div>	<!--
<script type="text/javascript" src="../js/script.js"></script>-->
<?php require('../footer.php'); ?>