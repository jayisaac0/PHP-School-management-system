<?php
if(isset($_GET['ref'])) {
$ref = $_GET['ref'];
$student = $_GET['student'];
?>
<?php
$stmt = $auth_user->runQuery("SELECT * FROM `students` WHERE `studentid`='$student' ");
$stmt->execute(array());
$students=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($students as $students) {

$stmt = $auth_user->runQuery("SELECT * FROM `schoolsession` ORDER BY `time_created` DESC LIMIT 1  ");
$stmt->execute(array());
$schoolsession=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($schoolsession as $schoolsession) {     
    ?>


<div class="page-title">
    <div class="title_left">
        <h4><blue>Home</blue> / fee</h4>
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
        <h2> 

<?php

    $stmt = $auth_user->runQuery("SELECT * FROM `feeref` WHERE `classname`='$students->class' ");
    $stmt->execute(array());
    $feeref=$stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($feeref as $feeref) {
        if($schoolsession->term == "Term one"){

            echo '<h2>Sesion Amount: Ksh '.number_format($feeref->termone, 2).'</h2>';

        }
        if($schoolsession->term == "Term two"){

            echo '<h2>Sesion Amount: Ksh '.number_format($feeref->termtwo, 2).'</h2>';

        }
        if($schoolsession->term == "Term three"){

            echo '<h2>Sesion Amount: Ksh '.number_format($feeref->termthree, 2).'</h2>';

        }
    }

?> 



        </h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10%;">Student ID </th>
                    <th style="width:10%;">Receipt no</th>
                    <th style="width:10%;">Bank name </th>
                    <th style="width:10%;">Payment method</th>
                    <th style="width:10%;">Amount Paid</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $stmt = $auth_user->runQuery("SELECT * FROM `studentfeepayment` WHERE `studentid`='$student' AND `term`='$schoolsession->term' ");
            $stmt->execute(array());
            $studentfeepayment=$stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($studentfeepayment as $studentfeepayment) {
            ?>
            <tr>
                <td><?php echo $studentfeepayment->studentid; ?></td>
                <td><?php echo $studentfeepayment->receiptnumber; ?></td>
                <td><?php echo $studentfeepayment->bank; ?></td>
                <td><?php echo $studentfeepayment->paymentmethod; ?></td>
                <td><?php echo number_format($studentfeepayment->amountpaid, 2); ?></td>
                <?php @$paid = $studentfeepayment->amountpaid;  @$totalfee += $paid; ?>
            </tr>
            <?php  
            }
            ?>  
            </tbody>       
        </table>

    </div>
</div>




<div class="x_panel">
    <div class="x_title">
        <h2>Fee statement </h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <h2>Paid Ksh: <?php echo @number_format($totalfee, 2); ?> <i class="pull-right">
            
            <?php
                $stmt = $auth_user->runQuery("SELECT * FROM `feeref` WHERE `classname`='$students->class' ");
                $stmt->execute(array());
                $feeref=$stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($feeref as $feeref) {
                    if($schoolsession->term == "Term one"){
                        echo '<b> Balance Ksh: '.@number_format($feeref->termone - $totalfee, 2).'</b>';
                    }
                    if($schoolsession->term == "Term two"){
                        echo '<b> Balance Ksh: '.@number_format($feeref->termtwo - $totalfee, 2).'</b>';
                    }
                    if($schoolsession->term == "Term three"){
                        echo '<b> Balance Ksh: '.@number_format($feeref->termthree - $totalfee, 2).'</b>';
                    }
                    
                }
            ?>    

        </i></h2>

    </div>
</div>

    <?php
}
}
?>
<?php   
}
?>