<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];
?>
<?php
$stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='$student' ");
$stmt->execute(array());
$students=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($students as $students) {

$stmt = $auth_user->runQuery("SELECT * FROM `schoolsession` ORDER BY `time_created` DESC LIMIT 1  ");
$stmt->execute(array());
$schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($schoolsession as $schoolsession) {     
    ?>


<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Username</h4>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>




<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Profile </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <img src="images/logo.gif" alt="" style="background:black;width:200px;height:200px;border-radius:200px;" class="caption thumbnail col-md-6 col-sm-6 col-xs-12" />
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Name: <?php echo $students->studenttitle.' '; ?><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?><?php echo $students->lastname; ?></h2>
                            <h4>Student ID: <?php echo $students->studentid; ?></h4>
                            <h4>Gender: <?php echo $students->gender; ?></h4>
                            <h4>E-mail: <?php echo $students->studentemail; ?></h4>
                            <h4>Phone number: <?php echo $students->mobilenumber; ?></h4>
                            <h4>Date of birth: <?php echo $students->dateofbirth; ?></h4>
                            <h4>Nationality: <?php echo $students->nationality; ?></h4>
                            <h4>Class: <?php echo $students->class.' '; ?><?php echo $students->classdetails; ?></h4>
                           </div>
                            

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Enrolled </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                        <table class="table dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width:20%;">SUBJECT</th>
                                    <th style="width:20%;">SUBJECT CODE</th>
                                    <th style="width:20%;">Student Firstname</th>
                                </tr>
                            </thead>
                            <tbody>
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `subjectallocation` WHERE `studentid`='$student'  ");
            $stmt->execute(array());
            $subjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($subjectallocation as $subjectallocation) {
                ?> 
                                <tr>
                                    <td><?php echo $subjectallocation->subject; ?></td>
                                    <td><button class="btn btn-xs btn-primary" style="width:100%;">
                                        
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `subjects` WHERE `subject`='$subjectallocation->subject'  ");
            $stmt->execute(array());
            $subjects=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($subjects as $subjects) {
                echo $subjects->subjectcode;
                }
            ?>                                          

                                    </button></td>
                                    <td><a><button class="btn btn-xs btn-primary" style="width:100%;"></button></a></td>
                                </tr>                
                <?php
                }
            ?>  



                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<div class="x_panel">
    <div class="x_title">
        <h2>All Exam results </h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:15%;">Student id</th>
                    <th style="width:15%;">Class</th>
                    <th style="width:15%;">Class details</th>
                    <th style="width:15%;">Term</th>
                    <th style="width:15%;">Year</th>
                    <th style="width:15%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `primaryschoolmarks` WHERE `studentid`='$student' AND `year`='".date('Y')."'  ");
            $stmt->execute(array());
            $primaryschoolmarks=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($primaryschoolmarks as $primaryschoolmarks) {
                ?> 
                <tr>
                    <td>1</td>
                    <td><?php echo $primaryschoolmarks->studentid; ?></td>
                    <td><a><?php echo $primaryschoolmarks->classname; ?></a></td>
                    <td><a><?php echo $primaryschoolmarks->classdetails; ?></a></td>
                    <td><a><?php echo $primaryschoolmarks->term; ?></a></td>
                    <td><a><?php echo $primaryschoolmarks->year; ?></a></td>
                    <td><a href="index/savedpeformance/<?php echo $primaryschoolmarks->primaryschoolmarks_id ?>"><button type="button" class="btn btn-info btn-xs" style="width:100%;">View</button></a></td>
                </tr>
                <?php
                }
            ?>  
            </tbody>
        </table>
    </div>
</div>



    <?php
}
}
?>
<?php   
}
?>