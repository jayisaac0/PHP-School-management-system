<?php
if(isset($_GET['ref'])) {
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
        <h4><blue>Home</blue> / Student/ <?php echo $students->firstname.' '; ?><?php echo $students->middlename; ?> (Class: <?php echo $students->class.' '; ?><?php echo $students->classdetails; ?>)</h4>
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




<div class="col-md-4 col-sm-4 col-xs-12">
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?><?php echo $students->lastname; ?><b class="pull-right"><?php echo $students->class.' '; ?><?php echo $students->classdetails.' '; ?><?php echo $students->studentid; ?></b>
                                </h2>
                                
                            </div>
                            

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

    $stmt = $auth_user->runQuery("SELECT * FROM `admisioncategory` ");
    $stmt->execute(array());
    $admisioncategory=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($admisioncategory as $admisioncategory) {
        if(strtolower($admisioncategory->category) == "primary")
        {
            //echo "FOUND";
            require_once 'level/primarymarks.php';
        }else if(strtolower($admisioncategory->category) == "high school")
        {
            //echo "Nothing";
            require_once 'level/highschoolmarks.php';
        }
    }

?>
             

    <?php
}
?>
<?php   
}
?>
