<?php 
include('header.php'); 
include('include/database.php');

//prefetch data
//Training Programmes
$p_query=mysqli_query($conn,"SELECT * FROM programme");
$programme=NULL;
if($p_query==false)
{
echo "Error in the query or there is no user ";
}
else{
    $programme=mysqli_fetch_array($p_query);
    if($programme==false){
        echo("Error Retrieving Programes");
    }
}
echo($programme["p_title"]);
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#"> Trending Trainings</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i>Trending Trainings</h2>

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
                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <div class="row">
                            <div class="col-sm-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg><br>
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
