<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
    <div class="x_title">
        <h2>CURRENT SESSION</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:50%;">TERM</th>
                    <th style="width:50%;">YEAR</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `schoolsession` ORDER BY `time_created` DESC LIMIT 1  ");
                $stmt->execute(array());
                $schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($schoolsession as $schoolsession) {
                    ?>
                <tr>
                    <td>
                        <button type="button" class="btn btn-info btn-lg orange" style="width:100%;"><h1><?php echo $schoolsession->term; ?></h1></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg orange" style="width:100%;"><h1><?php echo $schoolsession->year; ?></h1></button>
                    </td>
                </tr>
                    <?php
                }
            ?>

            </tbody>
        </table>
    </div>
</div>
