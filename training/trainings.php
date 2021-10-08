<?php 
include('header.php'); 
include('include/database.php');
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#"> Trainings</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i>Trainings</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
				-->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <!-- Start content here -->
            <div class="box-content alert alert-info">
            <div class="col-sm-12 well"> 
                    <ul class="list-group list-group-flush">
                    <?php
                    //Get Programme List 
                    $query=mysqli_query($conn,"SELECT * FROM programme");
                    while($row=mysqli_fetch_array($query)){
                    $prog=$row['programme_id'];
                    $fee_query=mysqli_query($conn,"SELECT fee_amount FROM programme_fees WHERE programme_id='$prog'") or die(mysqli_error($conn));
                    $fees=mysqli_fetch_array($fee_query);
                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="" alt="Prog Img" style="width:80px;height:80px;">
                                <br>
                                <?php echo "<h6>Fees : US$".$fees['fee_amount']."</h6>"; ?>
                                <br>
                                <a href="training.php?id=<?php echo $row['programme_id'];?>"><button class="btn btn-success">Review</button></a>
                                <a href="enrollment.php?prog=<?php echo $row['programme_id'];?>"><button class="btn btn-success">Enroll</button></a>
                            </div>
                            <div class="col-sm-9">
                                <h5>Title :</span><h6> <?php echo $row['p_title']; ?></h6><span></h5>
                                <h5>Description :</span> <?php echo $row['p_description'];?></h6><span></h5>
                                <h5>Skills : </span> <?php echo $row['p_skills']; ?></h6><span></h6>               
                            </div>
                        </div>
                    </li>      
                    <?php } ?>
                    <!-- Other Trainings-->
                    </ul>
                </div>		
                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->
<?php include('footer.php'); ?>
