<?php
if(isset($_GET['subject'])) {
$subject = $_GET['subject'];
?>

            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `subjects` WHERE `subject`='$subject' ");
                $stmt->execute(array());
                $subjects=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($subjects as $subjects) {
                    ?>
                    <?php echo $subjects->subject; ?>
                    <?php
                }
            ?>


<?php
}
?>
<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Configuration / National Holiday List
</h4>
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







<div class="x_title">
    <h2>Update Course</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li><a href="index/coursemodule"><button class = "btn btn-primary">Delete</button></a></li>
        <li><a><button class = "btn btn-danger">Delete</button></a></li>
        <li><a href="index/update"><button class = "btn btn-warning">Update</button></a></li>
    </ul>
    <div class="clearfix"></div>
</div>
<div class="x_panel">
    <div class="x_content">
        <br />
        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label>Course/ Subject</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="first-name" required="required" placeholder="Course name/ subject" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label>Course code</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="first-name" required="required" placeholder="Course code" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label>Course Alias</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="first-name" required="required" placeholder="Alias" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="clearfix"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success btn-lg">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
              









