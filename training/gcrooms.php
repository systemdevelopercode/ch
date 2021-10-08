<?php 
include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Training</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">

            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Training Rooms</h2>

                <div class="box-icon">
                    <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>

            <div class="box-content">
                <!---<form method="POST" action="#">-->
                <!-- Start content here -->

                <div class="box-content alert alert-info">
                    <div class="col-sm-12 well"> 
                        <?php
                        //Google Classroom Invite Link set by Administration on Training Creation
                        $enrollquery=mysqli_query($conn,"SELECT * FROM training_enrollment WHERE client_id='$id_session'") or die(mysqli_error($conn));;
                        //if you are enrolled balance becomes course balance
                        //if  you pay we deduct amount from balance
                        //if balance is less than or = 0 you can start training
                        //this depends according to administration
                        $payquery=mysqli_query($conn,"SELECT * FROM account WHERE client_id='$id_session'");
                        $count=mysqli_num_rows($payquery);
                        
                        //check enrollment then payment
                        $e_count=mysqli_num_rows($enrollquery);
                        $payresult=mysqli_fetch_array($payquery);
                        if($e_count>0){
                            $account_balance=$payresult['account_balance'];
                            if($account_balance<=0.0){
                                $enroll_row=mysqli_fetch_array($enrollquery);
                                //get enrolled programme
                                $prog=$enroll_row['programme_id'];
                                //get training data and class url 
                                $query=mysqli_query($conn,"SELECT * FROM training WHERE training_programme='$prog' and training_client='$id_session'");
                                //check training entry entries that are done after required amount is paid
                                $t_count=mysqli_num_rows($query);
                                if($t_count>0){
                                    //get training data
                                    $row=mysqli_fetch_array($query);
                                    $prog_id=$row['training_programme'];
                                    $TrainingRoomUrl=$row['training_url'];
                                    $TrainingDuration=$row['training_duration'];
                                    $pquery=mysqli_query($conn,"SELECT * FROM programme WHERE programme_id='$prog_id'");
                                    $p_count=mysqli_num_rows($pquery);
                                    if($p_count>0){
                                        //get programme data
                                        $rrow=mysqli_fetch_array($pquery);
                                        $TrainingTitle=$rrow['p_title'];
                                        $TrainingDescription=$rrow['p_description'];
                                        $TrainingSkills=$rrow['p_skills'];
                                
                                    ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.6 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg><br>
                                    <a href="<?php echo $TrainingRoomUrl; ?>"><button class="btn btn-success">Training Room</button></a>
                                </div>
                                <div class="col-sm-9">
                                <h6>Duration:
                                        </span><?php echo $TrainingDuration." Week(s)"; ?><span>
                                    </h6>
                                    <h6>Training :
                                        </span><?php echo $TrainingTitle; ?><span>
                                    </h6>
                                    <h6>Description :</span> <?php echo $TrainingDescription; ?><span></h6>
                                    <h6>Skills : </span><?php echo $TrainingSkills; ?><span></h6>               
                                </div>
                            </div>
                         <div>   		
                    <!-- end content here -->
                    <?php
                                        }
                                        else{
                                            echo "Error Retrieving Programme details";
                                        }
                                    }
                                    else{
                                        echo "Error Retrieving Training Details";
                                    }  
                                }
                                else{
                                echo "You Must Pay Training Fee Before Training<br>Balance : \$US".$account_balance;
                                }
                            }
                            else{
                              echo "No Training Enrollments Made";
                            }
                    ?>
                <!----</div> -->
            </div>
        </div>
    </div><!--/row-->
</div>	
<hr>	
<?php include('footer.php'); ?>
