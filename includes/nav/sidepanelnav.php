<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index" class="site_title"> <span>Welcome <?php  echo $userRow['user_name']; ?></span></a>
        </div>
        <div class="clearfix"></div>
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/logo.gif" alt="..." style="width:150px;height:150px;" class="img-circle profile_img">
            </div>
        </div>
        <br />

<?php

if($userRow['access_level'] == "master_admin"){
    //echo "Administrator";
    require_once 'nav_access/admin.php';
}
else if($userRow['access_level'] == "student"){
    //echo "Student accound";
    require_once 'nav_access/student.php';
}
else if($userRow['access_level'] == "employee"){
    //echo "Employee panel";
    require_once 'nav_access/employee.php';
}
else if($userRow['access_level'] == "library"){
    //echo "Library panel";
    require_once 'nav_access/library.php';
}
else{
    echo '<script type="text/javascript"> window.location = "page_403" </script>';
}

?>


        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" id="compose" data-placement="top" title="Password change" >
                <span class="fa fa-key" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php?logout=true">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>

    </div>
</div>


<div class="compose col-md-2 col-sm-2 col-xs-12" style="display: none;">
    <center><div class="compose-header">Change password<button type="button" class="close compose-close"><span>×</span></button></div>
    <div class="compose-body"></center>
        <br />

    <div id="" class=" placeholderText" contenteditable="true">

        <?php require_once 'includes/controllers/insert/password.php'; ?>
        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
            <?php
                if(isset($error))
                {
                    foreach($error as $error)
                    {
                         ?>
                         <div class="alert alert-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                         </div>
                         <?php
                    }
                }
            ?>      
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="Password" id="user_pass" name="user_pass" required="required" placeholder="New password" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="Password" id="ver_user_pass" name="ver_user_pass" required="required" placeholder="Verify password" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <center><input type="submit" id="resetpass" name="resetpass" class="btn btn-success btn-lg" value="Change password" /></center>
                </div>
            </div>
        </form>

    </div>
</div>

