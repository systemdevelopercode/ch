<?php include('header.php'); 


$ID=$id_session;


?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Update Password</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i>Update Password</h2>

                <div class="box-icon">
                <!---    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- Start content here -->
			

<?php
  $query=mysqli_query($conn,"select * from clients where client_id='$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>					
					<form method="post" enctype="multipart/form-data" class="form-horizontal" style="margin-left:250px;">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Old Password</label>
						<div class="col-sm-4">
						  <input type="password" name="old_password" value="" class="form-control" id="inputEmail3" placeholder="" required />
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">New Password</label>
						<div class="col-sm-4">
						  <input type="password" name="new_password" value="" class="form-control" id="inputPassword3" placeholder="" required />
						</div>
						</div>
						<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label">Confirm Password</label>
						<div class="col-sm-4">
						  <input type="password" name="confirm_password" value="" class="form-control" id="inputPassword3" placeholder="" required />
						</div>
						</div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-label"></label>
						<div class="col-sm-7">
						  <button type="submit" name="update" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Change</button>
						</div>
					  </div>
					</form>
</div>
							
<?php
$id =$id_session;
if (isset($_POST['update'])) {

						$old=$_POST['old_password'];
						$new=$_POST['new_password'];
						$confirm=$_POST['confirm_password'];

$user_record=mysqli_query($conn,"select * from clients where client_id='$id_session'");
$row=mysqli_fetch_array($user_record);
$pwd=$row['client_password'];
if($old==$pwd){
	mysqli_query($conn," UPDATE clients SET client_password='$new'") or die(mysqli_error($conn)); 
	echo "<script>alert('Password Updated Successfully!'); window.location='profile.php'</script>";
}
else{
	echo "<script>alert('Wrong Password to Update!');</script>";
}
}

?>
					
                <!-- End content here -->
            </div>
        </div>
    </div>
</div><!--/row-->


<?php include('footer.php'); ?>
