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
                    <th style="width:50%;">State/Province</th>
                    <th style="width:20%;">Country</th>
                    <th style="width:20%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `state` ");
                $stmt->execute(array());
                $state=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($state as $state) {
                    ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $state->state; ?></td>
                    <td><?php echo $state->country_name; ?></td>
                    <td><a>View</a></td>
                </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
