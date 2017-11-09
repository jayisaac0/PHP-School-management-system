<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
    <div class="x_title">
        <h2>State/Province List</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">#</th>
                    <th style="width:50%;">Class</th>
                    <th style="width:20%;">Details</th>
                    <th style="width:20%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `classes` ");
                $stmt->execute(array());
                $classes=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($classes as $classes) {
                    ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $classes->classname; ?></td>
                    <td><?php echo $classes->classdetails; ?></td>
                    <td><a>View</a></td>
                </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
