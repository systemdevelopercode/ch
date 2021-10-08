<?php
//$no_visible_elements = true; ?>

<?php include 'config.php' ?>
<?php include("indexheader.php"); ?>
<div class="container login">
    <div class="row ">
        <div class="box center col-md-5">
            <div class="box-inner">
                <div class="box-header">
                <span style="text-align:center;text-shadow:2px 3px 2px blue;font-size:medium;color:green;" class="animated rubberBand">Continental Horizons Account Recovery</span>
                </div>
                <div class="box-content"><br><br>
                <img class="center" src="img/continental_logo.png" alt="logo" height="140" width="140">
                <!-- #FORM-HORIZONTAL-->
                <form class="form-horizontal" method="post" action="login.php">
                    <fieldset>
                        <div style="margin-left:55px; width:350px;" class="input-group input-group-md">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                            <input type="text" name="clientemail" class="form-control" placeholder="client@gmail.com">
                        </div>
                        <div class="clearfix"></div><br>
                        <div class="clearfix"></div>
                        <p class="center col-md-5">
                            <button type="submit" name="recover_ac1" class="btn btn-primary">Recover Account</button>
                        </p>
                        <div class="alert alert-info">Have Account?<a href="index.php"><span>Login</span></a></div>
                    </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>	

<?php require('footer.php'); ?>