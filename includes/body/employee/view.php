<?php
if(isset($_GET['ref'])) {
$student = $_GET['student'];
$ref = $_GET['ref'];

?>

<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / <?php echo $student; ?></h4>
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





    <?php
    $stmt = $auth_user->runQuery("SELECT * FROM `assignmentreplies` WHERE `assignmetntref`='$student'  ");
    $stmt->execute(array());
    $assignmentreplies=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($assignmentreplies as $assignmentreplies) {

            $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='$assignmentreplies->studentid'  ");
            $stmt->execute(array());
            $students=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($students as $students) {
        ?> 


<div class="x_panel">
    <div class="x_title">
        <h2><?php echo $students->firstname.' '; ?><?php echo $students->middlename; ?></h2>
        <i class="pull-right"><?php echo $students->class.' '; ?><?php echo $students->classdetails; ?></i>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:100%;">
                    <?php echo $assignmentreplies->title; ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div style="white-space:pre-wrap;word-wrap:break-word;"><?php echo $assignmentreplies->typedassignmentreply; ?></div></td>
                </tr>
                <tr>
                    <td> </td>
                </tr>
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