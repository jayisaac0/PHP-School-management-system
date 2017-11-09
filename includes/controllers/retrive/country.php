<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>

<div class="x_panel">
    <div class="x_title">
        <h2>Country List</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">#</th>
                    <th style="width:80%;">Country Name</th>
                    <th style="width:10%;">Position</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `country` ");
                $stmt->execute(array());
                $country=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($country as $country) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $country->country_name; ?></td>
                        <td><a>View</a></td>
                    </tr>
                    <?php
                }
            ?>

            </tbody>
        </table>
    </div>
</div>