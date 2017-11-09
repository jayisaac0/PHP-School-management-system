<?php
$stmt = $auth_user->runQuery("SELECT * FROM `employees` WHERE `employeeid`='".$userRow['user_name']."' ");
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
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <h2>Joshua Isaac</h2>
                                <h5>Kenyatta</h5>
                                <h5>23467823</h5>
                                <h4>Teacher</h4>
                            </div>
                            

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Update information </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

        <?php require_once 'includes/controllers/insert/updateemployeeprofile.php'; ?>
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
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Title</label>
                    <input type="text" id="title" name="title" value="<?php echo $employees->title; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Firstname</label>
                    <input type="text" id="firstname" name="firstname" value="<?php echo $employees->firstname; ?>" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Middlename</label>
                    <input type="text" id="middlename" name="middlename"  value="<?php echo $employees->middlename; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Lastname</label>
                    <input type="text"  id="lastname" name="lastname" value="<?php echo $employees->lastname; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Gender</label>
                    <input type="text"  id="gender" name="gender"  value="<?php echo $employees->gender; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">E- mail ID</label>
                    <input type="text"  id="email" name="email"  value="<?php echo $employees->email; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Mobile number</label>
                    <input type="text"  id="mobilenumber" name="mobilenumber"  value="<?php echo $employees->mobilenumber; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Date of birth</label>
                    <input type="text"  id="dateofbirth" name="dateofbirth"  value="<?php echo $employees->dateofbirth; ?>" required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Nationality</label>
                    <input type="text"  id="nationality" name="nationality"  value="<?php echo $employees->nationality; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Profile image</label>
                    <input type="file"  id="file" name="profileimage"   />
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button type="submit" id="postemployeeupdate" name="postemployeeupdate" class="btn btn-success btn-lg">Create</button>
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
?>  



 
 
 
 
 
 
 
 
