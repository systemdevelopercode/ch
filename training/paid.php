<?php 
    require('header.php'); 
    require('database.php');
?>
<!--
Get the Payment Status from paynow and Save Reference Numbers.
$status = $paynow->processStatusUpdate();

//Post the $paynow.processStatusUpdate() to paid.php for saving in database
$_POST["status"]=$status;

// In paid.php we receive the status object posted
//Check if the transaction was paid


-->
<section>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Payment Status</a>
        </li>
    </ul>
</section>

<section>
    <article class="center">
        <h3>Payment Status</h3>
        <hr>
        <p><?php
            if(isset($_POST["status"])){
                $hash=$_GET["encoded_hash"];

                $PAY_DATA=DecodeHash($hash);
                //DecodeHash  Should return an Array 

                $ClientEmail=$PAY_DATA["clientEmail"];
                $Training=$PAY_DATA["training"];
                $Amount=$PAY_DATA["amount"];

                //Get Payment Status and Check 
                if($status->paid()) {
                    $Status=status.status();
                    $reference =  $status->reference();
                    $paynowRef = $status->paynowReference()
                    ?>
                    <p>
                        <span class="center">
                            Payment State : <?php echo $Status ?><br>
                            Your Payment for <?php echo $Training;?><br> 
                            for <?php echo $Amount; ?> was Successful!<br>
                            with Reference number : <?php echo $reference; ?><br>
                            Please Save the Reference Number for Queries.<br>
                        </span>
                    </p>
                        <?php
                        // Update transaction in DB maybe? 
                        $paymentquery=mysql_query($conn,"INSERT INTO payments(client_email,client_programme,ref_no,method,amount) VALUES(...,'$reference',...)");
                        


                        // Get the reference of the Payment in paynow
                        $paynowReference = $status->paynowReference();
                 
                }
            }?>
        </p>
    <article>
</section>
    