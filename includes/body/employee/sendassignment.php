<?php
if(isset($_GET['ref'])) {
$det = $_GET['det'];
$ref = $_GET['ref'];

$student = base64_decode($_GET['student']);
?>
<?php
$stmt = $auth_user->runQuery("SELECT * FROM `classes` WHERE `classname`='$student' AND `classdetails`='$det' ");
$stmt->execute(array());
$classes=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($classes as $classes) {
    ?>
<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / <?php echo $student.' '; ?><?php echo $det; ?>/ Send assignment</h4>
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





<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Create / Send assignment </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">


        <?php require_once 'includes/controllers/insert/postassignment.php'; ?>
        <form  method="POST" data-parsley-validate class="form-horizontal form-label-left">
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
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Assignment ref:</label>
                    <input type="text"  id="assignmetntref" readonly="readonly" name="assignmetntref" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12" value="<?php echo time(); ?>" />

                    <input type="hidden" id="employeeid" name="employeeid" value="<?php echo $userRow['user_name']; ?>"  />
                    <input type="hidden" id="classname" name="classname" value="<?php echo $student; ?>"  />
                    <input type="hidden" id="classdetails" name="classdetails" value="<?php echo $det; ?>"  />
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Assignment title</label>
                    <input type="text"  id="assignmenttite" name="assignmenttite" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
            </div>
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Type assignment</label>
                    <textarea type="text"  id="typedassignment" name="typedassignment" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 " rows="8" ></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Marks</label>
                    <input type="text"  id="marks" name="marks" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Due date</label>
                    <div class="input-prepend input-group">
                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                        <input type="text"  name="duedate" id="reservation" class="form-control col-md-12 col-sm-12 col-xs-12 " value="" />
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Upload</label>
                    <input type="file"  name="assignmentfile"  class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>





            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postassignment" name="postassignment" class="btn btn-success btn-lg">Post</button>
                </div>
            </div>
        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<div class="x_panel">
    <div class="x_title">
        <h2>Sent assignments</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a href="index/addstudent"><button class = "btn btn-primary">Add</button></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">ref</th>
                    <th style="width:50%;">Assignment title</th>
                    <th style="width:15%;">Due date</th>
                    <th style="width:10%;">Submissions</th>
                    <th style="width:15%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `assignments` WHERE `employeeid`='".$userRow['user_name']."' ");
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
}
?>