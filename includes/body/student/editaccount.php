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
        <h4><blue>Home</blue> / Student/ <?php echo $students->firstname.' '; ?><?php echo $students->middlename; ?></h4>
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
                            <h2>Name: <?php echo $students->studenttitle.' '; ?><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?><?php echo $students->lastname; ?></h2>
                            <h4>Student ID: <?php echo $students->studentid; ?></h4>
                            <h4>Gender: <?php echo $students->gender; ?></h4>
                            <h4>E-mail: <?php echo $students->studentemail; ?></h4>
                            <h4>Phone number: <?php echo $students->mobilenumber; ?></h4>
                            <h4>Date of birth: <?php echo $students->dateofbirth; ?></h4>
                            <h4>Nationality: <?php echo $students->nationality; ?></h4>
                            <h4>Class: <?php echo $students->class.' '; ?><?php echo $students->classdetails; ?></h4>
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
            <h2><i class="fa fa-bars"></i> Update Marks </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">


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
                    <input type="text" id="title" name="title" value="<?php echo $students->studenttitle; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Firstname</label>
                    <input type="text" id="firstname" name="firstname" value="<?php echo $students->firstname; ?>" required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Middlename</label>
                    <input type="text" id="middlename" name="middlename"  value="<?php echo $students->middlename; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Lastname</label>
                    <input type="text"  id="lastname" name="lastname" value="<?php echo $students->lastname; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Gender</label>
                    <input type="text"  id="gender" name="gender"  value="<?php echo $students->gender; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">E- mail ID</label>
                    <input type="text"  id="email" name="email"  value="<?php echo $students->studentemail; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Mobile number</label>
                    <input type="text"  id="mobilenumber" name="mobilenumber"  value="<?php echo $students->mobilenumber; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Date of birth</label>
                    <input type="text"  id="dateofbirth" name="dateofbirth"  value="<?php echo $students->dateofbirth; ?>" required="required" placeholder="Enter Title" class="form-control col-md-7 col-xs-12 "  />
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Nationality</label>
                    <input type="text"  id="nationality" name="nationality"  value="<?php echo $students->nationality; ?>"  required="required" placeholder="Enter Title" class="form-control col-md-6 col-xs-12 "  />
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <label class="col-sm-12 col-md-12 col-xs-12">Profile image</label>
                    <input type="file"  id="profileimage" name="profileimage" class="form-control col-md-6 col-xs-12 "  />
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
<?php   
}
?>
