<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
    <div class="x_title">
        <h2>Nationality List</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">#</th>
                    <th style="width:80%;">Nationality Name</th>
                    <th style="width:10%;">View</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `nationality` ");
                $stmt->execute(array());
                $nationality=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($nationality as $nationality) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $nationality->nationality; ?></td>
                        <td><a>View</a></td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>


