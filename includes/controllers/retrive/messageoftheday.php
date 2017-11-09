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
                    <th style="width:5%;">#</th>
                    <th style="width:80%;">Details</th>
                    <th style="width:10%;">User Type</th>
                    <th style="width:5%;">Status</th>
                    <th style="width:5%;">settings</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `messageoftheday` ");
                $stmt->execute(array());
                $messageoftheday=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($messageoftheday as $messageoftheday) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $messageoftheday->messageoftheday; ?></td>
                        <td><?php echo $messageoftheday->target; ?></td>
                        <td><a><?php echo $messageoftheday->messagestatus; ?></a></td>
                        <td><a>delete/edit</a></td>
                    </tr>
                    <?php
                }
            ?>

            </tbody>
        </table>
    </div>
</div>