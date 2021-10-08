
<?php  include('header.php'); ?>
<style>
    .welcome-msg{
        margin-left:25px;
        margin-top:25px;
    }
    .title-logo-img{
        margin-right:9px;
        padding-left:10px;*/
        padding-top:25px;
    }
    galleryPreviewContainer{
        border: 1px;
        border-radius:5px;
    }
    .fadeIn {
    animation: fadeIn 2s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 3;
        }
    }
    #welcome {
    position: relative;
    }

    #site-logo {
        position: absolute;
        /*bottom: 0;*/
    }
</style>
<?php  //include('testhead.php'); ?>
<?php require('training/include/database.php'); ?>
<div class="container" style="position:relative;z-index:-11;">

            <div class="row title">
    
                    <div class="page-header">
                        <h3 class="fadeIn">Welcome to Continental Horizons</h3>
                    </div>
                    <div class="jumbotron" id="welcome" style="position:relative;z-index:-11;">
                        <p>Continental Horizons training and development solutions offer your organization the opportunity to improve employee skills that will help achieve organizational goals.
                        In this increasingly competitive and challenging environment, 
                        it has become necessary to focus and validate core business strategy and execution plans to align processes with the right solutions and technology to enhance performance,
                        expand market shares and increase returns and investments.</p>
                  </div>
            </div>
            <div class="row">
                <div class="galleryPreviewContainer col-sm-12">
                    <h3 style="background-color:#fff;">Continental Horizons Gallery</h3>
                    <div class="galleryPreviewImage col-sm-12">
                        <?php
                            $imagesTotal = 8;     // SET TOTAL IMAGES IN GALLERY      
                            for ($i = 1; $i <= $imagesTotal; $i++) {
                                echo '<img class="previewImage' . $i . '" src="img/gallery/gallery_' . $i . '.jpg" width="900" height="420" alt="" />';
                            }
                        ?>
                    </div>
                    <div class="galleryNavigationBullets">
                            <?php
                                for ($b = 1; $b <= $imagesTotal; $b++) {
                                    echo '<a href="javascript: changeimage(' . $b . ')" class="galleryBullet' . $b . '"><span>Bullet</span></a> ';
                                }
                            ?>
                    </div>
                    <div class="galleryPreviewArrows">
                        <a href="#" class="previousSlideArrow">&lt;</a>
                        <a href="#" class="nextSlideArrow">&gt;</a>
                    </div>
                </div>
            </div>
            <div class="row">
            <hr>       
                    <h4 style="background-color:#fff;">CORPORATE TRAINING AND WORKSHOP PROGRAMS</h4>
                    <div class="jumbotron">
                        <p>Our workshops provide organizations
                                opportunities to improve employee morale,
                                motivation, satisfaction and performance.
                                As an organisation the workshops will
                                    enhance the effectiveness and efficiency
                                    of the organization’s output.  
                                    Every course we offer can be fully 
                                    tailored to your company’s culture and needs!</p>
                        </div>
                    <div class="col-sm-4"  style="background-color:#fff;"> 
                        <ul>
                            <li>Qualitative and Quantitative Data Techniques</li>
                            <li>Project planning, design and implementation</li>
                            <li>Training of Trainers (TOT)</li>
                            <li>Customer Service</li>
                        </ul>
                    </div>
                    <div class="col-sm-4"  style="background-color:#fff;"> 
                        <ul>
                            <li>Team Building</li>
                            <li>Emotional Intelligence</li>
                            <li>Grooming and Deportment</li>
                            <li>Gender mainstreaming</li>
                        </ul>
                    </div>
                    <div class="col-sm-4"  style="background-color:#fff;"> 
                        <ul>
                            <li>Forensic Victimology</li>
                            <li>Coaching and Mentorship</li>
                            <li>Communication Training</li>
                            <li>Change management</li>
                        </ul>
                    </div>
            </div>
            <div class="row"  style="background-color:#fff;">
                <div class="box col-sm-4">
                    <div class="box-inner" style="height:200px">
                        <div class="box-header">
                            <h4>Software Packages</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>SPSS</li>
                                <li>Qualitative Data Analysis (QDA)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box col-sm-4">
                    <div class="box-inner" style="height:200px">
                        <div class="box-header">
                            <h4>Consultancy</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>Sustainable Project Planning and Management</li>
                                <li>Project Monitoring & Evaluation</li>
                                <li>Leadership and People Management</li>
                                <li>Sustainable Project Proposal Writing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box col-sm-4">
                    <div class="box-inner"  style="height:200px">
                        <div class="box-header">
                            <h4>Non-Governmental Organization</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>Sustainable Project management</li>
                                <li>Project Monitoring and evaluation</li> 
                                <li>Proposal writing and resource mobilization</li>
                                <li>Project Finance & Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box col-sm-4">
                    <div class="box-inner" style="height:220px">
                        <div class="box-header">
                            <h4>Financial & Project Management Solutions</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>Project Management</li>
                                <li>Monitoring & Evaluation</li>
                                <li>Credit Management</li>
                                <li>Finance Management</li>
                                <li>Risk Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box col-sm-8 d-flex">
                    <div class="box-inner" style="height:220px">
                        <div class="box-header">
                            <h4>Sector and Committees Trainings</h4>
                        </div>
                        <div class="box-content">
                            <ul>
                                <li>Project management</li>
                                <li>Training of trainers</li>
                                <li>Strategic planning processes</li>
                                <li>Committee systems</li>
                                <li>Public finance management and budgeting processes</li>
                                <li>Gender mainstreaming</li>
                                <li>Forensic Victimology</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
           
            <div class="row">
                <section class="social-media">
                <div class="col-sm-2"> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                            <span class="text-secondary">Social Name</span>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-2"> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                            <span class="text-secondary">Social Name</span>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-2"> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                            <span class="text-secondary">Social Name</span>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-2"> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-primary"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                            <span class="text-secondary">Social Name</span>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-2"> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                            <span class="text-secondary">Social Name</span>
                        </li>
                    </ul>
                </div>
                </section>
            </div>
            <button type="button" style="position:fixed;bottom:-1;right:-1;" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-plus"></i>Subscribe to Newsletter</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Subscribe to Continental Horizons</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data" class="form-vertical" style="margin-left:60px;">                                   
                                <div class="form-group col-sm-7">    
                                        <input class="form-control" type="text" placeholder="First Name" name="f_name" required><br>
                                        <input class="form-control" type="text" placeholder="Last Name" name="l_name" required><br>                   
                                        <input class="form-control" type="email" placeholder="Email Address" name="email_address" required><br>
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Subscribe</button>
                                </div>
                            </form>	  
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<?php 
    if(isset($_POST["submit"])){
        $fname=$_POST["f_name"];
        $lname=$_POST["l_name"];
        $email=$_POST["email_address"];

        //validate email 

        //check already subscribed
        $check=mysqli_query($conn,"SELECT * FROM subscribers WHERE email='$email'");
        $check_count=mysqli_num_rows($check);
        if($check_count>0){
            $subject='Re Subscription';
            $message='You are already Subscribed';
            SendMail($email,$subject,$message);
            echo "<script>alert($message)</script>";
        }
        else{
            require_once("mail.php");
            //subscribe
            $subscriber=mysqli_query($conn,"INSERT INTO subscribers(fname,lname,email) VALUES('$fname','$lname','$email')") or die(mysqli_query($conn));
            $subject="Continental Horizons Email Subscription";
            $message='<div style="background-color:blue;color:yellow;">';
            $message.='<h4>Thank You ';
            $message.='$fname." ". $lname."</h4>"';
            SendMail($email,$subject,$message);
            echo "<script>alert('Thank you for Subscribing Please Check Your Email')</script>";
        }
    }
