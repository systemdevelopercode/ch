<?php require('header.php'); 
 require('notice.php');
?>

    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Payment</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="box col-sm-6">
            <div class="box-inner" style="height:300px;">
                <!---Box Header-->
                <div class="box-header">
                    <h2>Banking Details</h2>
                </div>
                <!--Box Content-->
                <div class="box-content">         
                    <h4>Steward Bank (NOSTRO FCA)</h4>
                    <p>Branch        : Gweru<br>
                    Account Number: 1036970401</p><br>
                    <hr>
                    <h4>Steward Bank (ZWL Account)</h4>
                    <p>Branch        : Gweru<br>
                    Account Number: 1036970328</p><br>
                </div>
            </div>
        </div>

        <div class="box col-sm-6">
            <div class="box-inner" style="height:300px;">
                <div class="box-header">
                        <h4>Online Payments: Paynow</h4>
                </div>
                <div class="box-content">
                        <ul>
                            <li>Visa card</li>
                            <li>MasterCard</li>
                            <li>Zimswitch</li>
                            <li>Ecocash</li>
                            <li>Telecash</li>
                            <li>OneMoney</li>
                        </ul>
                        <a href="https://www.paynow.co.zw/continentalhorizons" target="blank"><img src="img/payment_types_badge.png" alt="payments types" style="height;60px width:auto;"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header">
                    <h2><i class="glyphicon glyphicon-globe"></i> Pay Fees</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content control-group col-sm-6">
                <form method="POST" action=" https://www.paynow.co.zw/interface/remotetransaction">
                    <label class="control-label" for="P_Training">Select Training</label>

                    <div class="controls">
                        <select data-placeholder="Select Training" id="P_Training" name="P_Training" data-rel="chosen" required>
                            <option value="Training">Default Training</option>
                            <?php 
                            $query=mysqli_query($conn,"SELECT * FROM programme");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <option><?php echo $row['p_title']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label class="control-label" for="P_Method">Training Payment Method</label>

                    <div class="controls">
                        <select data-placeholder="Select Method" id="P_Method" name="P_Method" data-rel="chosen" required>
                            <option value=""></option>
                            <optgroup label="Paynow">
                                <option>Mobile</option>
                                <option>Bank</option>
                            </optgroup>
                        </select>
                    </div>
                    <label class="control-label" for="P_Amount">Mobile No</label>
                    <div class="controls">
                        <input type="text" name="P_Mobile" class="form-control" id="amount" required>
                    </div>
                    <label class="control-label" for="P_Amount">Amount</label>
                    <div class="controls">
                        <input type="text" name="P_Amount" class="form-control" id="amount" required>
                    </div>
                    <div class="controls">
                        <button type="submit" class="btn btn-success" name="PayBtn" class="form-control" id="PayBtn">Pay Now</button>
                    </div>
                </form>
                </div>
                <div class="box control-group col-sm-6">
                    <h4>Upload Proof of Payment</h4><hr>
                    <form method="POST" action="" enctype="multipart/form-data">
                    <label class="control-label" for="P_Amount">Reference Number</label>
                    <div class="controls">
                        <input type="text" name="pay_refno" class="form-control" id="reference" required>
                    </div>
                    <label class="control-label" for="P_Amount">Payment Proof</label>
                    <div class="controls">
                        <input type="file" name="payproof" class="form-control" id="proof_file" required>
                    </div>
                    <div class="controls">
                        <button type="submit" class="btn btn-success" name="PayProof" class="form-control" id="PayBtn">Upload Now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
 </div>   
<?php require('footer.php'); ?>
<?php

if(isset($_POST['PayProof'])) {
    $ref=$_POST['pay_refno'];
    $client_id=$_SESSION['id'];
    $prog=-1;
    $co_id=-1;
    if(isset($_SESSION['programme'])){
        $prog=$_SESSION['programme'];
    }
    // directory to upload to
    $target_dir = "../uploads/proof_of_payments/";
    // file to be uploaded
    // print_r($_FILES);
    $target_file = $target_dir . basename($_FILES["payproof"]["name"]);
    //Upload status
    $uploadOk = 1;
    //document file types allowed Images png,jpg and pdf scanned
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file already exists
    if (file_exists($target_file)) {
        Message("The Proof of Payment Already Exists.");
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["payproof"]["size"] > 500000) {
        Message("Sorry, your file is too large.");
        $uploadOk = 0;


    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        Message("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        $uploadOk = 0;
    }
    //Verify Images
    $check = getimagesize($_FILES["payproof"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        Message("File is not an image.");
        $uploadOk = 0;
    }
    //Actual Upload 
    try{          
    // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            Message("Sorry, your file can not be uploaded.");
        // if everything is ok, try to upload file
        } 
        else {
            //Insert file path , timestamp and pop_id
            //mysqli_queryd
            $chk=mysqli_query($conn,"SELECT * FROM proof_of_payments WHERE proof_refno='$ref'");
            $count=mysqli_num_rows($chk);
            if($count<1){
                if (move_uploaded_file($_FILES["payproof"]["tmp_name"], $target_file)) {
                    Message("The file ". htmlspecialchars( basename( $_FILES["payproof"]["name"])). " has been uploaded.");
                    mysqli_query($conn,"INSERT INTO proof_of_payments(proof_refno,client_id,co_id,programme_id,proof_upload_doc,proof_upload_date) VALUES('$ref','$client_id','$co_id','$prog','$target_file',NOW())");
                    Message("Proof of Payment Saved");
                }
                else {
                    Message("Sorry, there was an error uploading your file.");
                }
            }
            else{
                Message("Proof of Payment With This Reference Already Exist");
            }
        }
    }
    catch(Exception $e){
        Message("Error Uploading File");
    }
}

?>
<?php
require_once 'vendor/autoload.php';
$paynow = new Paynow\Payments\Paynow(
	'12575',
	'943fc23a-b338-4e2a-b649-bb07f00d61d7',
	'https://www.paynow.co.zw/isppme',

	// The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
	'http://example.com/return?gateway=paynow'
);
if(isset($_POST['PayBtn'])){
    try{
        $pay_amount=$_POST['P_Amount'];
        $mobile=$_POST['P_Mobile'];
        $program=$_POST['P_Training'];
        $method=$_POST['P_Method'];
        $client_email=$_SESSION['email'];
        $payment = $paynow->createPayment($client_email,$client_email);
        $payment->add($program, $pay_amount);
        $response=null;
        if($method!="Bank"){
            echo  "Paynow Ecocash";
            https://www.paynow.co.zw/interface/remotetransaction
            $response = $paynow->sendMobile($payment, $mobile, $method);
        }
        else{
            echo "Paynow Bank";
            $response = $paynow->send($payment);
        }
        if($response->success()) {
            // Or if you prefer more control, get the link to redirect the user to, then use it as you see fit
            $link = $response->redirectUrl();
            // Get the poll url (used to check the status of a transaction). You might want to save this in your DB
            $pollUrl = $response->pollUrl();

            //$status=$response->pollTransaction($pollUrl);
            //echo $status;

            //go to redirect link after payment successful
            RedirectTo($link);
            //echo "<a href='$link'>Click here to make payment of $payment->total</a>";
            if(isset($_GET['paynow-return'])){
                echo "<script>
                alert('Thank you for your payment!');
                </script>";
                //Save to database
                $paymentquery=mysql_query($conn,"INSERT INTO payments(client_email,client_programme,ref_no,method,amount) VALUES()");
           
            }
        }
        else{
            Message("Response Error");
        }
    }
    catch(exception $e){
        Message($e);
    }
}
?>