<?php
if(isset($_GET['ref'])) {
$det = $_GET['det'];
$ref = $_GET['ref'];


$student = base64_decode($_GET['student']);


?>




<?php
$stmt = $auth_user->runQuery("SELECT * FROM `teachingsubjectallocation` WHERE `classname`='$student' AND `classdetails`='$det' AND `employeeid`='".$userRow['user_name']."' ");
$stmt->execute(array());
$teachingsubjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($teachingsubjectallocation as $teachingsubjectallocation) {
    ?>




<?php echo $teachingsubjectallocation->subjectname; ?>





<?php
$stmt = $auth_user->runQuery("SELECT * FROM `classes` WHERE `classname`='$student' AND `classdetails`='$det' ");
$stmt->execute(array());
$classes=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($classes as $classes) {
    ?>

<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / <?php echo $student.' '; ?><?php echo $det; ?> </h4>

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
    <h2>Full class list</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:20%;">Student Name</th>
                    <th style="width:10%;">Subject</th>
                    <th style="width:10%;">Marks</th>
                    <th style="width:10%;">Grade</th>
                </tr>
            </thead>
            <tbody>
        <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `class`='$student' AND `classdetails`='$det'  ");
            $stmt->execute(array());
            $students=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($students as $students) {
                ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?></td>
                     
                    <td><?php echo $teachingsubjectallocation->subjectname; ?></td>
                    <td>(78.89)</td>
                    <td>(A)</td>

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









<?php   
}
?>
