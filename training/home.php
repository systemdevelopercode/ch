<?php require_once('session.php');?>
<?php require('header.php');?>
<?php require_once('include/database.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
    </ul>
</div>
<div class="breadcrumb">
    <span><h3>Welcome to Continental Horizons Training</h3></span>
</div>
    <!-- row welcome message -->
        <section class="box-inner col-md-12" style="padding-top:10px;">
            <section class="col-sm-12">
                <p>
                    This is your dashboard were you can view enrolled programmes, user details and account balance.
                </p>
            </section>
            <hr>
            <section class="row">
                <section class="col-sm-6" style="border:1px solid green;border-radius:5px;">
                    <h4>User Information</h4>
                    <article class="box-content user-info">
                        Name:<span>Full Name</span><br>
                        Email:<span>email@address.com</span><br>
                        Mobile Number:<span>mobile-number</span><br>
                    </article>
                </section>
                <section class="col-sm-6" style="border:1px solid green;border-radius:5px;">
                    <h4>Account Information</h4>
                    <article class="box-content user-info">
                        Account Name:<span>Full Name</span><br>
                        Email:<span>email@address.com</span><br>
                        Balance:<span>mobile-number</span><br>
                    </article>
                </section>
            </section>
        </section>
        <section class="box-inner col-sm-12"  style="padding:3px; margin:5px; border:1px solid green;border-radius:5px;">
            <h4>Enrolled Programme</h4>
            <section class="col-sm-12"> 
                <?php
                //Get Programme THE CLIENT IS ENROLLED
            $query=mysqli_query($conn,"SELECT * FROM training_enrollment WHERE client_id='$id_session'") or die(mysqli_error($conn));;
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_array($query)){
                $prog=$row['programme_id'];
                $prog_query=mysqli_query($conn,"SELECT * FROM programme WHERE programme_id='$prog'") or die(mysqli_error($conn));
                $programme=mysqli_fetch_array($prog_query);
                ?>
                <section>
                    <img src="img/Training.png" alt="Prog Img" style="width:80px;height:80px;">
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a class="col-sm-4" href="gcrooms.php"><button class="btn btn-success">Trainings</button></a>
                            <a class="col-sm-4" href="payments.php"><button class="btn btn-success">Payments</button></a>       
                        </div>
                        <div class="col-sm-6">
                            <span class="col-sm-8"></span>
                            <a class="col-sm-4" href="enrollments.php?prog=<?php echo $prog; ?>"><button class="btn btn-danger">De-Register</button></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Title :</h5><span> <?php echo $programme['p_title']; ?></span>
                        </div>
                        <div class="description col-sm-12">
                        <h5>Description :</h5><span> <?php echo $programme['p_description'];?></span>
                        </div>
                        <div class="skills col-sm-12">
                            <h5>Skills :</h5><span> <?php echo $programme['p_skills']; ?></span>               
                        </div>
                        <div class="col-sm-12">
                            <h5>Period :</h5><span> <?php echo $programme['training_duration']." week(s)"; ?></span>
                        </div>
                        <div class="col-sm-12">
                            <h5>Training Mode :</h5><span> <?php echo $programme['training_mode']; ?></span>
                        </div>
                    </div>
                </section>      
                <?php }
            }
            else{?>
                <section class="box-inner row">
                    <article class="col-sm-6">
                        <p>You are no Enrolled in any Training Programme</p>
                    </article>
                    <article class="col-sm-6">
                        <p>View <a href="trending.php">Trending Programmes</a> or <a href="trainings.php">all programmes.</a></p>
                    </article>
                </section>
            <?php } ?>
                <!-- Other Trainings-->
            </div>		
            <!-- end content here -->
        </section>
        <section class="row">
        <hr>
            <div class="col-sm-12">
                Visit <a href="https://www.isppme.com" target="blank">ISPPME Website for Online Courses </a>on Project Management, Monitoring and Evaluation from Certificate to Postgraduate Diploma.
            </div>
            <div class="col-sm-12">
                <span>For Additional Information you can email:info@isppme.com or<span>
                <span>Call +263 22 31011 or Whatsapp/Call +263 778 816 135</span>
            </div>
        </section>
        <!-- end column welcome message -->
<?php require('footer.php'); ?>