?>
<script type="text/javascript">
$('.box-contain').each(function () {
    var box = $(this),
        boxes = $(this).find('.box'),
        boxPaddingTop = $(boxes).css('padding-top'),
        boxPaddingBot = $(boxes).css('padding-bottom'),
        boxMarginTop = $(boxes).css('margin-top'),
        boxMarginBot = $(boxes).css('margin-bottom'),
        boxHeight = $(box).height(),
        boxSum = parseFloat(boxHeight) - parseFloat(boxPaddingTop) - parseFloat(boxPaddingBot) - parseFloat(boxMarginTop) - parseFloat(boxMarginBot);
    $(boxes).css("height", boxSum);
});

// Set image Total
var imagesTotal = <?php echo $imagesTotal; ?>;
// Set Initial Image
var currentImage = 1;

// Set thumbs total width
var thumbsTotalWidth = 0;

$('a.galleryBullet' + currentImage).addClass("active");
$('a.thumbnailsimage' + currentImage).addClass("active");


// SET WIDTH for THUMBNAILS CONTAINER
$(window).load(function() {
	$('.galleryThumbnails a img').each(function() {
		thumbsTotalWidth += $(this).width() + 10 + 8;
	});
	$('.galleryThumbnails').width(thumbsTotalWidth);
});


// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();

	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();

	return false;
});
// ===================


// BULLETS CODE
function changeimage(imageNumber) {
	$('img.previewImage' + currentImage).hide();
	currentImage = imageNumber;
	$('img.previewImage' + imageNumber).show();
	$('.galleryNavigationBullets a').removeClass("active");
	$('.galleryThumbnails a').removeClass("active");
	$('a.galleryBullet' + imageNumber).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
}
// ===================


// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
}

var slideTimer = setInterval(function() {autoChangeSlides(); }, 3000);
</script>
<?php include('footer.php'); ?>


