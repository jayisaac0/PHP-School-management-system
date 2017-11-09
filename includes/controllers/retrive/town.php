<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
    <div class="x_title">
        <h2>City/Town List</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">#</th>
                    <th style="width:50%;">City/Town</th>
                    <th style="width:50%;">State/Province</th>
                    <th style="width:20%;">Country</th>
                    <th style="width:20%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `town` ");
                $stmt->execute(array());
                $town=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($town as $town) {
                    ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $town->town; ?></td>
                    <td><?php echo $town->state; ?></td>
                    <td><?php echo $town->country_name; ?></td>
                    <td><a>View</a></td>
                </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>