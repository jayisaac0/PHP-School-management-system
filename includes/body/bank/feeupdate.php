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
        <h4><blue>Home</blue> / <?php echo $students->firstname.' '; ?><?php echo $students->middlename; ?></h4>
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




<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Profile </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <img src="" alt="" style="background:black;width:200px;height:200px;border-radius:200px;" class="caption thumbnail col-md-6 col-sm-6 col-xs-12" />
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <h2><?php echo $students->firstname.' '; ?><?php echo $students->middlename; ?></h2>
                                <h5><?php echo $students->class.' '; ?><?php echo $schoolsession->term; ?></h5>
                                <h5>IFBJ/68576/7869</h5>
                                <?php require_once 'accounts/fee.php'; ?>                        
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel" style="min-height:350px;">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> Allocate subjects </h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                        <?php require_once 'includes/controllers/insert/studentfeeupdate.php'; ?>
				        <form id="demo-form2" method="POST" data-parsley-validate class="form-horizontal form-label-left">
				                <?php
				                    if(isset($error))
				                    {
				                        foreach($error as $error)
				                        {
				                             ?>
				                             <div class="alert alert-danger" style = "padding:1px;margin:1px;">
				                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
				                             </div>
				                             <?php
				                        }
				                    }
				                ?>

				            <div class="form-group">
				                <div class="col-md-12 col-sm-12 col-xs-12">
				                    <input type="hidden" id="studentid" name="studentid" value="<?php echo $student; ?>" />
                                    <input type="hidden" id="classname" name="classname" value="<?php echo $students->class; ?>" />
                                    <input type="hidden" id="term" name="term" value="<?php echo $schoolsession->term; ?>" />
                                    <input type="hidden" id="year" name="year" value="<?php echo date('Y'); ?>" />
                                </div>
				            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Amount</label>
                                    <input type="text" id="amountpaid" name="amountpaid" class="form-control col-md-7 col-xs-12 "  />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Receit / Check no</label>
                                    <input type="text" id="receiptnumber" name="receiptnumber" class="form-control col-md-7 col-xs-12 "  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Bank name</label>
                                    <input type="text" id="bank" name="bank" class="form-control col-md-7 col-xs-12 "  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Payment method</label>
                                    <input type="text" id="paymentmethod" name="paymentmethod" placeholder="check or cash..." class="form-control col-md-7 col-xs-12 "  />
                                </div>
                            </div>

				            <div class="form-group">
				                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0">
				                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
				                    <button type="submit" id="studentfee" name="studentfee" class="btn btn-success btn-lg">Update</button>
				                </div>
				            </div>
				        </form>

                    </div>

                </div>
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
        <h2>Paid amount <?php echo @number_format($totalfee, 2); ?> <i class="pull-right">
            
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
}}
?>
<?php	
}
?>