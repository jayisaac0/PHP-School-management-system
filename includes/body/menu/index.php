<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Admin Dashboard</h4>
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
    <div class="x_panel">
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats blue whitefont">
                    <div class="icon"><i class="fa fa-group"></i></div>
                            <?php $stmt = $auth_user->runQuery("SELECT * FROM `subjects` ");
                            $stmt->execute(array());
                            $subjects=$stmt->fetchAll(PDO::FETCH_OBJ); 
                             foreach ($subjects as $subjects) { @$num = 1;  @$count += $num; }?> 
                    <div class="count"><?php echo $count; ?></div>
                    <h3>Students</h3>
                    <p><center><a href="index/addstudents">Add student</a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats blue green">
                    <div class="icon"><i class="fa fa-user"></i></div>
                            <?php $stmt = $auth_user->runQuery("SELECT * FROM `employees` ");
                            $stmt->execute(array());
                            $employees=$stmt->fetchAll(PDO::FETCH_OBJ); 
                             foreach ($employees as $employees) { @$ens = 1;  @$es += $ens; }?>                     
                    <div class="count"><?php echo $es; ?></div>
                    <h3>Employees</h3>
                    <p><center><a href="index/addemployee">Add employee </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats orange whitefont">
                    <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                            <?php $stmt = $auth_user->runQuery("SELECT * FROM `subjects` ");
                            $stmt->execute(array());
                            $subjects=$stmt->fetchAll(PDO::FETCH_OBJ); 
                             foreach ($subjects as $subjects) { @$sub = 1;  @$sub_j += $sub; }?>                      
                    <div class="count"><?php echo $sub_j; ?></div>
                    <h3>Active courses/subjects</h3>
                    <p><center><a href="index/addcourse">Add course</a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats red whitefont">
                    <div class="icon"><i class="fa fa-check-square-o"></i></div>
                            <?php $stmt = $auth_user->runQuery("SELECT * FROM `subjects` ");
                            $stmt->execute(array());
                            $subjects=$stmt->fetchAll(PDO::FETCH_OBJ); 
                             foreach ($subjects as $subjects) { @$batch = 1;  @$sub_b += $batch; }?>                      
                    <div class="count"><?php echo $sub_b; ?></div>
                    <h3>Active Batches</h3>
                    <p><center><a href="javascript::">More information</a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel" style="height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Notice Board </h2>

                <ul id="myTab" class="nav nav-tabs nav-right" role="tablist" style="float:right;">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">General</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Student</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Employee</a>
                    </li>
                </ul>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <div class="alert alert-warning alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            No notice...
                            </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <div class="alert alert-warning alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            No notice...
                            </div>
                            
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                            <div class="alert alert-warning alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            No notice...
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
