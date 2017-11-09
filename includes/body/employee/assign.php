<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];
?>
<?php
$stmt = $auth_user->runQuery("SELECT * FROM `employees` WHERE `employeeid`='$student' ");
$stmt->execute(array());
$employees=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($employees as $employees) {
    ?>



<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / <?php echo $employees->firstname.' '; ?><?php echo $employees->middlename; ?></h4>
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
                            <h2><?php echo $employees->firstname.' '; ?><?php echo $employees->middlename; ?></h2>
                            <h5>Kenyatta</h5>
                            <h5>23467823</h5>
                            <h4>Teacher</h4>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `employeeresponsibility` WHERE `employeeid`='$employees->employeeid' ");
                $stmt->execute(array());
                $employeeresponsibility=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($employeeresponsibility as $employeeresponsibility) {
                    ?>
                    <div class="alert alert-success">
                    <h2>
                    <?php echo $employeeresponsibility->classname.' '; ?>
                    <?php echo $employeeresponsibility->classdetails.' '; ?>
                    <?php echo $employeeresponsibility->responsibility; ?>
                    </h2>
                    </div>
                    <?php
                }
                ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
    if ($userRow['access_level'] == "master_admin")
    {
    //echo "FOUND ADMIN";
    ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel" style="min-height:350px;">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Allocate class and subjects </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <?php require_once 'includes/controllers/insert/assign.php'; ?>
                                <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php
                                            if(isset($error))
                                            {
                                                foreach($error as $error)
                                                {
                                                     ?>
                                                     <div class="alert alert-danger" style = "padding:1px;margin:1px;">
                                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                                     </div>
                                                     <?php
                                                }
                                            }
                                        ?>

                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="col-sm-12 col-md-12 col-xs-12">Class</label>
                                            <select class="select2_single form-control" name="classname" id="classname" required="required" tabindex="-1">
                                            <?php
                                            echo $ref;
                                                $stmt = $auth_user->runQuery("SELECT * FROM `teachingsubjectallocation` WHERE `employeeid`='$employees->employeeid' GROUP BY `classname` ");
                                                $stmt->execute(array());
                                                $teachingsubjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
                                                foreach ($teachingsubjectallocation as $teachingsubjectallocation) {
                                                    ?>
                                                    <option value="<?php echo $teachingsubjectallocation->classname; ?>"><?php echo $teachingsubjectallocation->classname; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <input type="hidden" id="employeeid" name="employeeid" value="<?php echo $student; ?>" class="form-control col-md-7 col-xs-12 "  />
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="col-sm-12 col-md-12 col-xs-12">Class details</label>
                                            <select class="select2_single form-control" name="classdetails" id="classdetails" required="required" tabindex="-1">
                                            <?php
                                                $stmt = $auth_user->runQuery("SELECT * FROM `teachingsubjectallocation` WHERE `employeeid`='$employees->employeeid' GROUP BY `classdetails` ");
                                                $stmt->execute(array());
                                                $teachingsubjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
                                                foreach ($teachingsubjectallocation as $teachingsubjectallocation) {
                                                    ?>
                                                    <option value="<?php echo $teachingsubjectallocation->classdetails; ?>"><?php echo $teachingsubjectallocation->classdetails; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label class="col-sm-12 col-md-12 col-xs-12">Responsibility</label>
                                            <select class="select2_single form-control" name="responsibility" id="responsibility" required="required" tabindex="-1">
                                                <option value="Class head">Class head</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                                            <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                                            <button type="submit" id="postresponsibility" name="postresponsibility" class="btn btn-success btn-lg">Allocate</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } 
    else if($userRow['access_level'] == "employee")
    {
    echo "FOUND EMPLOYEE";
    ?>

    <?php
    }
?>






<div class="x_panel">
    <div class="x_title">
        <h2>VIew classes</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:15%;">Subject</th>
                    <th style="width:15%;">Class</th>
                    <th style="width:15%;">Details</th>
                    <th style="width:15%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `teachingsubjectallocation` WHERE `employeeid`='$student' ");
                $stmt->execute(array());
                $teachingsubjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($teachingsubjectallocation as $teachingsubjectallocation) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $teachingsubjectallocation->subjectname; ?></td>
                        <td><?php echo $teachingsubjectallocation->classname; ?></td>
                        <td><?php echo $teachingsubjectallocation->classdetails; ?></td>
                        <td>
                        <?php
                        if($userRow['access_level'] == "employee"){
                            ?>
                        <a href="index/classlist/<?php echo $teachingsubjectallocation->classdetails; ?>/<?php echo base64_encode($teachingsubjectallocation->classname); ?>"><button type="button" class="btn btn-info btn-xs" style="width:100%;">VIEW</button></a>
                            <?php
                        }
                        ?>

                        </td>
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
?>
<?php   
}
?>