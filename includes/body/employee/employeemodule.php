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
    <div class="x_title">
        <h2>Recently Added employees</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:10%;">Employee Id</th>
                    <th style="width:15%;">Employee Name</th>
                    <th style="width:15%;">Responsibility</th>
                    <th style="width:20%;">Classes assigned</th>
                    <th style="width:20%;">Assign classes/ subjects</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `employees`   ");
                $stmt->execute(array());
                $employees=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($employees as $employees) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $employees->employeeid; ?></td>
                        <td><?php echo $employees->firstname.' '; ?><?php echo $employees->middlename; ?></td>
                        <td><a>Teacher</a></td>
                        <td>

                        <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `teachingsubjectallocation` WHERE `employeeid`='$employees->employeeid' ");
                            $stmt->execute(array());
                            $teachingsubjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($teachingsubjectallocation as $teachingsubjectallocation) {
                                (int)$employees->firstname=1;
                                @$employees->middlename += $employees->firstname;
                            }
                            ?>

                        <a>(<?php echo $employees->middlename; ?>) Classes</a></td>
                        <td><a href="index/employee/<?php echo $employees->employeeid; ?>"><button type="button" class="btn btn-info btn-xs">Allocate class</button></a></td>
                    </tr>                    
                    <?php
                }
            ?>


            </tbody>
        </table>
    </div>
</div>
<a href="index/addemployee"><button class="btn btn-primsry">Add employee</button></a>



