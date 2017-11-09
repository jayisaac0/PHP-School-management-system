<?php
if(isset($_GET['ref'])) {
$student = $_GET['student'];
$ref = $_GET['ref'];

?>
<?php


echo $ref.'<br />';
echo $student.'<br />';




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





    <?php
    $stmt = $auth_user->runQuery("SELECT * FROM `assignments` WHERE `assignmetntref`='$student'  ");
    $stmt->execute(array());
    $assignments=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($assignments as $assignments) {

            $stmt = $auth_user->runQuery("SELECT * FROM `employees` WHERE `employeeid`='$assignments->employeeid'  ");
            $stmt->execute(array());
            $employees=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($employees as $employees) {
        ?> 


<div class="x_panel">
    <div class="x_title">
        <h2><?php echo $employees->title.''; ?>:: <?php echo $employees->firstname.' '; ?><?php echo $employees->middlename; ?></h2>
        <i class="pull-right"><?php echo $assignments->classname.' '; ?><?php echo $assignments->classdetails; ?></i>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:100%;">
                    <?php echo $assignments->assignmenttite; ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div style="white-space:pre-wrap;word-wrap:break-word;"><?php echo $assignments->typedassignment; ?></div></td>
                </tr>
                <tr>
                    <td>( <?php echo $assignments->marks; ?> ) <i class="pull-right">DUE DATE:: <?php echo $assignments->duedate; ?></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
        <?php
        }
    }
    ?>  

<div class="x_panel">
    <div class="x_title">
        <h2><?php echo $employees->title.''; ?>:: <?php echo $employees->firstname.' '; ?><?php echo $employees->middlename; ?></h2>
        <i class="pull-right">Reply</i>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

        <?php require_once 'includes/controllers/insert/replyassignment.php'; ?>    
        <form  method="POST" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Type assignment</label>
                    <textarea type="text"  id="typedassignmentreply " name="typedassignmentreply" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 " rows="8" ></textarea>
                    <input type="hidden" name="assignmetntref" value="<?php echo $student; ?>" />
                    <input type="hidden" name="title" value="<?php echo $assignments->assignmenttite; ?>" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="replyassignment" name="replyassignment" class="btn btn-success btn-lg">Post</button>
                </div>
            </div>
        </form>
    </div>
</div>



    <?php
}
?>