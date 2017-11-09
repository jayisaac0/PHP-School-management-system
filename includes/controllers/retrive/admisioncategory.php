<?php 
   require_once("../../../class.user.php");
  $auth_user = new USER();
 ?>
<div class="x_panel">
<div class="x_title">
    <h2>Admission Categories</h2>
    <ul class="nav navbar-right panel_toolbox">
        <li><a href="index/addstudent"><button class = "btn btn-primary">Add</button></a></li>
    </ul>
    <div class="clearfix"></div>
</div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:20%;">#</th>
                    <th style="width:20%;">Category</th>
                    <th style="width:20%;"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `admisioncategory` ");
                $stmt->execute(array());
                $admisioncategory=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($admisioncategory as $admisioncategory) {
                    ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $admisioncategory->category; ?></td>
                        <td>edit/ delete</td>
                    </tr>
                    <?php
                }
            ?>


            </tbody>
        </table>
    </div>
</div>





