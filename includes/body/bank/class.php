<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = base64_decode($_GET['student']);
echo $ref.'<br />';
echo $student.'<br />';
?>


<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / Admin Dashboard</h4>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
</div>





<div class="x_panel">
    <div class="x_title">
        <h2><?php echo $student; ?> </h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">Sr.No </th>
                    <th style="width:10%;">Student ID </th>
                    <th style="width:20%;">Student Name</th>
                    <th style="width:15%;">Receipt No.</th>
                    <th style="width:10%;">Fees Category</th>
                    <th style="width:10%;">Amount</th>
                    <th style="width:10%;">Bank</th>
                    <th style="width:10%;">Transaction Date</th>
                    <th style="width:10%;">Bank</th>
                    <th style="width:10%;">Transaction Date</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `class`='$student' ");
            $stmt->execute(array());
            $students=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($students as $students) {
                echo $students->class;

            ?>  
                <tr>
                    <td>1</td>
                    <td><?php echo $students->studentid; ?></td>
                    <td><?php echo $students->firstname.' '; ?><?php echo $students->middlename.' '; ?><?php echo $students->lastname; ?></td>
                    <td>Kenya</td>
                    <td><a>View</a></td>
                    <td>1</td>
                    <td>Nairobi</td>
                    <td>Nyanza</td>
                    <td>Kenya</td>
                    <td><a href="index/feeupdate/<?php echo $students->studentid; ?>"><button class="btn btn-primary btn-xs">Update payment</button></a></td>
                </tr>
                <?php
                }
            ?> 
            </tbody>
        </table>
    </div>
</div>


<?php   
}
?>