<?php  include('header.php'); ?>
<section class="container">
    <article class="page-header">
        <h3>Continental Horizons Consultancy Services</h3>
    </article>
    <article class="jumbotron">
        <p class="page-message">
            We are a consultancy and training organization offering consultancy to organizations on many various topics. As one of are strategies
            we develop and deliver a customized workshop to engage and equip employees with skills that helps improve productivity. 
            We also help in ways to reduce conflict at workplace. We help organization in projects by assisting in project proporsals , Project planning and also project Consultancy. Continental horizons do 
            follow-up and support on projects and all requests to ensure the objectives are achieved because we value every client relationship and we always strive to build lasting relationships.
            <br><br>
            You want us to assist you in your project fill in the Project Kick-Off Questionnaire and we will contact you as soon as possible.
            <br><a href="consultancy/index.php"><button class="btn btn-success">Fill Kick-Off Questionnaire</button></a>
            
        </p>
    </article>
</section>
<?php include('footer.php'); ?>






    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href='../css/styler.css' rel='stylesheet'>
    <link href='../css/style.css' rel='stylesheet'>
    <link href='../css/demo.css' rel='stylesheet'>
    <!-- Normalize CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <!-- Bootstrap 4 CSS -->
    <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    -->
    <link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">  
      
      <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
      <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
      <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
     <!-- Style CSS -->

    <!-- jQuery 
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    -->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <style>
    .nav-link{
        /*padding:10px;*/
        width:100px;
        height:50px;
        margin:5px;
        shadow:5px;
        margin-top:20px;
        margin-bottom:20px;
        font:"Times New Roman",;
    }
    .nav-link:hover{
        background:#661112;
    }
    .nav-item{
        list-style:none;
    }
    .container{
       /* margin-top:80px;*/
    }
    body {
        /*background-color: rgb(46, 168, 151);*/
      }
    h1,h2,h3,h4,h5,h6,p,span,li{
       /* color:green;*/
        /*color:blue;*/
    }
    .sticky-navbar {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        overflow: hidden;
        opacity: 0.9;
        z-index: 3;
    }
    </style>

</head>
<body>
<header>
    <img src="../img/img/crop.png" style="width:80;height:80;">
    <span style="font-size:30px;color:blue;">Continental Horizons</span>
    <sub>-we all work to help </sub></span>
</header>
<?php //require ('include/database.php'); ?>
<?php //require ('session.php'); ?>


<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

    <nav class="navbar navbar-inverse sticky-navbar"><!--navbar-fixed-top-->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<img class="navbar-brand" src="img/img/continental_logo.png" alt="continental" style="width:120px;height:100px;">
            -->
        <a class="navbar-brand" href="../index.php">Continental Horizons</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
                <li class="nav-item active">
                    <a class="nav-link btn btn-info" href="../index.php">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link btn btn-info" href="../training/index.php">Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="#">Consultancy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../partners.php">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../about.php">About-Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info" href="../contact-us.php">Contact-Us</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
<?php } ?>