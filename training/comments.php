<?php require ('include/database.php'); ?>
<?php
    try{
        //Programme comments.
        $pid=$_GET['id'];
        $pq=mysqli_query($conn,"SELECT * FROM programme WHERE programme_id='$pid'");
        $prow=mysqli_fetch_array($pq);
        //
        $prog_id=$prow['programme_id'];
        $comments=mysqli_query($conn,"SELECT * FROM comments WHERE programme_id='$prog_id' ORDER BY comment_created DESC");
        $comments_count=mysqli_num_rows($comments);
        if($comments_count<0){
        echo "No Comments Here";
        }
        else{
        while($crow=mysqli_fetch_array($comments)){
            $client_id=$crow['client_id'];
            $client_query=mysqli_query($conn,"SELECT client_firstname,client_lastname FROM clients WHERE client_id='$client_id'");
            $client_row=mysqli_fetch_array($client_query);
            $client_name=$client_row['client_lastname']." ".$client_row['client_firstname'];
            echo "<div class='pcomments'>";
            echo "<h4>".$client_name."</h4>";
            echo "<p>".$crow['comment_content']."</p>";
            echo "</div>";
        }
        }
    }
    catch(Exception $e){
        echo "Error Retrieving Comments";
    }
        
?>