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
        <h2>My Assignments</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    
                    <th style="width:10%;">#</th>
                    <th style="width:50%;">Assignment title</th>
                    <th style="width:10%;">Marks</th>
                    <th style="width:10%;">Due date</th>
                    <th style="width:10%;">Teacher</th>
                    <th style="width:10%;">View</th>
                    <th style="width:10%;">Submisssion</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `assignments` WHERE `classname`='$students->class' AND `classdetails`='$students->classdetails'  ");
            $stmt->execute(array());
            $assignments=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($assignments as $assignments) {

            $stmt = $auth_user->runQuery("SELECT * FROM `employees` WHERE `employeeid`='$assignments->employeeid'  ");
            $stmt->execute(array());
            $employees=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($employees as $employees) {
            ?> 
            <tr>
                <td>#<?php echo $assignments->assignmetntref; ?></td>
                <td><?php echo substr($assignments->assignmenttite, 0, 100) ; ?>...</td>
                <td><?php echo $assignments->marks; ?></td>
                <td><?php echo $assignments->duedate; ?></td>
                <td><?php echo $employees->firstname.' '; ?><?php echo $employees->middlename; ?></td>
                <td><a href="index/workout/<?php echo $assignments->assignmetntref; ?>"><button type="button" class="btn btn-info btn-xs" style="width:100%;">Workout</button></a></td>

                <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `assignmentreplies` WHERE `assignmetntref`='$assignments->assignmetntref'  ");
                $stmt->execute(array());
                $assignmentreplies=$stmt->fetchAll(PDO::FETCH_OBJ);
                //foreach ($assignmentreplies as $assignmentreplies) {
                    if($stmt->rowCount() == 1){
                        ?>
                        <td><a><button type="button" class="btn btn-success btn-xs" style="width:100%;">Submitted</button></a></td>
                        <?php
                    }else {
                        ?>
                        <td><a><button type="button" class="btn btn-warning btn-xs" style="width:100%;">Not submitted</button></a></td>
                        <?php
                    }
                //}
                ?> 
                
            </tr>
            <?php
            }
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