<?php
/*
This File Processes Training Programme Enrollments for Logged in user/client
After the Training is Over the 
system must set the enrollment status to non zero to indicate finished training
so that the client is allowed to enroll in another training.
*/
require('include/database.php'); 
require('session.php'); 
?>
<?php
try
{
    //Get client ID
    $client_id=$_SESSION["id"];
    //Get Training Id
    $programme_id=$_GET["prog"];
    $_SESSION['programme']=$programme_id;
    //Enroll client in Training
    $check_enroll=mysqli_query($conn,"SELECT * FROM training_enrollment WHERE client_id='$client_id' and programme_id='$programme_id'") or die(mysqli_error($conn));
    $check_enroll_count=mysqli_num_rows($check_enroll);
    $check_status=mysqli_query($conn,"SELECT * FROM training_enrollment WHERE enroll_status=0") or die(mysqli_error($conn));
    $check_status_count=mysqli_num_rows($check_status);
    if($check_enroll_count>0){
        //already enrolled return to programmes
        echo "<script>alert('You are already Enrolled in this Training Programme'); window.location='trainings.php'</script>";

    }
    elseif($check_status_count>0){
        echo "<script>alert('You are not allowed to do More than 1 Training at a Time'); window.location='trainings.php'</script>";   
    }
    else{
        //enroll client
        $enroll=mysqli_query($conn,"INSERT INTO training_enrollment(client_id,programme_id,enroll_date) VALUES('$client_id','$programme_id',NOW())") or die(mysqli_error($conn));			
        //get enrollment training balance
        $qbal=mysqli_query($conn,"SELECT fee_amount FROM programme_fees WHERE programme_id='$programme_id'") or  die(mysqli_error($conn));
        $qbal_data=mysqli_fetch_array($qbal);
        $balance=0.0;
        $bal_plus=$qbal_data['fee_amount'];

        //check if already have account and retrieve balance 
        $chk_sql=mysqli_query($conn,"SELECT * FROM account WHERE client_id='$client_id'") or die(mysqli_error($conn));
        $chk_count=mysqli_num_rows($chk_sql);
        if($chk_count>0){
            $acc_data=mysqli_fetch_array($chk_sql);
            $current_balance=$acc_data['account_balance'];
            $balance=$current_balance+$bal_plus;
            mysqli_query($conn,"UPDATE account SET account_balance='$balance' WHERE client_id='$client_id'") or die(mysqli_error($conn));
        }
        else{
            $balance=$bal_plus;
            $account=mysqli_query($conn, "INSERT INTO account (client_id, account_type,account_balance) VALUES ('$client_id', '0', '$balance')") or die (mysqli_error($conn));
        }
        echo "<script>alert('You are now enrolled in this Training'); window.location='pay.php'</script>";
    }
}
catch(Exception $e){

}

?>