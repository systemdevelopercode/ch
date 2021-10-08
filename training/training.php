<?php require('header.php'); ?>
<style>
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    main{
        padding:0%;
        margin: 5%;
        display: block;
        min-height: 30vh;
        min-width: 100vh;
    }
    .comment-section{
        max-height: 30vh;
        max-width: 100%;
        background-color: #fff;
        overflow-y:scroll;
    }
    .comment{
        height: 10%;
        padding: 2%;
        margin: 2%;
        background-color: #fff;
        color: blue;
    }
  
</style>
<?php 
  $pid=$_GET['id'];
  $pq=mysqli_query($conn,"SELECT * FROM programme WHERE programme_id='$pid'");
  $prow=mysqli_fetch_array($pq);
?>
<div class="container">
  <div class="row">
    <div class="breadcrumb col-md-10">
        <ul class="breadcrumb" style="text-decoration:underline">
            <li>
                <a href="home.php">Home</a> >>
                <a href="#">Training</a>
            </li>
        </ul>
    </div>
  </div>
    <div class="box">
      <div class="box-inner">

        <div class="box-header" data-original-title="">
            <h2><i class="glyphicon glyphicon-th"></i> Training</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round btn-default">
                <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
            </div>
        </div>

        <div class="box-content">        
          
          <div class="row">

            <div class="col-md-4 card  card-body">

              <div class="d-flex flex-column align-items-center text-center">
                <img src="img/Training.png" alt="Training Image" class="square" width="150">
                <div class="">
                  <h4><?php echo $prow['p_title']; ?></h4>
                  <p class="text-secondary mb-1">Training Category</p>
                  <div class="raty"></div>
                </div>
                <div>
                <a href="https://www.facebook.com/"><button class="btn btn-success">Follow</button></a>
                <a href="enrollment.php?prog=<?php echo $prow['programme_id'];?>"><button class="btn btn-primary">Enroll</button></a>
                </div>
                <div class="clear-fix"></div>

              </div>

              <div class="card mt-6">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">{{twitter_channel}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">{{instagram_channel}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">{{facebook_page}}</span>
                  </li>
                </ul>
              </div>

            </div>

            <!--End of Left Card-->

            <div class="col-md-8 card card-body">

              <div class="row col-sm-6">               
                <h4>Description</h4>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <p class=""><?php echo $prow['p_description']; ?></p>
                </div>
              </div>

              <div class="row col-sm-6">
                  <h4>Skills</h4>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <p class="mb-0"><?php echo $prow['p_title']; ?></p>
                </div>
              </div>

              <div class="row col-sm-6"">
                  <h4>Comments</h4>
                  <br><hr>
                  <main>
                    <div class="comment-section">
                   <?php include("comments.php"); ?>
                    </div>
                    <div class="form-group">
                    <form class="horizontal-form" method="POST" action="">
                      <textarea class="form-control" name="client_comment"></textarea>
                      <button name="comment_button" type="submit" class="btn btn-info pull-left">Comment</button>
                    </form>
                  <div>
                  </main>

                </div>

              </div>

              <hr>
            </div>
            
              </div>
            </div>
          </div>
        </div>
    <!--/row-->

</div>
</div>
</div>
</div>
<!-- End Container -->
<?php
if(isset($_POST['comment_button'])){
  $prog=$prow['programme_id'];
  $client=
  $content=$_POST['client_comment'];
  try{
    $comment_result=mysqli_query($conn,"INSERT INTO comments(client_id,programme_id,comment_content,comment_created) VALUES('$client','$prog','$content',NOW())");
    echo "<script>$('.pcomments').load('comments.php?id=$prog');</script>";
  }
  catch(Exception $e){
      echo "Error While Uploading Comment";
  }

}
?>
<?php require('footer.php'); ?>








