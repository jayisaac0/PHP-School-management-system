<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
<div class="x_title">
    <h2>Manage Students</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li><a href="index/addstudent"><button class = "btn btn-primary">Add</button></a></li>
    </ul>
    <div class="clearfix"></div>
</div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:10%;">Student Id</th>
                    <th style="width:15%;">Student Firstname</th>
                    <th style="width:15%;">Student Middlename</th>
                    <th style="width:15%;">Student Lastname</th>
                    <th style="width:15%;">Subjects</th>
                    <th style="width:15%;">Admit</th>
                    <th style="width:15%;">Course</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `students`  ");
                $stmt->execute(array());
                $students=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($students as $students) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $students->studentid; ?></td>
                        <td><a href="index/studentname"><?php echo $students->firstname; ?></a></td>
                        <td><a><?php echo $students->middlename; ?></a></td>
                        <td><a><?php echo $students->lastname; ?></a></td>
                        <td>
                        <?php
                            $stmt = $auth_user->runQuery("SELECT * FROM `subjectallocation` WHERE `studentid`='$students->studentid' ");
                            $stmt->execute(array());
                            $subjectallocation=$stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($subjectallocation as $subjectallocation) {
                                    (int)$students->lastname=1;
                                    @$students->lastname += $students->lastname;
                            }
                        ?>
                        <a>(<?php echo $students->lastname; ?>) Subjects</a></td>
                        <td><a>Hello</a></td>
                        <td><a>View</a></td>
                    </tr>
                    <?php
                }
            ?>


            </tbody>
        </table>
    </div>
</div>