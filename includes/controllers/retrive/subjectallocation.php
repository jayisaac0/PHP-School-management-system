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
                    <th style="width:15%;">Name</th>
                    <th style="width:15%;">Enrolled subjects</th>
                    <th style="width:15%;">Level</th>
                    <th style="width:15%;">Class/Year</th>
                    <th style="width:15%;">Term</th>
                    <th style="width:15%;">Marks</th>
                    <th style="width:15%;">Grade</th>
                    <th style="width:15%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `subjectallocation` WHERE `studentid`='$student' ");
                $stmt->execute(array());
                $notice=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($notice as $notice) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td>Joshua Isaac</td>
                        <td><a>8 enrolled</a></td>
                        <td><a>Primary</a></td>
                        <td><a>Class 8</a></td>
                        <td><a>Term 2</a></td>
                        <td><a>456</a></td>
                        <td><a>A</a></td>
                        <td><a href="index/results">View</a></td>
                    </tr>
                    <?php
                }
            ?>


                <tr>
                    <td>1</td>
                    <td>Joshua Isaac</td>
                    <td><a>8 enrolled</a></td>
                    <td><a>Primary</a></td>
                    <td><a>Class 8</a></td>
                    <td><a>Term 1</a></td>
                    <td><a>489</a></td>
                    <td><a>A</a></td>
                    <td><a href="index/results">View</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Joshua Isaac</td>
                    <td><a>8 enrolled</a></td>
                    <td><a>Primary</a></td>
                    <td><a>Class 8</a></td>
                    <td><a>Term 3</a></td>
                    <td><a>478</a></td>
                    <td><a>A</a></td>
                    <td><a href="index/results">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
