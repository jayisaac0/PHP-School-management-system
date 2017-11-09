<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];
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







<div class="x_panel">
    <div class="x_title">
        <h2>Assignment submissions</h2>
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
                    <th style="width:10%;">Name</th>
                    <th style="width:55%;">title</th>
                    <th style="width:15%;">Assignment title</th>
                    <th style="width:20%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `assignmentreplies` WHERE `assignmetntref`='$student'  ");
            $stmt->execute(array());
            $assignmentreplies=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($assignmentreplies as $assignmentreplies) {
                ?>
                <tr>
                    <td>1</td>
                    <td>
                    <?php
                    $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='$assignmentreplies->studentid'  ");
                    $stmt->execute(array());
                    $students=$stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($students as $students) {
                        echo $students->firstname.' ';echo $students->middlename.' ';echo $students->lastname;
                        }
                    ?>
                    </td>
                    <td><?php echo substr($assignmentreplies->title, 0, 100).'...'; ?></td>
                    <td></td>
                    <td><a href="index/view/<?php echo $assignmentreplies->assignmetntref; ?>"><button class="btn btn-primary btn-xs" style="width:100%;">View</button></a></td>
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
?>