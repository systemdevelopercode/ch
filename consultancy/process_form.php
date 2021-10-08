<?php
include "../training/include/database.php";
if(isset($_POST["submit"])){
    //get values fieldset 1
    $org_name=$_POST["org_name"];
    $contact_fullname=$_POST["contact_fullname"];
    $contact_email=$_POST["contact_email"];
    $contact_number=$_POST["contact_number"];
    //get values fieldset 2
    $org_mission=$_POST["org_mission"];
    $org_objectives=$_POST["org_objectives"];
    $org_description=$_POST["org_description"];
    //get values fieldset 3
    $project_envision=$_POST["project_envision"];
    $project_plan=$_POST["project_plan"];
    $project_consultancy=$_POST["project_consultancy"];

    //insert into table project
    $new=mysqli_query($conn,"INSERT INTO project(org_name,contact_fullname,contact_email,contact_number,org_mission,org_objectives,org_description,project_envision,project_plan,project_consultancy) VALUES('$org_name','$contact_fullname','$contact_email','$contact_number','$org_mission',' $org_objectives','$org_description','$project_envision','$project_plan','$project_consultancy')");
    if($new==false){
        //show failure message
        echo "Error Capturing Details";
    }
    else{
        //show success message to client
        echo '<script>alert("Your Information Have Been Submitted Check Your Mailbox");</script>';
        //send mail to client
        include("../mail.php");
        $subject="Project Kick-off Questionnaire";
        $msg="Thank you for submitting your organization and project information to Continental Horizons we will be in contact if you want us to visit you you can reply on this email address";
        SendMail($contact_email,$subject,$msg);
        //redirectto index
        header("location:../index.php");
    }
}
?>