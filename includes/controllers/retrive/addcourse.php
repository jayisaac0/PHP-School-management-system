<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
    <div class="x_title">
        <h2>Manage Current Active Course</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:20%;">Subject/Course</th>
                    <th style="width:30%;">Students taking subject</th>
                    <th style="width:20%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `subjects` ");
                $stmt->execute(array());
                $subjects=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($subjects as $subjects) {
                    ?>
                <tr>
                    <td><?php echo $subjects->subject; ?></td>
                    <td>
                        <button type="button" class="btn btn-info btn-xs">Students (9)</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info btn-xs"><a href="index/view/<?php echo $subjects->subject; ?>"><i class="fa fa-eye"></i></a> </button>
                        <button type="button" class="btn btn-info btn-xs"><a href="index/update/<?php echo $subjects->subject; ?>"><i class="fa fa-edit"></i></a> </button>
                        <button type="button" class="btn btn-info btn-xs"><a href="index/delete"><i class="fa fa-trash"></i></a></button>
                    </td>
                </tr>
                    <?php
                }
            ?>

            </tbody>
        </table>
    </div>
</div>

