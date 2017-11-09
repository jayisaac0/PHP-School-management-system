<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];

$student = $_GET['student'];
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


<div class="x_panel">
    <div class="x_title">
        <h2>My classes</h2>
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
                    <th style="width:15%;">No of students</th>
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
                        <td>50 Stdents</td>
                        <td><a href="index/sendassignment/<?php echo $teachingsubjectallocation->classdetails; ?>/<?php echo base64_encode($teachingsubjectallocation->classname); ?>"><button class="btn btn-primary btn-xs" style="width:100%;">Create assignment</button></a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




<div class="x_panel">
    <div class="x_title">
        <h2>View assignments</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a href="index/addstudent"><button class = "btn btn-primary">Add</button></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">ref</th>
                    <th style="width:50%;">Assignment title</th>
                    <th style="width:15%;">Due date</th>
                    <th style="width:10%;">Submissions</th>
                    <th style="width:15%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `assignments` WHERE `employeeid`='$student' ");
                $stmt->execute(array());
                $assignments=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($assignments as $assignments) {
                    ?>            
                        <tr>
                            <td>#<?php echo $assignments->assignmetntref; ?></td>
                            <td><?php echo substr($assignments->assignmenttite, 0, 150) ; ?></td>
                            <td><?php echo $assignments->duedate; ?></td>
                            <td>12</td>
                            <td><a href="index/submissions/<?php echo $assignments->assignmetntref; ?>"><button class="btn-primary btn-xs btn" style="width:100%;">VIEW</button></a></td>
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
