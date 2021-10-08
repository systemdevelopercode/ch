<?php include('header.php'); ?>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Training Timetable</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-th-list"></i> Training Timetable</h2>

                <div class="box-icon">
                 <!---   <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a> -->
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <!-- Start content here -->
            <div class="box-content alert alert-info">
            <div class="col-sm-12 well"> 
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <div class="row">
                            <div class="col-sm-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg><br>
                                <h5></span>{{Training Programme Title}}<span></h5>
                                <h6></span>{{Training Title}}<span></h6>
                            </div>
                            <div>
                                <table>
                                    <thead>
                                        <th class="col-sm-3">Date</th>
                                        <th class="col-sm-3">Time</th>
                                        <th class="col-sm-3">Hours</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-sm-3">{{Training Date}}</td>
                                            <td class="col-sm-3">{{Training Time}}</td>
                                            <td class="col-sm-3">{{Entry Hours}}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-3">{{Training Date}}</td>
                                            <td class="col-sm-3">{{Training Time}}</td>
                                            <td class="col-sm-3">{{Entry Hours}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <!-- Other Trainings-->
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <div class="row">
                            <div class="col-sm-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg><br>
                                <h5></span>{{Training Programme Title}}<span></h5>
                                <h6></span>{{Training Title}}<span></h6>
                            </div>
                            <div>
                                <table>
                                    <thead>
                                        <th class="col-sm-3">Date</th>
                                        <th class="col-sm-3">Time</th>
                                        <th class="col-sm-3">Hours</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-sm-3">{{Training Date}}</td>
                                            <td class="col-sm-3">{{Training Time}}</td>
                                            <td class="col-sm-3">{{Entry Hours}}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-3">{{Training Date}}</td>
                                            <td class="col-sm-3">{{Training Time}}</td>
                                            <td class="col-sm-3">{{Entry Hours}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>		
                <!-- end content here -->
                <!-- end content here -->
            </div>
        </div>
    </div>
</div><!--/row-->
<?php include('footer.php'); ?>
