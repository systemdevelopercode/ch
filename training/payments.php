<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Payments</a>
        </li>
    </ul>
</div>
<?php
//$branch_id=$_GET['branch_id'];
//get name of branch and use this id in inserting department
?>
<div class="box-inner">
    <h4>Make Online Payment Using Paynow</h4>
    <img src="img/payment_types_badge.png" alt="paynow"><br>
    <a href="https://www.paynow.co.zw/continentalhorizons" target="blank"><button class="btn btn-info"> Goto Paynow</button></a>
</div>
<div class="row">
        <div class="box col-md-12">
            <!--box_inner-->
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <!---bOX HEADER TITLE--->
                    <h2><i class="glyphicon glyphicon-globe"></i> My Payments</h2>
                    <!---Box Icons--->
                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <!--End-Box-Header----Box-Body-Inner-Form-Control-->
                <div class="well col-sm-12">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        
                        <!--DISPLAY TABLE HEADER--->
                        <thead>
                            <tr>
                                <th>Program</th>
                                <th>Method</th>
                                <th>Currency</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <!--DISPLAY TABLE HEADER--->
                        <tbody>
                        <?php 
                        //TABLES
                        $PAY_TABLE="payments";
                        $PROG_TABLE="programme";

                        //SQL
                        //
                        //$client_result=mysqli_query($conn,$PAY_SQL);
                        $userdata=mysqli_query($conn,"SELECT client_emailaddress FROM clients WHERE client_id='id_session'") or  die(mysqli_error($conn));
                        $userarray=mysqli_fetch_array($userdata);
                        $user=$row['client_emailaddress'];
                        
                        //QUERY
                        
                        $PAY_SQL="SELECT * FROM $PAY_TABLE WHERE client_id='$id_session'";
                        $pay_result=mysqli_query($conn,$PAY_SQL);
                        
                        
                        //DISPLAY
                        if(mysqli_num_rows($pay_result)>0){
                            while($ppay_row=mysqli_fetch_array($pay_result)){ 
                                $pid=$ppay_row["programme_id"];
                                $progs=mysqli_query($conn,"SELECT * FROM programme WHERE programme_id='$pid'");
                                $prow=mysqli_fetch_array($progs);
                        ?>
                            <tr>
                                <td><?php echo($prow['p_title']); ?></td>
                                <td><?php echo($ppay_row["method"]); ?></td>
                                <td><?php echo($ppay_row["currency"]); ?></td>
                                <td><?php echo($ppay_row["amount"]); ?></td>
                                <td><?php echo($ppay_row["create_date"]); ?></td>
                            </tr>
                        <?php }
                        }
                        else{
                            echo "No Payments Made Yet";
                        }
                        //END DISPLAY_TABLE
                        ?>       
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--Close box-->
<?php include('footer.php'); ?>
