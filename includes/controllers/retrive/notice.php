<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
    <div class="x_title">
        <h2>Notice List</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">#</th>
                    <th style="width:20%;">Titlr</th>
                    <th style="width:80%;">Details</th>
                    <th style="width:10%;">Target</th>
                    <th style="width:10%;">Status</th>
                    <th style="width:20%;">settings</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `notice` ");
                $stmt->execute(array());
                $notice=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($notice as $notice) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $notice->noticetitle; ?></td>
                        <td><?php echo $notice->noticedescription; ?></td>
                        <td><a><?php echo $notice->target; ?></a></td>
                        <td><a><?php echo $notice->messagestatus; ?></a></td>
                        <td><a>delete/edit</a></td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

