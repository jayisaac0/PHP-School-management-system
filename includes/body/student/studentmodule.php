<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Student Module</h4>
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
    <div class="x_content">


            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats orange">
                    <div class="icon"><i class="fa fa-group blue"></i></div>
                    <h5 class="fivepad">STUDENTS</h5>
            <?php $stmt = $auth_user->runQuery("SELECT * FROM `subjects` ");
            $stmt->execute(array());
            $subjects=$stmt->fetchAll(PDO::FETCH_OBJ); 
             foreach ($subjects as $subjects) { @$num = 1;  @$count += $num; }?> 
                    <div class="count"><?php echo $count; ?></div>
                    <p><center class="right"><a href="index/addstudent">Add students </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>


            <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats orange">
                    <div class="icon"><i class="fa fa-edit blue"></i></div>
                    <h5 class="fivepad">MANAGE STUDENT</h5>
                    <div class="count">0</div>
                    <p><center class="right"><a href="index/managestudents">Allocate subjects </a><i class="fa fa-arrow-circle-right"></i></center></p>
                </div>
            </div>


    </div>
</div>


<div class="x_panel">
    <div class="x_title">
        <h2>Recently Added Student</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:20%;">#</th>
                    <th style="width:20%;">Student Id</th>
                    <th style="width:20%;">Student Name</th>
                    <th style="width:20%;">Class</th>
                    <th style="width:20%;">Date created</th>
                    <th style="width:20%;">View Student</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>KIS/234/23</td>
                    <td>Joshua Isaac</td>
                    <td><a>Class 1</a></td>
                    <td><a>12/12/12</a></td>
                    <td><a>View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



